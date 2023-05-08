@extends('layouts.app')

@section('content')
<body>
    <h2>Create book</h2>
    <form action="/book/create" method="post">
        @csrf
        {{-- <label for="Id" @readonly(true)>
            bookId:
            <input type="text" value="1" id="Id">
        </label><br><br> --}}
        <label for="Name">
            Name:
            <input type="text" name="bookName" id="Name">
        </label><br><br>
        <label for="price1">
            Price:
            <input type="text" name="price" id="price1">
        </label><br><br>
        <label for="bookDate1">
            bookDate:
            <input type="date" name="bookDate" id="bookDate1">
        </label><br><br>
        <button type="submit">Create book</button>
    </form>
</body>
@endsection