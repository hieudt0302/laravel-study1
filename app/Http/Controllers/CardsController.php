<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
    	$cards = Card::all();
    	return view('cards/index', compact('cards'));
    }
    public function show(Card $card){
    	//$card = Card::with('notes.user')->find(1);
    	$card->load('notes.user');
    	//return $card;
    	return view('cards/show', compact('card'));

    }

}