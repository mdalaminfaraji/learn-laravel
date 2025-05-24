<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class library extends Controller
{
    public function index()
    {
        $books = DB::table('library')
        ->orderBy('price', 'desc')
        ->paginate(5);
        return view('library', compact('books'));
    }
    public function create()
    {
        return view('addLibraryBook');
    }
    public function edit($id)
    {
        $book = DB::table('library')->find($id);
        if (!$book) {
            Session::flash('error', 'Book not found');
            return redirect()->route('library.index');
        }
        return view('updatelibraryBook', compact('book'));
    }

    public function store(Request $request){
        return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|string',
            'isbn' => 'required|string|max:13',
            'publisher' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'pages' => 'required|string',
            'language' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            'cover' => 'required|string',
            'stock' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            DB::table('library')->insert([
                'name' => $request->name,
                'author' => $request->author,
                'price' => $request->price,
                'isbn' => $request->isbn,
                'publisher' => $request->publisher,
                'year' => $request->year,
                'pages' => $request->pages,
                'language' => $request->language,
                'genre' => $request->genre,
                'cover' => $request->cover,
                'stock' => $request->stock,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            Session::flash('success', 'Book added successfully!');
            return redirect()->route('library.index');
        } catch (\Exception $e) {
            Session::flash('error', 'Failed to add book. Please try again.');
            return redirect()->back()->withInput();
        }
    }

    public function show($id)
    {
        $book = DB::table('library')->find($id);
        if (!$book) {
            Session::flash('error', 'Book not found');
            return redirect()->route('library.index');
        }
        return view('libraryDetails', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $libraryBookUpdate=DB::table('library')->where('id', $id)->update([
            'name'=>$request->name,
            'author'=>$request->author,
            'isbn'=>$request->isbn,
            'publisher'=>$request->publisher,
            'year'=>$request->year,
            'pages'=>$request->pages,
            'language'=>$request->language,
            'genre'=>$request->genre,
            'cover'=>$request->cover,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'updated_at'=>now()
        ]);
        if ($libraryBookUpdate) {
            Session::flash('success', 'Book updated successfully');
        } else {
            Session::flash('error', 'Book not found or no changes made');
        }

        return redirect()->route('library.index');
    }

    public function destroy($id)
    {
        try {
            $deleted = DB::table('library')->where('id', $id)->delete();
            
            if ($deleted) {
                Session::flash('success', 'Book deleted successfully');
            } else {
                Session::flash('error', 'Book not found');
            }
        } catch (\Exception $e) {
            Session::flash('error', 'Failed to delete book');
        }
        
        return redirect()->route('library.index');
    }
}
