<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\file;
use DB;

class FileController extends Controller
{
    public function index()
    {
        return file::all();
        // $files = DB::select(DB::raw('select * from files'));
        // return $files;
    }

    public function show(file $file)
    {
        return $file;
    }

    public function store(Request $request)
    {
        // $file = file::create($request->all());

        // return response()->json($file, 201);
        $check = DB::table('files')->where('username', $request['username'])->first();;
        if($check){
            $res="false";
        }else{
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
