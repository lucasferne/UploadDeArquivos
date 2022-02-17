<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Menu;

use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function create()
    {
        $menus = Menu::all();
        return view('upload.form', ['menus' => $menus]);
    }
    public function upload(Request $request)
    {
        $file = new File;
        if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {

            $extension = $request->arquivo->extension();
            $file->name = $request->name;

            $slug = Str::slug($file->name, '-');
            $file->slug = $slug . "-" . strtotime("now") . "." . $extension;

            $menu = Menu::where(['name'=>$request->menu])->first();
            $file->menu_id = $menu->id;
            $file->url = $request->name;
            //$file->url = o local onde o arquivo será salvo dinamicamente

            $file->save();

            $path = ('arquivos/' . $request->menu);
            $request->file('arquivo')->move(public_path($path), $file->slug);
            return redirect('/');
        } 
        else {
            dd("Envie Algo");
        }
    }
}
