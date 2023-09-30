@extends('master')

@section('content')

@if($message = Session::get('failure'))

<div class="alert alert-danger">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">Edit Plane</div>
    <div class="card-body">
        <form method="post" action="{{ route('khachs.update', $khach->id_khach) }}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" value="{{ $khach->id_khach }}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Họ tên</label>
                <div class="col-sm-10">
                    <input type="text" name="ten" class="form-control" value="{{ $khach->ten_khach }}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Giới tính</label>
                <div class="col-sm-10">
                    <input type="text" name="gioitinh" class="form-control" value="{{ $khach->gioi_tinh }}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Năm sinh</label>
                <div class="col-sm-10">
                    <input type="text" name="namsinh" class="form-control" value="{{ $khach->namsinh }}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" name="diachi" class="form-control" value="{{ $khach->diachi }}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" name="sdt" class="form-control" value="{{ $khach->sdt }}"/>
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $khach->id_khach }}" />
                <input type="submit" class="btn btn-warning" value="Edit" />
                <a href="{{ route('khachs.index') }}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection('content')
