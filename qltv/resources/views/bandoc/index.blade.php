@extends('layouts.master')

@section('title', 'Quản lý bạn đọc')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Thông tin bạn đọc</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('bandocs.create') }}" class="btn btn-success btn-sm float-end">Thêm</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>

                    <th class="text-center">Họ tên</th>
                    <th class="text-center">Giới tính</th>
                    <th class="text-center">Năm sinh</th>
                    <th class="text-center">Địa chỉ</th>
                    <th class="text-center">Số điện thoại</th>
                    <th class="text-center">Sửa</th>
                    <th class="text-center">Xóa</th>
                </tr>
                </thead>
                @if (count($bandocs) > 0)
                    @foreach ($bandocs as $bandoc)
                        <tbody>
                        <tr>

                            <td>{{ $bandoc->tenban_doc }}</td>
                            <td>{{ $bandoc->gioi_tinh }}</td>
                            <td>{{ $bandoc->nam_sinh}}</td>
                            <td>{{ $bandoc->dia_chi }}</td>
                            <td>{{ $bandoc->sdt }}</td>
                            <td>
                                <a href="{{ route('bandocs.edit', $bandoc->id) }}"
                                   class="btn btn-warning btn-sm d-flex justify-content-center">Sửa</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('bandocs.destroy', $bandoc->id) }}"
                                      class="d-flex justify-content-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#confirmDelete-{{ $bandoc->id }}">
                                        Xóa
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="confirmDelete-{{ $bandoc->id }}" tabindex="-1"
                                         aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered text-center">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmDeleteLabel">Delete Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Bạn có muốn xóa bạn đọc?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel
                                                    </button>
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">No Data Found</td>
                    </tr>
                @endif
            </table>
            {!! $bandocs->render('pagination::bootstrap-5') !!}
        </div>
    </div>

@endsection
