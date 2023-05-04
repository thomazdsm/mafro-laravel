<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFile;
use App\Models\Media;
use Exception;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Scalar\String_;

class UploadController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }

    public function storeRequest(Request $request){
        try {
            $this->store($request->file('file'), $request->get('fileDir'));
            return redirect()->back();
        }catch (Exception $e){
            return redirect()->back();
        }
    }

    public function store(StoreFile $file, string $fileDir)
    {
        try {
            dd($file);
            exit();
            $userId = Auth::user()->id;
            $uploadedFile = $file;
            $size = $uploadedFile->getSize();

            DB::beginTransaction();

            $hash = sha1_file($uploadedFile);

            $dir = 'uploads' . DIRECTORY_SEPARATOR. $fileDir;
            $uploadDir = public_path() . DIRECTORY_SEPARATOR . $dir;

            //TODO: Inserir validação de arquivo existente

            if($uploadedFile->move($uploadDir, $hash)){
                $fileData = [
                    'name' => $fileDir,
                    'file_name' => $uploadedFile->getClientOriginalName(),
                    'mime_type' => $uploadedFile->getClientMimeType(),
                    'path' => $dir,
                    'disk' => config('app.uploads.disk'),
                    'file_hash' => $hash,
                    'collection' => null,
                    'size' => $size
                ];

                Media::create($fileData);
                DB::commit();
            }
        }catch (Exception $e){

            //flash()->error('Aconteceu algo errado ao tentar salvar. Caso o problema persista, entre em contato com o administrador.');
            return redirect()->back();
        }

        $file = $request->file('file');
        $name = $file->hashName();

        $upload = Storage::put("avatars/{$name}", $file);

        Media::query()->create(
            attributes: [
                'name' => "{$name}",
                'file_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getClientMimeType(),
                'path' => "avatars/{$name}"
                ,
                'disk' => config('app.uploads.disk'),
                'file_hash' => hash_file(
                    config('app.uploads.hash'),
                    storage_path(
                        path: "avatars/{$name}",
                    ),
                ),
                'collection' => $request->get('collection'),
                'size' => $file->getSize(),
            ],
        );

        return redirect()->back();
    }
}
