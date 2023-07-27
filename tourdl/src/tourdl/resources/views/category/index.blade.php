@extends('layouts.master')
@push('plugin-styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/category">Danh mục</a></li>
            {{-- <li class="breadcrumb-item active" aria-current="page">Data Table</li> --}}
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Danh mục</h6>
                    <div class="card-title">
                        <a href={{ '/category/create' }} className='btn btn-tm mr-5' type="submit">
                            <i class="fa-solid fa-pencil"></i> + Thêm bài viết
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên danh mục</th>
                                    <th>Slug</th>
                                    <th>Mô tả</th>
                                    <th>Trạng thái</th>
                                    <th>Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $cat)
                                    <tr>
                                        <th>{{ $cat->id }}</th>
                                        <td><a href={{ '/category/edit/{id}' }} className='text-bold'>
                                            <form method="post" action="/category/update/{{ $cat->id }}"
                                                className='btn btn-tm mr-5' type="submit">
                                                @method('PUT')
                                                @csrf
                                                {{ $cat->name }}
                                            </form>
                                            </a></td>
                                        <td>{{ $cat->slug }}</td>
                                        <td>{{ $cat->description }}</td>
                                        {{-- <td>{{$cat->show_on_menu== true ? 'Xuất bản' : 'Không xuất bản'}}</td> --}}
                                        <td><a href={{ '/category' }} className='text-bold' type="submit">
                                                <div className='icon ml-5'>
                                                    {{ $cat->show_on_menu ? 'Xuất bản' : 'Không xuất bản' }}
                                                    {{-- <i class="fa-solid fa-check">Xuất bản</i> : <i class="fa-solid fa-xmark">Không xuất bản</i> --}}

                                                </div>
                                            </a></td>
                                        <td>
                                            <a href="/category/delete/{{ $cat->id }}">
                                                <form method="post"
                                                    action="/category/delete/{{ $cat->id }}"
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
