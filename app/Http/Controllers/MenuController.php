<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\File;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
       return view('welcome', ['menu' => $menu]);
    }

    public function novaview($slug){

        $menu = Menu::where(['slug' => $slug])->first();
        $files = File::where(['menu_id' => $menu->id])->get();
        
        return view('nova', ['name' => $menu->name, 'files' => $files]);
    }

    public function store(Request $request){

        $menu = new Menu;

        $menu->name = $request->name;
        $menu->slug = Str::slug($menu->name, '-');

        $menu->save();

        return redirect('/');

    }
}