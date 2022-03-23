<?php

namespace App\Http\Controllers;

use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class BrandProduct extends Controller
{
    public function list_brand_product()
    {
        $list_brand_products = DB::table('tbl_brand')->get();
        return view('admin.list-brand-product',compact('list_brand_products'));
    }
    public function add_brand_product(Request $request)
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;
        DB::table('tbl_brand')->insert($data);
        Session::put('message', 'Add brand successfully');
        return Redirect::to('/list-brand-product');
    }
    public function delete_brand_product($brand_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_id)->delete();
        return Redirect::to('/list-brand-product');
    }
    public function update_brand_product(Request $request) {
        $brand_product_id = $request->input('brand_product_id');
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update($data);
        return Redirect::to('/list-brand-product');
    }
    public function active_brand_product($brand_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_id)->update(['brand_status' => 1]);
        return Redirect::to('/list-brand-product');
    }
    public function unactive_brand_product($brand_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_id)->update(['brand_status' => 0]);
        return Redirect::to('/list-brand-product');
    }
}
