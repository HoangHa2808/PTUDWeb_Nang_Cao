@extends('layouts.master')
@push('plugin-styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/role">Vai trò</a></li>
            {{-- <li class="breadcrumb-item active" aria-current="page">Data Table</li> --}}
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Vai trò</h6>
                    <div class="card-title">
                        <a href={{ '/role/create' }} className='btn btn-tm mr-5' type="submit">
                            <i class="fa-solid fa-pencil"></i> + Thêm bài viết
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <th>{{ $role->id }}</th>
                                        <td><a href={{ '/role/update/{id}' }} className='text-bold'>
                                            <form method="post" action="/role/edit/{{ $role->id }}"
                                                className='btn btn-tm mr-5' type="submit">
                                                @method('PUT')
                                                @csrf
                                                {{ $role->name }}
                                            </form>
                                            </a></td>
                                        <td>{{ $role->description }}</td>
                                        <td>
                                            <a href="/role/delete/{{ $role->id }}">
                                                <form method="post"
                                                    action="/role/delete/{{ $role->id }}"
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
