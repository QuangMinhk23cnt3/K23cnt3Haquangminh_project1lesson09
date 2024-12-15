<?php

namespace App\Http\Controllers;

use App\Models\HqmSinhVien;
use Illuminate\Http\Request;

class HqmSinhVienController extends Controller
{
    // list / insert / update(edit) / delete
    public function hqmList()
    {
        //lay toan bo danh sach sinh vien
        $hqmSinhVien = HqmSinhvien::all();

        return view('HqmSinhVien.hqm-list',['hqmSinhVien'=>$hqmSinhVien]);
    }

    // create (Insert)
    public function hqmCreate()
    {
        return view('HqmSinhVien.hqm-create');
    }

    //createSubmit
    public function hqmCreateSubmit(Request $request)
    {
        $hqmSinhVien = new SinhVien();
        $hqmSinhVien->hqmMaSV = $request->hqmMaSV;
        $hqmSinhVien->hqmHoSV = $request->hqmHoSV;
        $hqmSinhVien->hqmTenSV = $request->hqmTenSV;
        $hqmSinhVien->hqmPhai = $request->hqmPhai;
        $hqmSinhVien->hqmNgaySinh = $request->hqmNgaySinh;
        $hqmSinhVien->hqmNoiSinh = $request->hqmNoiSinh;
        $hqmSinhVien->hqmMaKH = $request->hqmMaKH;

        $hqmSinhVien->save();
        return back()->with('hqmSinhVien_created','Da them moi mot sinh thanh cong!');
    }
}
