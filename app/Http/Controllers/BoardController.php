<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        $boards = Board::orderBy('id', 'desc')->paginate(10);
        return view('boards.index', ['boards' => $boards ]);
    }
    
    public function create()
    {
        return view('boards.create');
    }

    public function store(Request $request)
    {
        $validation = $request-> validate([
            'title' => 'required',
            'contents' => 'required'
        ]);

        $board = new Board();
        $board -> title = $validation['title'];
        $board -> contents = $validation['contents'];
        $board -> save();

        return redirect() -> route('boards.index');
    }

    public function show($id)
    {
        $board = Board::where('id', $id) -> first();
        return view('boards.show', compact('board'));
    }    
    
    public function edit($id)
    {
        $board = Board::where('id', $id) -> first();
        return view('boards.edit', compact('board'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request -> validate([
            'title' => 'required',
            'contents' => 'required'
        ]);

        $board = Board::where('id', $id) -> first();
        $board -> title = $validation['title'];
        $board -> contents = $validation['contents'];
        $board -> save();

        return redirect() -> route('boards.show', $id);
    }

    public function destroy($id)
    {
        $board = Board::where('id', $id) -> first();
        $board -> delete();

        return redirect() -> route('boards.index');
    }




}