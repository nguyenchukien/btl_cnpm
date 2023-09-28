<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach;
class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $sachs = Sach::orderByDesc('id_sach')->paginate(5);

    //     return view('index', compact('sachs'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }
        
    public function index()
    {
        $sachs = Sach::orderByDesc('id_sach')->paginate(5);
        return view('index_book', compact('sachs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sach = new Sach();
        $sach->ten_sach = $request->input('ten_sach');
        $sach->ten_tacgia = $request->input('ten_tacgia');
        $sach->the_loai = $request->input('the_loai');
        $sach->save();

        return redirect()->route('sachs.index')->with('success', 'Sách được thêm thành công.');
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
        $sach = Sach::findOrFail($id);

        return view('edit_book', compact('sach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sach = Sach::findOrFail($id);
        $sach->ten_sach = $request->input('ten_sach');
        $sach->ten_tacgia = $request->input('ten_tacgia');
        $sach->the_loai = $request->input('the_loai');
        $sach->save();

        return redirect()->route('sachs.index')->with('success', 'Thông tin sách được sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sach = Sach::findOrFail($id);

        $sach->delete();

        return redirect()->route('sachs.index')->with('success', 'Xóa thành công.');
    }
}
