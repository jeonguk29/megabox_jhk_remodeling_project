<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    // DB 클래스 사용
use App\Models\Reserved;	      // Eloquent ORM
use App\Models\Movie;  
use App\Models\Member;  
use App\Models\Room;  
 

class FindreservedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$text1 = $request -> input('text1');
		$data['text1'] = $text1;
       
	$data['list'] = $this->getlist($text1);		// 자료 읽기
    return view( 'findreserved.index', $data );	// 자료 표시(view/product폴더의 index.blade.php)
	
    }
	
	public function getlist($text1)
	{
/*
		   $result = Member2::leftjoin('gubunmies', 'member2s.division42', '=', 'gubunmies.id')->
	select('member2s.*', 'gubunmies.name42 as gubun_name42')->
	    where('member2s.name42', 'like', '%' . $text1 . '%')->
	    orderby('member2s.name42', 'asc')->
	    paginate(5)->appends(['text1'=>$text1]);
		
		
		   $result = Product::leftjoin('gubuns', 'products.gubuns_id42', '=', 'gubuns.id')->
	select('products.*', 'gubuns.name42 as gubun_name42')->
	    where('products.name42', 'like', '%' . $text1 . '%')->
	    orderby('products.name42', 'asc')->
	    paginate(5)->appends(['text1'=>$text1]);
		
		     
		 $result = Reserved::leftjoin('members', 'reserveds.members_id', '=', 'members.id')->
	select('members.*', 'members.uid as members_uid')->
	    where('members.uid', 'like', '%' . $text1 . '%')->
	    orderby('members.uid', 'asc')->
	    paginate(5)->appends(['text1'=>$text1]);
		*/


		$result = Reserved::leftjoin('movies', 'reserveds.movies_id', '=', 'movies.id')->
		leftjoin('theaters', 'reserveds.theaters_id', '=', 'theaters.id')->
		leftjoin('rooms', 'reserveds.rooms_id', '=', 'rooms.id')->
		leftjoin('playings', 'reserveds.playings_id', '=', 'playings.id')->
		leftjoin('playing_times', 'reserveds.dday', '=', 'playing_times.id')->
		select('reserveds.*', 'movies.name as movie_name', 'theaters.location', 'rooms.name as room_name', 'playings.playing_date', 'playing_times.playing_time')->
		where('members_uid', 'like', '%' .$text1. '%')->orderby('members_uid','asc')->
		paginate(5)->appends(['text1' => $text1]);             
   
		
		return $result;
	}


  


}