<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Session;

class VideoController extends Controller
{
    //
    public function save_video(Request $request){
        $video = new Video();
        $video->title = $request->title;
        $video->video = $request->videoLink;
        $video->save();

        return response()->json(['video_link' => $request->videoLink ,'title' => $request->title]);
    }

    public function show_video(){
        // session()->push('record_video.key',['video_link'=>$request->videoLink, 'title' => $request->title]);

        // session()->flush();
        // dd(session()->get('video'));exit;
         // if(session()->get('record_video')){
         //    dd(session()->get('record_video'));
         // }
         // dd("not in if");
        // @foreach(session()->get('video') as $video)
        //  <iframe src="{{$video['video_link']}}"></iframe>
        //  <small > {{$video['title']}} </small>
        //  @endforeach
        // dd(session()->get('video'));
       // session()->push('cart.key',['char'=>'1','hel'=>'Hello']);
       //  session()->push('cart.key', '2');
       //  $i=0;
       // foreach(session['cart'] as $cat){
       //  dd($cat);exit;
       // }
    }
   
}
