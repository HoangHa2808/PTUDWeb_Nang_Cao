@extends('layouts.master')
@push('plugin-styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href=""> --}}
@endpush
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/service">Dịch vụ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dịch vụ đặt xe</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Dịch vụ đặt xe</h6>
                    {{-- <div class="card-title">
                        <a href={{ '/service/order/create' }} className='btn btn-tm mr-5' type="submit">
                            <i class="fa-solid fa-pencil"></i> + Thêm dịch vụ
                        </a>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên dịch vụ</th>
                                    <th>Mô tả</th>
                                    <th>Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $serv)
                                    <tr>
                                        <th>{{ $serv->id }}</th>
                                        <td><a href={{ '/service/order/edit/{id}' }} className='text-bold'>
                                                {{ $serv->name }}
                                            </a>
                                        </td>
                                        <td class=""> <div style="width:850px; overflow:hidden;">{{ $serv->description }}</div></td>
                                        <td>
                                            <a href="/service/order/delete/{{ $serv->id }}">
                                                <form method="post" action="/service/order/delete/{{ $serv->id }}"
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
    </div>
@endsection
