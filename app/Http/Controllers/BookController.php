<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
class BookController extends Controller

{ 
    //getAll
    public function index(){
        $books = Book::all();
        $title = 'Xin chào các bạn tới hiệu sách';
        return view('books.index',compact('books','title'));
    }
    //tạo mới
    public function create(){
        return view('books.create');
    }
    public function store(Request $request){
     $book = new Book();
     $book->bookName= $request->input('bookName');
     $book->price= $request->input('price');
     $book->bookDate= $request->input('bookDate');
     $book->save();
        return redirect()->action('App\Http\Controllers\BookController@index');
    }
    // tìm đối tượng cần cập nhật
    public function findById($bookId)
    {
        $book=Book::findOrFail($bookId);
        // dd($book);
        return view('books.edit',compact('book'));
    }
    // cập nhật
    public function update(Request $request,$bookId){
        $book=Book::findOrFail($bookId);
        $book-> bookName = $request->bookName;
        $book-> price = $request->price;
        $book-> bookDate = $request->bookDate;
        // $book-> bookStatus = $request->bookStatus;
        $book-> save();
        return redirect()->action('App\Http\Controllers\BookController@index');
    }
    public function delete($bookId){
        $book=Book::findOrFail($bookId);
        $book-> delete();
        return redirect()->action('App\Http\Controllers\BookController@index');
    }
    // search theo tên sách
    public function searchByName($bookName)
    {
        $books=DB::select("SELECT * FROM book WHERE bookName like '%$bookName%';");
        $title='Danh sách các quyển sách có chứa chữ '.$bookName.' bên trong là :';
        return view('books.index',compact('books','title'));
    }
}
