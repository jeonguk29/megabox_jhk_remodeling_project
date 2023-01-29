<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Playing_time;
use App\Models\Movie;

use DebugBar\DebugBar;

class TicketingControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
      $data['list'] = $this->getlist();
      $data['list1'] = $this->getlist_count();
      return view('ticketinguser.index', $data);
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
        $data['list'] = $this->getlist();
        $data['list1'] = $this->getlist_count();
        $data['row2'] = $this->getlist_movie($id);
        $data['list2'] = $this->getlist_playing_time($id);
        return view('ticketinguser.select-playing', $data);
    }



    public function edit($id)
    {
      $playtime_id = request('playtime_id');  
      //$movie_id = request('movie_id');  
		
      $data['list'] = $this->getlist();
      $data['list1'] = $this->getlist_count();
	   $data['list2'] = $this->getlist_playing_time($id);
      $data['row2'] = $this->getlist_movie($id);
      $data['list3'] = $this->getlist_final($id, $playtime_id);

      return view('ticketinguser.select-final', $data);

      // foreach($id as $id1){			
      //   $data['list'] = $this->getlist();
      //   $data['list1'] = $this->getlist_count();
      //   $data['row2'] = $this->getlist_movie($id2);
      //   $data['list2'] = $this->getlist_playing_time($id2);
      //   $data['list3'] = $this->getlist_final($id1, $id2);


      // return view('ticketinguser.select-final', $data);
	    // }
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



    public function getlist() 
    {
      $result = DB::table('movies')->get();
      return $result;
    }

    public function getlist_count() 
    {
      $result = DB::table('movies')
            ->selectRaw('count(*) as movie_count')
            ->first();
      return $result;
    }

    public function getlist_movie($id) 
    {
      $result = Movie::find($id);

      return $result;
    }
    public function getlist_playing_time($id) 
    {
      $result = Playing_time::leftjoin('movies', 'movies_id', '=', 'movies.id')
            ->select('playing_times.*', 'movies.name')
            ->where('movies_id', '=', $id)
            ->orderby('playing_time')
            ->get();
      return $result;
    }
    public function getlist_final($id1, $id2) 
    {
      $result = Playing_time::leftjoin('movies', 'movies_id', '=', 'movies.id')->
            select('movies.*', 'playing_times.id as playing_id', 'playing_times.playing_time')->
            where('movies_id', '=', $id1)->
			where('playing_times.id', '=', $id2)->
            first();
            
      return $result;
    }

}

