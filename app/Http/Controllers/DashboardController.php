<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $menus = Menu::with('category')->get();
        $users = DB::table('users')->get();
//        dd($menus);
        return view('admin.index',  compact('menus', 'users'));
        return view('dashboard', compact('menus'));
    }
}
