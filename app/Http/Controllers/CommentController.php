<?php

namespace App\Http\Controllers;

use App\card;
use App\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cards = \App\card::orderBy('created_at', 'desc')->paginate(5);

        return view('comments.index', compact(['comments','cards']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create', compact('comments'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, card $card)
    {
//        comment::create ([
//            'cmBody'  => $request->cmBody,
//            'cmName'   => $request->cmName,
//            'cmEmail'   => $request->cmEmail,
//            'card_id' => 1,
//        ]);

            $this->validate($request, [
                'cmBody' => 'required|min:6',
                'cmName' => 'required',
                'cmEmail' => 'required'
            ]);

        $comment = new comment($request->all());
        $card->comments()->save($comment);
        return back();


//        return redirect()->route('comments.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
    }
}
