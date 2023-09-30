@extends('sach.master_book')

@section('content')

@if($message = Session::get('failure'))

<div class="alert alert-danger">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">Sửa Thông Tin Sách</div>
    <div class="card-body">
        <form method="post" action="{{ route('sachs.update', $sach->id_sach) }}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên sách</label>
                <div class="col-sm-10">
                    <input type="text" name="ten_sach" class="form-control" value="{{ $sach->ten_sach }}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="ten_tacgia" class="form-control" value="{{ $sach->ten_tacgia }}"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Thể loại</label>
                <div class="col-sm-10">
                    <input type="text" name="the_loai" class="form-control" value="{{ $sach->the_loai }}"/>
                </div>
            </div>

            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $sach->id_sach }}" />
                <input type="submit" class="btn btn-warning" value="Edit" />
                <a href="{{ route('sachs.index') }}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection('content')
