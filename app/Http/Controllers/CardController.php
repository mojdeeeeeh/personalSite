<?php

namespace App\Http\Controllers;

use App\card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if (! \Auth::check())
//        {
//            return redirect('/home');
//        }

        $cards = \App\card::orderBy('created_at', 'desc')->paginate(3);

        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cards.index', compact('cards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::user();

        card::create ([
            'title'  => $request->title,
            'body'   => $request->body,
            'user_id' => $user->id,
        ]);


        return redirect()->route('cards.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(card $card)
    {
        $card->load('comments');

        return view('comments.create', compact(['comment','card']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(card $card)
    {
        return view('cards.edit', compact('card'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, card $card)
    {
        $card->update($request->all());

        return redirect()->route('cards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(card $card)
    {
        $card->delete();
    }
}
