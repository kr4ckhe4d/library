<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');



Route::get('insertBooks', function(){



    return view('insertBooks');


});

Route::get('/addBook', function(){

    $name = Request::input('name');
    $author = Request::input('author');
    $cl_num = Request::input('cl_num');
    $edit = Request::input('edit');


    $publisher = Request::input('publisher');
    $published_place = Request::input('published_place');
    $published_year = Request::input('published_year');



    $pages = Request::input('pages');
    $height = Request::input('height');



    $series = Request::input('series');
    $series_num = Request::input('series_num');
    $isbn = Request::input('isbn');
    $remarks = Request::input('remarks');


    $date = date("Y-m-d");

    $id = DB::table('book_names')->insertGetId(



        array('name' => $name, 'author' => $author, 'cl_number' => $cl_num, 'edit_translate' => $edit, 'publisher' => $publisher, 'published_place' => $published_place, 'published_year' => $published_year, 'pages' => $pages, 'height' => $height, 'series' => $series, 'series_num' => $series_num, 'isbn' => $isbn, 'remarks' => $remarks, 'date_created'=> $date, 'date_updated' => $date)
    );




    return $id;


});




Route::get('/updateBook', function(){

    $name = Request::input('name');
    $author = Request::input('author');
    $cl_num = Request::input('cl_num');
    $edit = Request::input('edit');


    $publisher = Request::input('publisher');
    $published_place = Request::input('published_place');
    $published_year = Request::input('published_year');



    $pages = Request::input('pages');
    $height = Request::input('height');



    $series = Request::input('series');
    $series_num = Request::input('series_num');
    $isbn = Request::input('isbn');
    $remarks = Request::input('remarks');


    $date = date("Y-m-d");

    $bnid = Request::input('bnid');




    $book_name = DB::table('book_names')
        ->where('id', '=', $bnid)
        ->update(array('name' => $name, 'author' => $author, 'cl_number' => $cl_num, 'edit_translate' => $edit, 'publisher' => $publisher, 'published_place' => $published_place, 'published_year' => $published_year, 'pages' => $pages, 'height' => $height, 'series' => $series, 'series_num' => $series_num, 'isbn' => $isbn, 'remarks' => $remarks, 'date_updated' => $date));



    return 'success';


});




















Route::get('/addCopy', function(){

    $bnid = Request::input('bnid');
    $cid = Request::input('cid');
    $copydate = Request::input('copydate');
    $copyremarks = Request::input('copyremarks');
    $date = date("Y-m-d");

    $id = DB::table('books')->insertGetId(array('book_name_id' => $bnid, 'remarks' => $copyremarks, 'id' =>  $cid,   'date_added'=> $date, 'date_updated' => $date)
                                         );
    $book = DB::table('books')->where('book_name_id','=',$bnid)->orderBy('id')->get();



    return $book;


});



Route::get('/deleteCopy', function(){

    $bnid = Request::input('bnid');
    $cid = Request::input('cid');











    DB::table('books')->where('id','=',$cid)->delete();
    $book = DB::table('books')->where('book_name_id','=',$bnid)->orderBy('id')->get();



    return $book;


});


























Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);













//----------------2015-05-16 Nilesh -------------------//





Route::get('searchBooks', function(){



    return view('searchBooks');


});

Route::get('searchBooks1', function(){

    $search = Input::get('search');
    $select = Input::get('select');

    // $bookname = DB::table('book_names AS a')
    //    ->leftJoin('books AS b', function($join)
    //        {
    //$join->on( 'a.id', '=', 'b.book_name_id')
    //           ->where('b.status', '=', '0');
    //
    //        })
    //->select(DB::raw('count(b.id) as available, a.*'))
    //   ->where($select, 'LIKE', $search.'%')
    //    ->groupBy('a.id')
    //->orderBy($select)
    //    ->get();
    //	 

    $bookname=  DB::table('book_names')
        ->leftJoin('books', 'book_names.id','=','books.book_name_id')

        ->select(DB::raw('count(books.id) as available, book_names.*'))
        ->where('book_names.'.$select, 'LIKE', $search.'%')
        ->groupBy('book_names.id')
        ->orderBy('book_names.'.$select)
        ->get();



    return   $bookname;

});



Route::get('/single-book', function(){
    $id = Input::get('id');


    $book_name = DB::table('book_names')->where('id','=', $id)->first();
    $book = DB::table('books')->where('book_name_id','=', $id)->orderBy('id')->get();

    return view('single-book')
        ->with("book_name", $book_name)
        ->with("book", $book);


});



Route::get('/deleteSingleBook', function(){
    $id = Input::get('id');

    DB::table('book_names')->where('id','=',$id)->delete();
    DB::table('books')->where('book_name_id','=',$id)->delete();

    return "Success";

});


//----------------------- End ---------------------------//


//----------------2015-05-20 Nilesh -------------------//



Route::get('/single-copy', function(){



    return view('single-copy');


});



Route::get('/regBorrowers', function(){



    return view('regBorrowers');


});




//------------------End--------------------------------//