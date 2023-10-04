<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bandoc;


class BandocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bandocs = Bandoc::orderByDesc('id')->paginate(5);
        return view('bandoc.index', compact('bandocs'))->with('i', (request()->input('page', 1) - 1) * 5);

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
        $bandoc = new Bandoc();
        $bandoc->id = $request->input('id');
        $bandoc->tenban_doc = $request->input('ten');
        $bandoc->gioi_tinh = $request->input('gioitinh');
        $bandoc->nam_sinh = $request->input('namsinh');
        $bandoc->dia_chi = $request->input('diachi');
        $bandoc->sdt = $request->input('sdt');
        $bandoc->id_thuthu = 1;
        $bandoc->save();
            // Xử lý khi thêm dữ liệu không thành công
            return redirect()->route('bandocs.index')->with('success', 'Bạn đọc được thêm thành công.');
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
        $bandoc = Bandoc::findOrFail($id);

        return view('bandoc.edit', compact('bandoc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bandoc = Bandoc::findOrFail($id);
        $bandoc->tenban_doc = $request->input('ten');
        $bandoc->gioi_tinh = $request->input('gioitinh');
        $bandoc->nam_sinh = $request->input('namsinh');
        $bandoc->dia_chi = $request->input('diachi');
        $bandoc->sdt = $request->input('sdt');
        $bandoc->save();
        return redirect()->route('bandocs.index')->with('success', 'Thông tin bạn đọc được sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bandoc = Bandoc::findOrFail($id);

        $bandoc->delete();

        return redirect()->route('bandocs.index')->with('success', 'Xóa thành công.');
    }
}
