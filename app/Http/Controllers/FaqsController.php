<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Faq;

use Illuminate\Support\Facades\Redirect;

class FaqsController extends Controller
{
    public function index()
    {
    	$faqs = Faq::all();
    	return view('faqs/index', compact('faqs'));
    }

    public function add()
    {
    	return view('faqs/add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
    	$faq = new Faq;
    	$faq->title = $request->title;
    	$faq->description = $request->description;
    	$faq->status = 1;
    	$faq->save();

    	return Redirect::to('/faqs');
    }

    public function edit(Faq $faq){
    	return view('faqs/edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
    	$faq->title = $request->title;
    	$faq->description = $request->description;
    	$faq->update();

		return Redirect::to('/faqs');
    }
    
    public function delete(Faq $faq){
    	$faq->delete();
    	
    	return Redirect::to('/faqs');
    }

}
