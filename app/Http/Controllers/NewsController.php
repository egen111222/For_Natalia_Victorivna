<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsModel;
use App\Models\MessagesModel;
//use Form;

class NewsController extends Controller{
    function Greetings(Request $request){
            //main страница наследуется от (layouts.main)
    	return view('main');
    }
    function Post(NewsModel $news){
            //вивод форми отправки статей
    	return view('news',$news);
    }
    function Ask(Request $request,MessagesModel $message){
            //получение данних с форми отправки сообщений валидация и вставка в бд после редирект на главную
        $data = (['name'=>$request->input('name'),'email'=>$request->input('email'),'subject'=>$request->input('subject'),'message'=>$request->input('message'),'created_at'=>date('Y-m-d,H-m-s'),'updated_at'=>date('Y-m-d,H-m-s')]);
        $this->validate($request,['name'=>'required','email'=>'required|email','subject'=>'required']);
    	$message->insert($data);
    	return redirect()->route('news.greetings');
    }
    function UserPost(Request $request){
            //получение данних с форми article и запись их в сессию(куки) после редирект на их показ
        $data = (['id'=>rand(0,123123123312),'post_title'=>$request->input('title'),'post_content'=>$request->input('text'),'created_at'=>date('Y-m-d,H-m-s'),'updated_at'=>date('Y-m-d,H-m-s')]);
    	$request->session()->push('posts',$data);
        return redirect()->route('news.memory');
    }
    function Memory(Request $request){
         //при наличии постов вернуть пердставление member с данними из куков иначе редирект на главную
      return ((count($request->session()->get('posts')) > 0)||(count($request->session()->get('api')))) ? view('member',['posts'=>$request->session()->get('posts'),'api'=>$request->session()->get('api')]) : redirect()->route('news.greetings');
    }
    function Addapi(Request $request){
    	$option = ["options" => ["default"=>0,"min_range"=>0]];
    if(isset($_GET['add_api'])){
        if(filter_var($request->input('api'), FILTER_VALIDATE_URL,$option)){
            $data = json_decode(file_get_contents($request->input('api')."/wp-json/wp/v2/posts"));
                foreach($data as $wpdata):
                    $wpdata = (['id'=>rand(0,123123123123),'post_title'=>$wpdata->title,'post_content'=>$wpdata->content,'post_status'=>$wpdata->status,'post_author'=>$wpdata->author,'post_category'=>$wpdata->categories]);
                    $request->session()->push('api',$wpdata);
                endforeach;
            return redirect()->route('news.memory');
         }      
    }
         return view('api');
    }
    function RemPost($type,Request $request){
        //проходит по списку апи постов и находит айди с тем которий получаем из аджакс после чего удаляем 
         for($start = 0;$start < count($request->session()->get($type));$start++){
            if($request->session()->get($type)[$start]["id"] == (integer)$_GET['rem_state']){
                $request->session()->pull($type,$start);
            }
         }
    }
    function ShowJson(Request $request,$type){
        //создание масива если тип ето пости если апи просто вивод при налачии
        $wp_user_posts = [];
        for($start=0;$start<count($request->session()->get('posts'));$start++){
            $wp_user_posts[$start] = (['post_title'=>$request->session()->get('posts')[$start]['post_title'], 'post_content'=>$request->session()->get('posts')[$start]['post_content'],'post_status'   => 'publish','post_author'   => 1,'post_category' => array(0)]);
        }
         if ($request->session()->get($type)!== null) {
             return ($type == 'api') ? $request->session()->get('api') : $wp_user_posts;
         }
         else{
            return redirect()->route('news.greetings');
         }  
    }
    function ArticleEdit($id,$type,Request $request){
      //вивод страници с редактируемими данними
            for($start = 0;$start<=count($request->session()->get($type));$start++){
                if($request->session()->get($type)[$start]['id']==$id){
                    return ($type == 'api') ? view('edit',['id'=>$request->session()->get($type)[$start]['id'],'edittitle'=>$request->session()->get($type)[$start]['post_title']->rendered,'edittext'=>$request->session()->get($type)[$start]['post_content']->rendered,'type'=>$type]) : view('edit',['id'=>$request->session()->get($type)[$start]['id'],'edittitle'=>$request->session()->get($type)[$start]['post_title'],'edittext'=>$request->session()->get($type)[$start]['post_content'],'type'=>$type]);
                }
            }
    }
    function EditArticle($type,$id,Request $request){
        //редактирует статьи в зависимости от типа если апи то обекти если пости то текст
        for($start = 0;$start<=count($request->session()->get($type));$start++){
            if($request->session()->get($type)[$start]['id']==$id){
                    $request->session()->pull($type,$start);
                    ($type == 'posts') ? $request->session()->push($type,['id'=>rand(0,123123123123321),'post_title'=>$request->input('title'),'post_content'=>$request->input('text'),'created_at'=>date('Y-m-dH-m-s'),'updated_at'=>date('Y-m-dH-m-s')]): $request->session()->push($type,['id'=> rand(0,123123123123321),'post_title' => (object)['rendered'=>$request->input('title')],'post_content'=>(object)['rendered'=>$request->input('text')],'created_at'=>date('Y-m-dH-m-s'),'updated_at'=>date('Y-m-dH-m-s'),'post_status'=>'published','post_author'=>1]);
                    return redirect()->route('news.memory');
            }
        }
    }





}

