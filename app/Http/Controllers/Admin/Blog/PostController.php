<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $posts = Post::latest()->paginate(5);
        return view('admin.blog.post.index', compact('posts'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.blog.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required|min:55|max:165',
            'detail' => 'required',
            'file' => 'required',
            'icon' => 'required'
        ]);

        try {
            //$userId = Auth::user()->id;
            $fileDir = $request->get('fileDir');
            $uploadedFile = $request->file('file');
            $size = $uploadedFile->getSize();

            DB::beginTransaction();

            $hash = sha1_file($uploadedFile);

            $dir = 'uploads' . DIRECTORY_SEPARATOR. $fileDir;
            $uploadDir = public_path() . DIRECTORY_SEPARATOR . $dir;

            //TODO: Inserir validação de arquivo existente

            if($uploadedFile->move($uploadDir, $hash)) {
                $fileData = [
                    'name' => $fileDir,
                    'file_name' => $uploadedFile->getClientOriginalName(),
                    'mime_type' => $uploadedFile->getClientMimeType(),
                    'path' => $dir,
                    'disk' => $uploadDir,
                    'file_hash' => $hash,
                    'collection' => $request->get('collection'),
                    'size' => $size
                ];

                Media::create($fileData);
                DB::commit();
            }

            $postData = [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'detail' => $request->detail,
                'link' => $dir,
                'icon' => $request->icon,
                'image' => $hash
            ];

            Post::create($postData);

            return redirect()->route('posts.index')->with('success', 'Post criado com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('admin.blog')->with('success', 'Erro ao criar o post!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post) : View
    {
        return view('admin.blog.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post) : View
    {
        return view('admin.blog.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post) : RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'img_small' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post) : RedirectResponse
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post excluído com sucesso!');
    }
}
