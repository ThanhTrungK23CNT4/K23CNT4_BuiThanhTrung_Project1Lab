@extends('_layouts.admins._master')
@section('title','Sửa thông tin loại sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('bttadmins.bttloaisanpham.btteditsubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$bttLoaiSanPham->id}}">
                    <div class="card">
                        <div class="card-header">
                            <h2>Sửa thông tin loại sản phẩm</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="bttMaLoai" class="col-sm-2 col-form-label">Mã loại:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" value="{{$bttLoaiSanPham->bttMaLoai}}" id="bttMaLoai" name="bttMaLoai"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bttTenLoai" class="col-sm-2 col-form-label">Tên loại:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" value="{{$bttLoaiSanPham->bttTenLoai}}" id="bttTenLoai" name="bttTenLoai"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bttTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="col-sm-10">
                                    @if($bttLoaiSanPham->bttTrangThai == 1)
                                        <input type="radio" id="bttTrangThai1" name="bttTrangThai" value="1" checked/>
                                        <label for="tvcTrangThai1">Hiển thị</label>
                                            &nbsp;
                                        <input type="radio" id="bttTrangThai0" name="bttTrangThai" value="0"/>
                                        <label for="tvcTrangThai0">Khóa</label>
                                    @else
                                        <input type="radio" id="bttTrangThai1" name="bttTrangThai" value="1"/>
                                        <label for="tvcTrangThai1">Hiển thị</label>
                                            &nbsp;
                                        <input type="radio" id="bttTrangThai0" name="bttTrangThai" value="0" checked/>
                                        <label for="tvcTrangThai0">Khóa</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Ghi lại</button>
                            <a href="{{route('bttadmins.bttloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection