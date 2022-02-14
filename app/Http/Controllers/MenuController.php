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

    public function novaview(){
        $menus = Menu::all();
        return view('nova', ['menus' => $menus]);
    }

    public function store(Request $request){

        $menu = new Menu;

        $menu->name = $request->name;
        $menu->slug = Str::slug($menu->name, '-');

        $menu->save();

        return redirect('/');

    }
}
