<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProductController extends Controller
{
    public function list_product()
    {
        $list_products = DB::table('tbl_product')
            ->join('tbl_category', 'tbl_category.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
            ->orderby('tbl_product.product_id', 'desc')
            ->get();
        $list_category_products = DB::table('tbl_category')->orderby('category_id', 'desc')->get();
        $list_brand_products = DB::table('tbl_brand')->orderby('brand_id', 'desc')->get();
        return view('admin.list-product', compact('list_category_products', 'list_brand_products', 'list_products'));
    }
    public function add_product(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_desc'] = $request->product_desc;
        $data['product_status'] = $request->product_status;
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/product', $new_image);
            $data['product_image'] = $new_image;
        } else {
            $data['product_image'] = '';
        }
        DB::table('tbl_product')->insert($data);
        return Redirect::to('/list-product');
    }
    public function delete_product($id)
    {
        DB::table('tbl_product')->where('product_id', $id)->delete();
        return Redirect::to('/list-product');
    }
    public function update_product(Request $request)
    {
        $product_id = $request->input('product_id');
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_desc'] = $request->product_desc;
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/product', $new_image);
            $data['product_image'] = $new_image;
        }
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        return Redirect::to('/list-product');
    }
    public function active_product($id)
    {
        DB::table('tbl_product')->where('product_id', $id)->update(['product_status' => 1]);
        return Redirect::to('/list-product');
    }
    public function unactive_product($id)
    {
        DB::table('tbl_product')->where('product_id', $id)->update(['product_status' => 0]);
        return Redirect::to('/list-product');
    }
}
