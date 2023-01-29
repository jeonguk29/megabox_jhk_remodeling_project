<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Member;
use App\Models\Theater;
use App\Models\Movie;
use App\Models\Playing;
use App\Models\Playing_time;
use App\Models\Room;
use App\Models\Reserved;


use Image;
class MypageControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	
	 public function index(Request $request)
    {
		$text1 = request('text1');
		$data['text1'] = $text1;
		$data['list'] = $this->getlist($text1);	
      return view('mypageuser.index', $data);
    }
	
	public function getlist($text1)
	{
		/*
	   $result = Jangbu::leftjoin('products', 'jangbus.products_id42', '=', 'products.id')->
	select('jangbus.*', 'products.name42 as product_name42')->
	          where('jangbus.io42', '=', 1)->
                        where('jangbus.writeday42', '=', $text1)->
                        orderby('jangbus.id','desc')->
                        paginate(5)->appends( ['text1',$text1] );
						*/
		
	
		

		$result = Reserved::leftjoin('movies', 'reserveds.movies_id', '=', 'movies.id')->
		leftjoin('theaters', 'reserveds.theaters_id', '=', 'theaters.id')->
		leftjoin('rooms', 'reserveds.rooms_id', '=', 'rooms.id')->
		leftjoin('playings', 'reserveds.playings_id', '=', 'playings.id')->
		leftjoin('playing_times', 'reserveds.dday', '=', 'playing_times.id')->
		select('reserveds.*', 'movies.name as movie_name', 'theaters.location', 'rooms.name as room_name', 'playings.playing_date', 'playing_times.playing_time')->
		where('members_uid', '=', session()->get('uid'))->orderby('members_uid','asc')->
		paginate(5)->appends(['text1' => $text1]);             
   
		
		return $result;
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   	
		  return view('movieuser.show', $data); // 요기로 넣어줘라 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
 
}
