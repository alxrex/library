<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all
        return Book::all();
    }

    public function search()
    {
        //POST parameters for Search
        if($request->text=='' || $request->text===null)
        {
            return response()->json( Book::all() );
        }
        else
        {
            return response()->json(
                Book::where('name','LIKE','%'.$request->text.'%')->get()
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Validations
        $this->validate($request, [
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'category_id' =>'required',
            'author' => 'max:255'
        ]);

        $book = new Book;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->category_id = $request->category_id;
        $book->published_date = $request->published_date;
        $book->user = $request->user;
        $book->available = (strlen($request->user)>0) ? 0 : 1;
        $book->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Book::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Form Validations
        $this->validate($request, [
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'category_id' =>'required',
            'author' => 'max:255'
        ]);

        $book = Book::find($id);
        $book->name = $request->name;
        $book->author = $request->author;
        $book->category_id = $request->category_id;
        $book->published_date = $request->published_date;
        $book->user = $request->user;
        $book->available = (strlen($request->user)>0) ? 0 : 1;
        $book->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
    }
}
