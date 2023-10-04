<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.index', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
            'category_id' => 'required',
        ]);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('storage/images/'), $filename);


                $menu = Menu::create([
                    'name' => $request->name,
                    'price' => $request->price,
                    'image' => 'images/' . $filename, // Store the image path, not $request->image
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                ]);

                if ($menu) {
                    return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Disimpan!']);
                }
            }
//            else return the error message
    }
}



