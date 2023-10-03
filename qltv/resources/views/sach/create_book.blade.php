@extends('sach.master_book')

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
    <div class="card-header">Thêm Sách</div>
    <div class="card-body">
        <form method="post" action="{{ route('sachs.store') }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Id</label>
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" />
                </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên sách</label>
                <div class="col-sm-10">
                    <input type="text" name="ten_sach" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="ten_tacgia" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Thể loại</label>
                <div class="col-sm-10">
                    <input type="text" name="the_loai" class="form-control" />
                </div>
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-success" value="Add" />
                <a href="{{ route('sachs.index') }}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection('content')
