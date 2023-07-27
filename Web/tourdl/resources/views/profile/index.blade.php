@extends('layouts.master')

@section('content')
    <div class="profile-page tx-13">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="profile-header">
                    <div class="cover">
                        <div class="card-body"></div>
                        <figure>
                            <img src="{{ url('1.ico') }}" class="img-fluid" alt="profile cover">
                        </figure>
                        <div class="cover-body d-flex justify-content-between align-items-center">
                            <div>
                                <img class="profile-pic" src="{{ url('2.ico') }}" alt="profile">
                                <span class="profile-name">Admin</span>
                            </div>
                            <div class="d-none d-md-block">
                                <button class="btn btn-primary btn-icon-text btn-edit-profile">
                                    <i data-feather="edit" class="btn-icon-prepend"></i> Chỉnh sửa
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header-links">
                        <ul class="links d-flex align-items-center mt-3 mt-md-0">
                            <li class="header-link-item d-flex align-items-center active">
                                <i class="mr-1 icon-md" data-feather="columns"></i>
                                <a class="pt-1px d-none d-md-block" href="#">Dòng thời gian</a>
                            </li>
                            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                <i class="mr-1 icon-md" data-feather="user"></i>
                                <a class="pt-1px d-none d-md-block" href="#">Giới thiệu</a>
                            </li>
                            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                <i class="mr-1 icon-md" data-feather="users"></i>
                                <a class="pt-1px d-none d-md-block" href="#">Bạn bè<span
                                        class="text-muted tx-12">3,765</span></a>
                            </li>
                            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                <i class="mr-1 icon-md" data-feather="image"></i>
                                <a class="pt-1px d-none d-md-block" href="#">Hình ảnh</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="card-title mb-0">Giới thiệu</h6>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                            class="">Chỉnh sửa</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="git-branch" class="icon-sm mr-2"></i> <span
                                            class="">Cập nhật</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                                            class="icon-sm mr-2"></i> <span class="">Xem tất cả</span></a>
                                </div>
                            </div>
                        </div>
                        <p>Hi! I'm Admin.</p>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined:</label>
                            <p class="text-muted">2023</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Lives:</label>
                            <p class="text-muted">Viet Nam</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">admin123@gmail.com</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Website:</label>
                            <p class="text-muted">www.tourdulich.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-6 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="img-xs rounded-circle"
                                            src="{{ url('admin2.jpg') }}" alt="">
                                        <div class="ml-2">
                                            <p>Nhật Hạ</p>
                                            <p class="tx-11 text-muted">1 phút trước</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="meh" class="icon-sm mr-2"></i> <span
                                                    class="">Unfollow</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="corner-right-up" class="icon-sm mr-2"></i> <span
                                                    class="">Go to post</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="share-2" class="icon-sm mr-2"></i> <span
                                                    class="">Share</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="copy" class="icon-sm mr-2"></i> <span
                                                    class="">Copy link</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                    minima delectus nemo unde quae recusandae assumenda.</p>
                                <img class="img-fluid" src="{{ url('1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card-footer">
                                <div class="d-flex post-actions">
                                    <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                        <i class="icon-md" data-feather="heart"></i>
                                        <p class="d-none d-md-block ml-2">Like</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                        <i class="icon-md" data-feather="message-square"></i>
                                        <p class="d-none d-md-block ml-2">Comment</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                                        <i class="icon-md" data-feather="share"></i>
                                        <p class="d-none d-md-block ml-2">Share</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="img-xs rounded-circle"
                                            src="{{ url('3.jpg') }}" alt="">
                                        <div class="ml-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">5 phút trước</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="meh" class="icon-sm mr-2"></i> <span
                                                    class="">Unfollow</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="corner-right-up" class="icon-sm mr-2"></i> <span
                                                    class="">Go to post</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="share-2" class="icon-sm mr-2"></i> <span
                                                    class="">Share</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="copy" class="icon-sm mr-2"></i> <span
                                                    class="">Copy link</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img class="img-fluid" src="{{ url('staff4.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card-footer">
                                <div class="d-flex post-actions">
                                    <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                        <i class="icon-md" data-feather="heart"></i>
                                        <p class="d-none d-md-block ml-2">Like</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                        <i class="icon-md" data-feather="message-square"></i>
                                        <p class="d-none d-md-block ml-2">Comment</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                                        <i class="icon-md" data-feather="share"></i>
                                        <p class="d-none d-md-block ml-2">Share</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <div class="d-none d-xl-block col-xl-3 right-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-body">
                                <h6 class="card-title">latest photos</h6>
                                <div class="latest-photos">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <figure>
                                                <img class="img-fluid"
                                                    src="{{ url('https://via.placeholder.com/67x67') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-6">
                                            <figure>
                                                <img class="img-fluid"
                                                    src="{{ url('https://via.placeholder.com/67x67') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-6">
                                            <figure>
                                                <img class="img-fluid"
                                                    src="{{ url('https://via.placeholder.com/67x67') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-6">
                                            <figure>
                                                <img class="img-fluid"
                                                    src="{{ url('https://via.placeholder.com/67x67') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-body">
                                <h6 class="card-title">suggestions for you</h6>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle"
                                            src="{{ url('https://via.placeholder.com/37x37') }}" alt="">
                                        <div class="ml-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                            title="Connect"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle"
                                            src="{{ url('https://via.placeholder.com/37x37') }}" alt="">
                                        <div class="ml-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                            title="Connect"></i></button>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle"
                                            src="{{ url('https://via.placeholder.com/37x37') }}" alt="">
                                        <div class="ml-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                            title="Connect"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right wrapper end -->
        </div>
    </div>
@endsection
