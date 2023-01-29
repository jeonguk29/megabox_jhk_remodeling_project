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
class SeatsControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	
	 public function index(Request $request)
    {
      $movies_id = request('movies_id');  //영화_id
      $theaters_id = request('theaters_id');  //영화관_id
      $playings_id = request('playings_id');  //상영시간_id
      
      if ( $movies_id == "" ) {
        $movies_id = "0";
      }
      
      if ( $theaters_id == "" ) {
        $theaters_id = "0";
      }
      
      if ( $playings_id == "" ) {
        $playings_id = "0";
      }
      
      //좌석의 행
      $data['seat_rows'] = DB::select("SELECT DISTINCT SUBSTR(name, 1, 1) AS seat_row_name  FROM rooms ORDER BY SUBSTR(name, 1, 1)  ");    
      
      //좌적의 열
      $data['seat_cols'] = DB::select("SELECT  DISTINCT  CAST( SUBSTR(name, 2, 2) as UNSIGNED)   as seat_col_name FROM rooms ORDER BY CAST( SUBSTR(name, 2, 2)  as UNSIGNED) ");

      
      //예약좌석(reserved_room 값이 있으면 예약된 좌석)
      $data['reserved_rooms_list'] = DB::select("SELECT 0 AS rooms_id, 'NONE' AS room_name from DUAL  
                                                UNION ALL  
                                                SELECT DISTINCT reserveds.rooms_id, rooms.name  AS room_name   
                                                FROM reserveds    
                                                INNER JOIN rooms   
                                                  ON reserveds.rooms_id = rooms.id  
                                                WHERE reserveds.movies_id = $movies_id
                                                  AND reserveds.theaters_id = $theaters_id  
                                                  AND reserveds.playings_id = $playings_id" );
	$data['movies_id'] = $movies_id;
	$data['theaters_id'] = $theaters_id;
	$data['playings_id'] = $playings_id;
    $data['adult']= request('adult');
	$data['teen']= request('teen');
	$data['child']= request('child');
	$data['disabled']= request('disabled');
	$data['total']=request('total');
      return view('seatsuser.index', $data);
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
