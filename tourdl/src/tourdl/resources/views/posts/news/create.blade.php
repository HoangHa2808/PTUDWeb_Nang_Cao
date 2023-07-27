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
                                    <h5 class="mb-0">Thêm bài viết tin tức</h5>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('posts.news.store') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="title">Tiêu đề</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                class="@error('title') is-invalid @enderror" placeholder="Khách sạn được yêu thích nhất" />
                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="category_id">Danh mục</label>
                                            <input type="number" class="form-control" id="category_id" name="category_id"
                                                class="@error('category_id') is-invalid @enderror" placeholder="Danh mục" />
                                            @error('category_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="slug">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug"
                                                class="@error('slug') is-invalid @enderror" placeholder="khach-san-duoc-yeu-thich-nhat" />
                                            @error('slug')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="view_count">Lượt xem</label>
                                            <input type="number" class="form-control" id="view_count" name="view_count"
                                                class="@error('view_count') is-invalid @enderror" placeholder="" />
                                            @error('view_count')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="short_description">Giới thiệu</label>
                                            <input type="text" id="short_description" class="form-control" name="short_description"
                                                placeholder="Giới thiệu" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="description">Mô tả</label>
                                            <input type="text" id="description" class="form-control" name="description"
                                                placeholder="Mô tả" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="checkbox" id="published"
                                                    value="true" />
                                                <label class="form-check-label" for="inlineCheckbox1">Công khai</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
