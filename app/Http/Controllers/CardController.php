<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['show', 'addComment']);
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

        $cards = \App\Card::orderBy('created_at', 'desc')
        ->paginate(5);

        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = \App\Tag::pluck('value')
        ->toArray();

        $tags = implode(',', $tags);

        return view('cards.create',compact(['card','tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:255',
            'brief' => 'required|min:6',
            'body' => 'required|min:6'
        ]);

        $tagsData = [];
        $tags = explode (',', $request->input('tags'));

        foreach ($tags as $tag)
        {
            $tag = \App\Tag::readOrInsert ($tag);
            $tagsData[] = $tag->id;
        }

        // return $tagsData;

        $user = \Auth::user();

        $card = Card::create ([
            'title'  => $request->title,
            'brief'   => $request->brief,
            'body'   => $request->body,
            'user_id' => $user->id,
        ]);

        if (! empty($tagsData))
        {
            $card->tags()->sync($tagsData);
        }
        
        return redirect()->route('cards.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        $card->load('comments');

        return view('comments.create', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        $tags = $card->tags->pluck('value')
        ->toArray();
        $tags = implode(',', $tags);

        return view('cards.edit', compact(['card','tags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
     $this->validate($request, [
        'title' => 'required|min:2|max:255',
        'brief' => 'required|min:6',
        'body' => 'required|min:6'
    ]);

     $tagsData = [];
    if (! is_null ($request->input('tags')))
    {
        $tags = explode (',', $request->input('tags'));

        foreach ($tags as $tag)
        {
            $tag = \App\Tag::readOrInsert ($tag);

            $tagsData[] = $tag->id;
        }
    }

        // return $tagsData;

    // $card->update($request->all());

    $card->update ([
        'title' => $request->title,
        'brief' => $request->brief,
        'body'  => $request->body,
    ]);

    if (! empty($tagsData))
    {
       $card->tags()->sync($tagsData);
    }

    return redirect()->route('cards.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();
    }

    public function addComment(Request $request, Card $card)
    {
        $card->comments()->create([
            'cmBody' => $request->cmBody,
            'cmName' => $request->cmName,
            'cmEmail' => $request->cmEmail
        ]);

        return back()->withInput();
    }
}
