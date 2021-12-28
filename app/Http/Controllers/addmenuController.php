<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;

class addmenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('admin.menu.addindex',compact('menu'));
    }
}
