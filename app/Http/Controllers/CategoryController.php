<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

session_start();
class CategoryController extends Controller
{
    public function list_categories()
    {
        $list_categories = Category::orderby('category_id', 'desc')->get();
        return view('admin.list-categories', compact('list_categories'));
    }
    public function add_category(Request $request)
    {
        $data = new Category;
        $data->category_name = $request->category_name;
        $data->category_desc = $request->category_desc;
        $data->category_status = $request->category_status;
        $data->save();
        return Redirect::to('/list-categories');
    }
    public function delete_category($category_id)
    {
        Category::where('category_id', $category_id)->delete();
        return Redirect::to('/list-categories');
    }
    public function update_category(Request $request)
    {
        $category_id = $request->input('category_id');
        $data = Category::find($category_id);
        $data->category_name = $request->category_name;
        $data->category_desc = $request->category_desc;
        $data->save();
        return Redirect::to('/list-categories');
    }
    public function active_category($category_id)
    {
        Category::find($category_id)->update(['category_status' => 1]);
        return Redirect::to('/list-categories');
    }
    public function unactive_category($category_id)
    {
        Category::find($category_id)->update(['category_status' => 0]);
        return Redirect::to('/list-categories');
    }
}
