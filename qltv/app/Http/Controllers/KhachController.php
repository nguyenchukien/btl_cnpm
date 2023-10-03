<?php

namespace App\Http\Controllers;

use App\Models\Khach;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class KhachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $khachs = Khach::orderByDesc('id_khach')->paginate(5);
        return view('bandoc.index', compact('khachs'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bandoc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $khach = new Khach();
        $khach->id_khach = $request->input('id');
        $khach->ten_khach = $request->input('ten');
        $khach->gioi_tinh = $request->input('gioitinh');
        $khach->namsinh = $request->input('namsinh');
        $khach->diachi = $request->input('diachi');
        $khach->sdt = $request->input('sdt');

        if ($khach->save()) {
            // Thêm dữ liệu thành công
            return redirect()->route('success_route');
        } else {
            $khach->save();
            // Xử lý khi thêm dữ liệu không thành công
            return redirect()->route('khachs.index')->with('success', 'Bạn đọc được thêm thành công.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $khach = Khach::findOrFail($id);

        return view('bandoc.edit', compact('khach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $khach = Khach::findOrFail($id);
        $khach->id_khach = $request->input('id');
        $khach->ten_khach = $request->input('ten');
        $khach->gioi_tinh = $request->input('gioitinh');
        $khach->namsinh = $request->input('namsinh');
        $khach->diachi = $request->input('diachi');
        $khach->sdt = $request->input('sdt');
        $khach->save();
        return redirect()->route('khachs.index')->with('success', 'Thông tin bạn đọc được sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $khach = Khach::findOrFail($id);

        $khach->delete();

        return redirect()->route('khachs.index')->with('success', 'Xóa thành công.');
    }
}
