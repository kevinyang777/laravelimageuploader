<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\file;
use DB;
use Storage;


class FileController extends Controller
{
    public function index()
    {
        return file::all();
    }

    public function show(file $file)
    {
        return $file;
    }

    public function upload(Request $request,$file)
    {
        $image = $request->file('image');
        $fileName = $file. '.' . $image->getClientOriginalExtension();
        Storage::disk('local')->put($fileName, file_get_contents($image));
        return response()->json('success', 200);
    }

    public function store(Request $request)
    {
        $check = DB::table('files')->where('username', $request['username'])->first();;
        if($check){
            $res="false";
        } else{
            $res="true";
        }
        $insert = DB::table('files')->insert(
            [
                'username' => $request['username'],
                'email'=> $request['email'],
                'image' => $request['image'],
                'note' => $res,
            
            ]
        );
        return response()->json($request, 200);
    }

    public function update(Request $request, file $file)
    {
        $file->update($request->all());

        return response()->json($file, 200);
    }

    public function delete(file $file)
    {
        $file->delete();

        return response()->json(null, 204);
    }
}
