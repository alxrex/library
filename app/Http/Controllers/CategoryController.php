<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CategoryBook;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all
        return Category::all();
    }

    public function search(Request $request)
    {
        //POST parameters for Search
        if($request->text=='' || $request->text===null)
        {
            return response()->json( Category::all() );
        }
        else
        {
            return response()->json(
                Category::where('name','LIKE','%'.$request->text.'%')->
                orWhere('description','LIKE','%'.$request->text.'%')->
                get()
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
            'name' => 'required|max:255'
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

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
        return Category::find($id);
        
        /*
        $data['category'] = Category::find($id);
        $data['books']   = Category::find($id)->books;//Books Related
        return response()->json($data);
        */
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
            'nombre' => 'required|max:255'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
    }
    
    
    public function addBook(Request $request)
    {
        $manybooks = new CategoryBook;
        $manybooks->book_id = $request->book_id;
        $manybooks->category_id = $request->category_id;
        $manybooks->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
