<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    public function index(){

        $cards = Card::all();
        return view('pages.cards.index', compact('cards'));
    }
    public function show(Card $card){

        $card->load('notes.user');
        return view('pages.cards.show', compact('card'));
    }
}
