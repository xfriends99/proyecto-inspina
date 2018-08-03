<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class FileProcessingService
{

    public function __construct()
    {
    }

    public function uploadTemp(Request $request)
    {
        $image = $request->file('file');
        return $this->uploadFile($image, storage_path('/files'));
    }

    public function dropTemp()
    {

    }

    public function uploadFinally(Collection $files, $model, $repository)
    {
        dd($files);
    }

    private function uploadFile($file, $destinationPath)
    {
        $name = time().'-'.md5($file).'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath, $name);
        return $name;
    }
}