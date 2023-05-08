@extends('layouts.app')

@section('content')
<br><br>
    <label for="gsearch">Search Google:
    </label>
    <input type="search" id="gsearch" name="bookName">
    <button id="demo" onclick="search()">Tìm kiếm</button>
  </div><br><br>
<a href="book/create">Thêm sản phẩm</a> 
@if (!empty($echos))
{{ $echos }}
@elses
<p></p>
@endif


@if (!empty($title))
{{ $title }}
@else
<p></p>
@endif
<table  class="table table-striped" style="border: 2px;">
    <thead>
    <tr>
        <th>Mã ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá </th>
        <th>Ngày nhập</th>
        <th>Trạng thái</th>
        <th colspan="2">Hoạt động</th>
    </tr>
</thead>

<tbody>
    @if(!empty($products))
    @foreach ($products as $key => $item) 
    <tr>
        <td>{{ $item->productId }}</td>
        <td>{{ $item->producName }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->producDate }}</td>
        <td>{{ $item->producStatus ?'Hoạt động':"Khóa"}}</td>
        <td><a href="book/delete/{{ $item->producId }}">Xóa</a></td>      
        <td><a href="book/update/{{ $item->producId }}">Chỉnh sửa</a></td>      
    </tr>
    @endforeach
    @else
    <tr>
        <td colspan="7">
        <h1 style="color:rgb(53, 17, 212);text-align: center">Không có dữ liệu gì  </h1>
        </td>
    </tr>
    @endif
</tbody>
<script>
    function search(){
        var searchKey=document.getElementById("gsearch").value;
        if(searchKey)
            window.location.href = "http://127.0.0.1:8000/book/search/"+searchKey;
        else
            window.location.href = "http://127.0.0.1:8000/book";
    }
    
    
</script>
  </table>
@endsection