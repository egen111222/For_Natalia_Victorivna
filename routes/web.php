<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return redirect()->route('news.greetings');});#{ return view('welcome');});
Route::get('/news',['as'=>'news.greetings','uses'=>'NewsController@Greetings']);
Route::get('/post',['as'=>'news.post','uses'=>'NewsController@Post']);
Route::any('/ask',['as'=>'news.ask','uses'=>'NewsController@Ask']);
Route::post('/userpost',['as'=>'news.userpost','uses'=>'NewsController@UserPost']);
Route::get('member',['as'=>'news.memory','uses'=>'NewsController@Memory']);
Route::get('/api/',['as'=>'news.api','uses'=>'NewsController@Addapi']);
Route::get('/remove/{type}',['as'=>'news.remove','uses'=>'NewsController@RemPost']);
Route::get('/json/{type}',['as'=>'news.json','uses'=>'NewsController@ShowJson']);
Route::get('/edit/{id}/{type}',['as'=>'news.edit','uses'=>'NewsController@ArticleEdit']);
Route::any('/editarticle/{type}/{id}',['as'=>'news.editarticle','uses'=>'NewsController@EditArticle']);

//Route::post('/addapis',['as'=>'news.addapis','uses'=>'NewsController@Apis']);