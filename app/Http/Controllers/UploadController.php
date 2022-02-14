<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Menu;

use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function create(){
        $menus = Menu::all();
       return view('upload.form', ['menus' => $menus]);
    }
    public function upload(Request $request){

        $file = new File;
        $file->name = $request->name;
        $file->slug = Str::slug($file->name, '-');


        $request -> file('arquivo') -> store('teste');

        $file->save();

        return redirect('/');

    }
}
