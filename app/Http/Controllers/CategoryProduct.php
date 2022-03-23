<?php

namespace App\Http\Controllers;

use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

session_start();
class CategoryProduct extends Controller
{
    public function list_category_product()
    {
        $list_category_products = DB::table('tbl_category')->get();
        return view('admin.list-category-product', compact('list_category_products'));
    }
    public function add_category_product(Request $request)
    {
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        DB::table('tbl_category')->insert($data);
        Session::put('message', 'Add category successfully');
        return Redirect::to('/list-category-product');
    }
    public function delete_category_product($category_id)
    {
        DB::table('tbl_category')->where('category_id', $category_id)->delete();
        return Redirect::to('/list-category-product');
    }
    public function update_category_product(Request $request) {
        $category_product_id = $request->input('category_product_id');
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category')->where('category_id', $category_product_id)->update($data);
        return Redirect::to('/list-category-product');
    }
    public function active_category_product($category_id)
    {
        DB::table('tbl_category')->where('category_id', $category_id)->update(['category_status' => 1]);
        return Redirect::to('/list-category-product');
    }
    public function unactive_category_product($category_id)
    {
        DB::table('tbl_category')->where('category_id', $category_id)->update(['category_status' => 0]);
        return Redirect::to('/list-category-product');
    }
}
