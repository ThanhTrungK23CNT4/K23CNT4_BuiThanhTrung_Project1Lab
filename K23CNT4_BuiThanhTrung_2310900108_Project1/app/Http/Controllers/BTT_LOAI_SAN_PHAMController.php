<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponde;
use Illuminate\Http\Request;
use App\Models\BTT_LOAI_SAN_PHAM;
use Illuminate\Support\Facades\DB;

class BTT_LOAI_SAN_PHAMController extends Controller
{
    //admin: CRUD

    //list
    public function bttList()
    {
        $bttLoaiSanPhams = BTT_LOAI_SAN_PHAM::all();

        return view('bttAdmins.bttLoaiSanPham.btt-list',['bttLoaiSanPham'=>$bttLoaiSanPhams]);
    }

    //create
    public function bttCreate()
    {
        return view('bttAdmins.bttLoaiSanPham.btt-create');
    }
    
    //create - submit
    public function bttCreateSubmit(request $request)
    {
        //ghi dữ liệu xuống db

        $bttLoaiSanPham = new BTT_LOAI_SAN_PHAM;
        $bttLoaiSanPham->bttMaLoai = $request->bttMaLoai;
        $bttLoaiSanPham->bttTenLoai = $request->bttTenLoai;
        $bttLoaiSanPham->bttTrangThai = $request->bttTrangThai;
        
        $bttLoaiSanPham->save();

        return redirect()->route('bttadmins.bttloaisanpham');
    }

    //edit
    public function bttEdit($id)
    {
        $bttLoaiSanPham = BTT_LOAI_SAN_PHAM::find($id);
        return view('bttAdmins.bttLoaiSanPham.btt-edit',['bttLoaiSanPham'=>$bttLoaiSanPham]);
    }

    //edit - submit
    public function bttEditSubmit(request $request)
    {
        $bttLoaiSanPham = BTT_LOAI_SAN_PHAM::find($request->id);
        $bttLoaiSanPham->bttMaLoai = $request->bttMaLoai;
        $bttLoaiSanPham->bttTenLoai = $request->bttTenLoai;
        $bttLoaiSanPham->bttTrangThai = $request->bttTrangThai;
        $bttLoaiSanPham->save();
        return redirect()->route('bttadmins.bttloaisanpham');
    }

    //get - delete
    public function bttDelete($id)
    {
        $bttLoaiSanPham = BTT_LOAI_SAN_PHAM::find($id);
        $bttLoaiSanPham->delete();
        return redirect()->route('bttadmins.bttloaisanpham');
    }

    //get - view
    public function bttView($id)
    {
        $bttLoaiSanPham = BTT_LOAI_SAN_PHAM::find($id);
        return view('bttAdmins.bttLoaiSanPham.btt-view',['bttLoaiSanPham'=>$bttLoaiSanPham]);
    }
}
