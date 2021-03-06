<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')
            ->orderBy('id','desc')
            ->get();

        return view('book.index',[
            'books' =>  $books
        ]);
    }

    public function detail($id)
    {
        $book = DB::table('books')->where('id', '=', $id)->first();

        return view('book.detail', [
            'book'  =>  $book
        ]);
    }

    public function create()
    {
        return view('book.create');
    }

    public function save(Request $request)
    {
        // Save all Date
        $book = DB::table('books')->insert(array(
            'title' =>  $request->input('title'),
            'doi'   =>  $request->input('doi')
        ));

        return redirect()->action('BookController@index');
    }

    public function delete($id)
    {
        $book = DB::table('books')->where('id', $id)->delete();

        return redirect()->action('BookController@index')->with('status', 'book eliminado correctamente');
    }

    public function edit($id)
    {
        $book = DB::table('books')->where('id',$id)->first();

        return view('book.create', [
            'book' => $book
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $book = DB::table('books')->where('id', $id)->update(array(
            'title' => $request->input('title'),
            'doi' => $request->input('doi')
        ));

        return redirect()->action('BookController@index')->with('status', 'book actualizado correctamente');
    }
}
