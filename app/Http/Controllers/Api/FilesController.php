<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\FileProcessingService;

class FilesController extends Controller
{
    /**
     * FileProcessingService $fileProcessingService
     */
    private $fileProcessingService;

    /**
     * FilesController constructor.
     * @param FileProcessingService $fileProcessingService
     */
    public function __construct(FileProcessingService $fileProcessingService)
    {
        $this->fileProcessingService = $fileProcessingService;
    }


    public function submit(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->has('file')){
            try{
                $name = $this->fileProcessingService->uploadTemp($request);
                return response()->json(['error'=>false, 'data' => $name], 200);
            } catch (\Exception $e){
                logger($e->getMessage());
                return response()->json(['error'=>true, 'message' => $e->getMessage()], 500);
            }
        }
    }
}
