@extends('layouts.app')

@section('content')
<body>
    <h2>Update book</h2>
    <form action="/book/update/{{$book->bookId}}" method="post">
        @csrf
        <label for="Id" @readonly(true)>
            bookId:
            <input type="text" value="{{ $book->bookId }}" id="Id">
        </label><br><br>
        <label for="Name">
            Name:
            <input type="text" name="bookName" value="{{ $book->bookName }}" id="Name">
        </label><br><br>
        <label for="price1">
            Price:
            <input type="text" name="price" value="{{ $book->price }}" id="price1">
        </label><br><br>
        <label for="bookDate1">
            bookDate:
            <input type="date" name="bookDate" id="bookDate1" value="{{ $book->bookDate }}">
        </label><br><br>
        <label for="st">Trạng thái sách</label>
        <select name="bookStatus" id="st" >
        <option value="true">{{ $book->bookStatus?"Còn":"Hết hàng"}}</option>
        <option value="false">{{ $book->bookStatus?"Hết hàng":"Còn"}}</option>
        </select> <br><br>
        <button type="submit" name="submit" >Update book</button>
    </form>
</body>
@endsection