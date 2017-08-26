<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_products;
class LoaiSanPhamController extends Controller
{
    //
    public function getDanhSach()
    {
    	$loaisp=type_products::all();
    	return view('admin.loaisp.danhsach',['loaisp'=>$loaisp]);
    }
    public function getThem()
    {
    	return view('admin.loaisp.them');
    }
    public function postThem(Request $request)
    {
    	$this->validate($request,[
    			'Ten'=>'required|max:100|unique:type_products,name'
    		],[
    			'Ten.required'=>'Bạn chưa nhập tên loại sản phẩm',
    			'Ten.max'=>'Tên loại sản phẩm quá dài',
    			'Ten.unique'=>'loại sản phẩm đã tồn tại'
    		]);
    	$loaisp=new type_products;
    	$loaisp->name=$request->Ten;
    	$loaisp->description=$request->MoTa;
    	if($request->hasFile('Hinh'))
    	{
    		$file=$request->file('Hinh');
    		$name=$file->getClientOriginalName();
    		$Hinh=str_random(4)."_".$name;
    		while(file_exists("image/product".$Hinh))
    		{
    			$Hinh=str_random(4)."_".$name;
    		}
    		$file->move("image/product",$Hinh);
    		$loaisp->image=$Hinh;
    	}
    	else
    	{
    		$loaisp->image="";
    	}
    	$loaisp->save();
    	return redirect('admin.loaisp.danhsach')->with('thongbao','Thêm thành công');
    }
}
