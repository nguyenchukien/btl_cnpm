@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>

@endif

@if($message = Session::get('failure'))

<div class="alert alert-danger">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">Add Product</div>
    <div class="card-body">
        <form method="post" action="{{ route('khachs.store') }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Họ tên</label>
                <div class="col-sm-10">
                    <input type="text" name="ten" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Giới tính</label>
                <div class="col-sm-10">
                    <input type="text" name="gioitinh" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Năm sinh</label>
                <div class="col-sm-10">
                    <input type="number" name="namsinh" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" name="diachi" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" name="sdt" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-success" value="Add" />
                <a href="{{ route('khachs.index') }}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection('content')