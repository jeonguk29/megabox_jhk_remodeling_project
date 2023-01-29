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
use App\Models\Food;
use App\Models\Drink;
use App\Models\Jangbui;

use Image;
class PaymentControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	
	 public function index(Request $request)
    {
      $checked_seats_name = request('check_seats_name');  //선택환 좌석 이름들
	  $movies_id = request('movies_id');
		$theaters_id = request('theaters_id');
		$playings_id = request('playings_id');
      $data['food_list'] = DB::select("SELECT id, name, price, pic
                                      FROM food
                                      ORDER BY id");

      $data['seats_info'] = DB::select("SELECT id, name 
                                        FROM rooms
                                        WHERE name in ( $checked_seats_name ) ");
		//$data['checked_seats_name'] = $checked_seats_name;
		$data['movies'] = $this->getlist_movie($movies_id);
		$data['theaters_id'] = $theaters_id;
		$data['playing_time'] = $this->getlist_playing_time($playings_id);
		$data['adult'] = request('adult');
		$data['teen'] = request('teen');
		$data['child'] = request('child');
		$data['disabled'] = request('disabled');
		$data['total'] = request('total');
      return view('paymentuser.index', $data);
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
		$row=new Reserved;
		$row1=new Jangbui;
		
		$row->members_uid=session()->get('uid');
		$row->movies_id=$request->input("movies_id");
		$row->theaters_id=1;
		$row->rooms_id=$request->input("theaters_id");
		$row->playings_id=2;
		$row->dday=$request->input("playing_times_id");
		if($request->input("adult")){
			$row->adult=$request->input("adult");
		}
		else{
			$row->adult=0;
		}
		if($request->input("teen")){
			$row->teen=$request->input("teen");
		}
		else{
			$row->teen=0;
		}
		if($request->input("child")){
			$row->child=$request->input("child");
		}
		else{
			$row->child=0;
		}
		if($request->input("disabled")){
			$row->disabledperson=$request->input("disabled");
		}
		else{
			$row->disabledperson=0;
		}
		$row->total=$request->input("total");
		$row->seat=$request->input("seats");
		$row->save();
		
		//$food_id=6;
		//$drink_id=1;
		$reserveds = DB::table('reserveds')->
						select('id', 'total')->
						orderby('id', 'desc')->
						first();
		//$food=Food::find(6);
		//$drink=Drink::find(1);
		$row1->purchase_date=date("Y-m-d");
		$row1->reserveds_id=$reserveds->id;
		//$row1->food_id=$food->id;
		//$row1->drinks_id=$drink->id;
		$row1->total_price=$reserveds->total;
		$row1->save();
		
		return view('main.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   	
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
	public function getlist_movie($id) 
    {
      $result = Movie::find($id);

      return $result;
    }
	public function getlist_playing_time($id) 
    {
      $result = Playing_time::find($id);
      return $result;
    }
}
