<?php

namespace App\Http\Controllers\Ajax\Storage;

use App\Foundation\Http\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Storage\File;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $path = Storage::disk('file')->putFile('', $request->file('file'));
        $name = $request->file('file')->getClientOriginalName();

        $file = new File;
        $file->file_name = $name;
        $file->storage_dir = $path;
        $file->save();

        return response()->json($file, 200);
    }

    public function destroy(Request $request)
    {
        $file = File::findOrFail($request->input('id'));
        Storage::disk('file')->delete($file->storage_dir);
        $file->delete();
    }
}
