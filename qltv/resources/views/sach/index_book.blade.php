@extends('layouts.master')

@section('title', 'Quản lý sách')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Thông tin Sách</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('sachs.create') }}" class="btn btn-success btn-sm float-end">Thêm</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>

                        <th class="text-center">Tên sách</th>
                        <th class="text-center">Tên tác giả</th>
                        <th class="text-center">Thể loại</th>
                        <th class="text-center">Sửa</th>
                        <th class="text-center">Xóa</th>
                    </tr>
                </thead>
                @if (count($sachs) > 0)
                    @foreach ($sachs as $sach)
                        <tbody>
                            <tr>
                                <td class="text-center">{{ $sach->ten_sach }}</td>
                                <td class="text-center">{{ $sach->ten_tacgia }}</td>
                                <td class="text-center">{{ $sach->the_loai }}</td>
                                <td>
                                    <a href="{{ route('sachs.edit', $sach->id_sach) }}"
                                        class="btn btn-warning btn-sm d-flex justify-content-center">Sửa</a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('sachs.destroy', $sach->id_sach) }}"
                                        class="d-flex justify-content-center">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#confirmDelete-{{ $sach->id_sach }}">
                                            Xóa
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="confirmDelete-{{ $sach->id_sach }}" tabindex="-1"
                                            aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered text-center">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmDeleteLabel">Xóa Sách</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn muốn xóa quyển sách này?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <input type="submit" class="btn btn-danger" value="Delete" />
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
            {!! $sachs->render('pagination::bootstrap-5') !!}
        </div>
    </div>

@endsection
