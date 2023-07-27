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
                    <li class="breadcrumb-item active" aria-current="page">Bài viết du lịch</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Quản lý bài viết du lịch</h6>
                            <div class="card-title">
                                <a href={{ '/posts/tours/create' }} className='btn btn-tm mr-5' type="submit">
                                    <i class="fa-solid fa-pencil"></i> + Thêm bài viết
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tiêu đề</th>
                                            <th>Lịch trình</th>
                                            <th>Khởi hành</th>
                                            <th>Time Down</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Chỗ trống</th>
                                            <th>Giới thiệu</th>
                                            <th>Mô tả</th>
                                            <th>Trạng thái</th>
                                            <th>Chỉnh sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tours as $tour)
                                            <tr>
                                                <td>{{ $tour->id }}</td>
                                                <td class=""> <div style="width:300px; overflow:hidden;">
                                                    <a href="/posts/tours/edit/{{ $tour->id }}">
                                                        <form method="post" action="/posts/tours/edit/{{ $tour->id }}"
                                                            className='btn btn-tm mr-5' type="submit">
                                                            @method('PUT')
                                                            @csrf
                                                            {{ $tour->title }}
                                                        </form>
                                                    </a>
                                                </div></td>
                                                <td>{{ $tour->times }}</td>
                                                <td>{{ $tour->schedule }}</td>
                                                <td>{{ $tour->time_down }}</td>
                                                <td>{{ $tour->price }}</td>
                                                <td>{{ $tour->discount }}</td>
                                                <td>{{ $tour->place }}</td>
                                                <td class=""> <div style="width:300px; overflow:hidden;">{{ $tour->short_description }}</div></td>
                                                <td class=""> <div style="width:300px; overflow:hidden;">{{ $tour->description }}</div></td>
                                                <td><a href={{ '/posts/tours' }} className='text-bold' type="submit">
                                                        <div className='icon ml-5'>
                                                            {{ $tour->published ? 'Công khai' : 'Không công khai' }}
                                                            {{-- <i class="fa-solid fa-check">Xuất bản</i> : <i class="fa-solid fa-xmark">Không xuất bản</i> --}}

                                                        </div>
                                                    </a></td>
                                                <td>
                                                    <a href="/posts/tours/delete/{{ $tour->id }}">
                                                        <form method="post"
                                                            action="/posts/tours/delete/{{ $tour->id }}"
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
