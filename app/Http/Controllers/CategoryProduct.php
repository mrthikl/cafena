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
        // $manager_category_product = view('admin.list-category-product')->width('list_category_product', $list_category_products);
        // return view('admin_layout')->width('admin.list-category-product', $manager_category_product);
        return view('admin.list-category-product', $list_category_products);
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
    public function remove_category_product(Request $request) {}
    public function active_category_product($category_id) {
        DB::table('tbl_category')->where('category_id', $category_id)->update(['category_status'=> 1]);
       return Redirect::to('/list-category-product');
    }
    public function unactive_category_product($category_id) {
        DB::table('tbl_category')->where('category_id', $category_id)->update(['category_status'=> 0]);
        return Redirect::to('/list-category-product');
    }
}
