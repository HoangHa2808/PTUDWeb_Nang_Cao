@extends('layouts.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endpush

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bài viết tin tức</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Quản lý bài viết tin tức</h6>
                            <div class="card-title">
                                <a href={{ '/posts/news/create' }} className='btn btn-tm mr-5' type="submit">
                                    <i class="fa-solid fa-pencil"></i> + Thêm bài viết
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tiêu đề</th>
                                            <th>Slug</th>
                                            <th>Lượt xem</th>
                                            <th>Giới thiệu</th>
                                            <th>Mô tả</th>
                                            <th>Trạng thái</th>
                                            <th>Chỉnh sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news as $new)
                                            <tr>
                                                <td>{{ $new->id }}</td>
                                                <td class=""> <div style="width:300px; overflow:hidden;">
                                                    <a href="/posts/news/edit/{{ $new->id }}">
                                                        <form method="post" action="/posts/news/edit/{{ $new->id }}"
                                                            className='btn btn-tm mr-5' type="submit">
                                                            @method('PUT')
                                                            @csrf
                                                            {{ $new->title }}
                                                        </form>
                                                    </a>
                                                    </div>
                                                </td>
                                                <td>{{ $new->slug }}</td>
                                                <td>{{ $new->view_count }}</td>
                                                <td class=""> <div style="width:300px; overflow:hidden;">{{ $new->short_description }}</div></td>
                                                <td class=""> <div style="width:300px; overflow:hidden;">{{ $new->description }}</div></td>
                                                <td>
                                                    <a href={{ '/posts/news' }} className='text-bold' type="submit">
                                                    @if ($new->published == 0)
                                                    <i class="fa-solid fa-check">Công khai</i>
                                                    @else
                                                        <i class="fa-solid fa-xmark">Không công khai</i>
                                                    @endif
                                                    </a>
                                                    {{-- <a href={{ '/posts/news' }} className='text-bold' type="submit">
                                                        <div className='icon ml-5'>
                                                            {{ $new->published ? 'Công khai' : 'Không công khai' }}
                                                            {{-- <i class="fa-solid fa-check">Xuất bản</i> : <i class="fa-solid fa-xmark">Không xuất bản</i>

                                                        </div>
                                                    </a> --}}

                                                </td>
                                                <td>
                                                    <a href="/posts/news/delete/{{ $new->id }}">
                                                        <form method="post"
                                                            action="/posts/news/delete/{{ $new->id }}"
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
