<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all books details
        $books=Book::all();
        return view('backend.book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/book/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookCreateRequest $request)
    {
        if($request->hasFile('image_file')){
            $file=$request->file('image_file');
            $iname=$file->getClientOriginalName();
            $file->move('image/book/',$iname);
            $request->request->add(['image'=>$iname]);
        }


       // dd($request->all());
        $book =  Book::create($request->all());
       // dd($book);
        return redirect()->route('backend.book.index');


        // validate the data or form
//        $request->validate([
//            'name'=>'required',
//            'pagecount'=>'required|number',
//            'point'=>'required|number',
//
//        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book =Book::find($id);
        return view('backend.book.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book= Book::find($id);
        return view('backend.book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book=Book::find($id);
        $book->update($request->all());
        return redirect()->route('backend.book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book= Book::find($id);
        $book->delete();
        return redirect()->route('backend.book.index');
    }
}
