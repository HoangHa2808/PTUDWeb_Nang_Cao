@extends('layouts.master')
@push('plugin-styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/feedback">Phản hồi</a></li>
            {{-- <li class="breadcrumb-item active" aria-current="page">Data Table</li> --}}
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Phản hồi</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Mã bài viết</th>
                                    <th>Mã người dùng</th>
                                    <th>Tên người dùng</th>
                                    <th>Phản hồi</th>
                                    <th>Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <th>{{ $feedback->id }}</th>
                                        <td>{{ $feedback->id }}</td>
                                        <td>{{ $feedback->user_id }}</td>
                                        <td>{{ $feedback->user_name }}</td>
                                        <td>{{ $feedback->feedback }}</td>
                                        <td>
                                            <a href="/feedback/delete/{{ $feedback->id }}">
                                                <form method="post"
                                                    action="feedback/delete/{{ $feedback->id }}"
                                                    className='btn btn-tm mr-5'
                                                    onClick="return confirm('Bạn có muốn xoá không?')">
                                                    @method('DELETE')
                                                    @csrf<i class="fa-solid fa-trash"></i>Xoá
                                                </form>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
