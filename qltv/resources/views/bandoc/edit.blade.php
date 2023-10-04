@extends('layouts.master')

@section('title', 'Quản lý bạn đọc')

@section('content')

    @if($message = Session::get('failure'))

        <div class="alert alert-danger">
            {{ $message }}
        </div>

    @endif

    <div class="card">
        <div class="card-header">Sửa thông tin bạn đọc</div>
        <div class="card-body">
            <form method="post" action="{{ route('bandocs.update', $bandoc->id) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">ID</label>
                    <div class="col-sm-10">
                        <input disabled type="text" name="id" class="form-control" value="{{ $bandoc->id }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Họ tên</label>
                    <div class="col-sm-10">
                        <input type="text" name="ten" class="form-control" value="{{ $bandoc->tenban_doc }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Giới tính</label>
                    <div class="col-sm-10">
                        <input type="text" name="gioitinh" class="form-control" value="{{ $bandoc->gioi_tinh }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Năm sinh</label>
                    <div class="col-sm-10">
                        <input type="text" name="namsinh" class="form-control" value="{{ $bandoc->nam_sinh }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Địa chỉ</label>
                    <div class="col-sm-10">
                        <input type="text" name="diachi" class="form-control" value="{{ $bandoc->dia_chi }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Số điện thoại</label>
                    <div class="col-sm-10">
                        <input type="text" name="sdt" class="form-control" value="{{ $bandoc->sdt }}"/>
                    </div>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $bandoc->id }}"/>
                    <input type="submit" class="btn btn-warning" value="Edit"/>
                    <a href="{{ route('bandocs.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>

@endsection('content')
