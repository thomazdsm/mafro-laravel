<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFile;
use App\Models\Biblioteca;
use App\Models\Categoria;
use App\Models\Media;
use App\Models\Post;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biblioteca = Biblioteca::all();

        foreach ($biblioteca as $item) {
            $item->filter_tag = Categoria::where('filter_tag', $item->filter_tag)->value('title');
        }

        return view('admin.blog.biblioteca.index', compact('biblioteca'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.blog.biblioteca.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|min:3|max:100',
                'filter_tag' => 'required',
                'anexo' => 'required',
                'imagem' => 'required'
            ]);

            $uploadedAnexo = $request->file('anexo');
            $sizeAnexo = $uploadedAnexo->getSize();

            $uploadedImagem = $request->file('imagem');
            $sizeImagem = $uploadedImagem->getSize();

            $hashAnexo = $this->uploadFile($uploadedAnexo, $sizeAnexo, 'biblioteca/anexo', 'collection'); //TODO? Fix collection
            $hashImage = $this->uploadFile($uploadedImagem, $sizeImagem, 'biblioteca/imagem', 'collection');

            DB::beginTransaction();

            $postData = [
                'title' => $request->title,
                'filter_tag' => $request->filter_tag,
                'anexo' => $hashAnexo,
                'image' => $hashImage
            ];

            Biblioteca::create($postData);
            DB::commit();

            return redirect()->route('posts.index')->with('success', 'Post criado com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('admin.blog')->with('success', 'Erro ao criar o post!');
        }
    }

    public function uploadFile(UploadedFile $file, string $size, string $fileDir, string $collection){
        $hash = sha1_file($file);

        $dir = 'uploads' . DIRECTORY_SEPARATOR. $fileDir;
        $uploadDir = public_path() . DIRECTORY_SEPARATOR . $dir;

        //TODO: Inserir validação de arquivo existente

        if($file->move($uploadDir, $hash)) {
            $fileData = [
                'name' => $fileDir,
                'file_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getClientMimeType(),
                'path' => $dir,
                'disk' => $uploadDir,
                'file_hash' => $hash,
                'collection' => $collection,
                'size' => $size
            ];

            Media::create($fileData);
        }

        return $hash;
    }

    /**
     * Display the specified resource.
     */
    public function show(Biblioteca $biblioteca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biblioteca $biblioteca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biblioteca $biblioteca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biblioteca $biblioteca)
    {
        //
    }
}
