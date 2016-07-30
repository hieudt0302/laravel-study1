<?php
class Mailer{
	
}
class RegisterUsers{
	public $mailer;

	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	} 
	public function setMailer(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}
}

App::bind('RegisterUsers',function(){
	return new RegisterUsers(new Mailer);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function(){
	
	Route::get('/', 'PagesController@home');

	Route::get('/about', 'PagesController@about');

	Route::get('/cards','CardsController@index');

	Route::get('/cards/{card}','CardsController@show');

	Route::post('/cards/{card}/notes', 'NotesController@store');

	Route::get('/note/{note}/edit','NotesController@edit');

	Route::patch('/note/{note}', 'NotesController@update');

	//stuffS
	Route::get('/faqs','FaqsController@index');
	Route::get('/faqs/add','FaqsController@add');
	Route::post('/faqs/store', 'FaqsController@store');
	Route::get('/faqs/{faq}/edit','FaqsController@edit');
	Route::patch('/faq/{faq}', 'FaqsController@update');
	Route::post('/faqs/delete', 'FaqsController@delete');
	Route::get('/faqs/{faq}/delete','FaqsController@delete');

	//Automatic resolution
	Route::get('/autoresolution', function(RegisterUsers $registerUsers){
		var_dump($registerUsers);
	});


});