@extends('bandoc.master')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Product Data</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('khachs.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Họ tên</th>
                    <th class="text-center">Giới tính</th>
                    <th class="text-center">Năm sinh</th>
                    <th class="text-center">Địa chỉ</th>
                    <th class="text-center">Số điện thoại</th>
                </tr>
                </thead>
                @if (count($khachs) > 0)
                    @foreach ($khachs as $khach)
                        <tbody>
                        <tr>
                            <td>{{ $khach->id_khach }}</td>
                            <td>{{ $khach->ten_khach }}</td>
                            <td>{{ $khach->gioi_tinh }}</td>
                            <td>{{ $khach->namsinh}}</td>
                            <td>{{ $khach->diachi }}</td>
                            <td>{{ $khach->sdt }}</td>
                            <td>
                                <a href="{{ route('khachs.edit', $khach->id_khach) }}"
                                   class="btn btn-warning btn-sm d-flex justify-content-center">Sửa</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('khachs.destroy', $khach->id_khach) }}"
                                      class="d-flex justify-content-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#confirmDelete-{{ $khach->id_khach }}">
                                        Xóa
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="confirmDelete-{{ $khach->id_khach }}" tabindex="-1"
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
                                                            data-bs-dismiss="modal">Không
                                                    </button>
                                                    <input type="submit" class="btn btn-danger" value="Có   "/>
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
            {!! $khachs->render('pagination::bootstrap-5') !!}
        </div>
    </div>

@endsection
