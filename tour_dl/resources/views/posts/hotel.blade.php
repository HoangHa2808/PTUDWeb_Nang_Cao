@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
    <li class="breadcrumb-item active" aria-current="page">Khách sạn</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Khách sạn</h6>
        <div class="table-responsive">
{{-- <a href="{{ route('hotel.view') }}"><button class="btn btn-success mb-3">Add new post hotel</button></a> --}}

          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Tiêu đề</th>
                <th>Phân loại</th>
                <th>Danh mục</th>
                <th>Hạng sao</th>
                <th>Giảm giá</th>
                <th>Mô tả ngắn</th>
                <th>Nội dung</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th>Chỉnh sửa</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dataList as $item)
              <tr>
                <td>{{++$index}}</td>
                <td>{{$index->title}}</td>
                <td>{{$index->postType}}</td>
                <td>{{$index->category}}</td>
                <td>{{$index->ratting}}</td>
                <td>{{$index->discount}}</td>
                <td>{{$index->shortdiscription}}</td>
                <td>{{$index->discription}}</td>
                <td><img src="{{ $item->thumbnail }}" style="width: 180px;"></td>
                <td>{{$index->thumbnail}}</td>
                <td>{{getTimeFormat($item->create_at)}}</td>
                <td>{{getTimeFormat($item->updated_at)}}</td>
                <td>
                    {{-- <a href="{{ route('posts.hotel') }}?id={{ $item->id }}"><button class="btn btn-warning">Edit</button></a> --}}
                    <button class="btn btn-danger" onclick="deleteItem({{ $item->id }})">Delete</button>
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
{!! $dataList->links() !!}
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
@section('js')
<script type="text/javascript">
    function deleteItem(id) {
        var option = confirm('Are you sure to delete this item')
        if(!option) return

        // $.post('{{ route('user.delete') }}', {
        //     '_token': '{{ csrf_token() }}',
        //     'id': id
        // }, function(data) {
        //     location.reload()
        // })
    }
</script>
@stop
