@extends('layouts.master')
@push('plugin-styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endpush
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-12">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Thêm quản trị</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('role.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Tên</label>
                            <input type="text" class="form-control" id="name" name="name"
                                class="@error('name') is-invalid @enderror" placeholder="" />
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Mô tả</label>
                            <input type="text" id="description" class="form-control" name="description"
                                placeholder="Mô tả" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{-- <button type="submit" class="btn btn-primary">Cancel</button> --}}
                    </form>
                </div>
            </div>
        </div>
@endsection