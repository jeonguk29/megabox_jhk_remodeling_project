<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Jangbui;
use App\Models\Reserved;
use App\Models\Movie;
use App\Models\Food;
use App\Models\Drink;

use Image;
class JangbuiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data['tmp'] = $this->qstring();

		
		$text1 = request('text1');
		$data['text1'] = $text1;
		$data['list'] = $this->getlist($text1);
		return view('jangbui.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['tmp'] = $this->qstring();
		$data['list'] = $this->getlist_food();
		$data['list1'] = $this->getlist_drink();
        return view('jangbui.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Jangbui;       // member 모델변수 row 선언
		$this -> save_row($request, $row);      // 저장
      
		$tmp = $this->qstring();
		return  redirect('jangbui'. $tmp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['tmp'] = $this->qstring();   	
        $data['row'] = Jangbui::leftJoin('reserveds', 'jangbuis.reserveds_id', '=', 'reserveds.id')->	
					leftJoin('food', 'jangbuis.food_id', '=', 'food.id')->
					leftJoin('drinks', 'jangbuis.drinks_id', '=', 'drinks.id')->
					leftJoin('movies', 'reserveds.movies_id', '=', 'movies.id')->
					leftJoin('rooms', 'reserveds.rooms_id', '=', 'rooms.id')->
					leftJoin('theaters', 'reserveds.theaters_id', '=', 'theaters.id')->
					leftJoin('playings', 'reserveds.playings_id', '=', 'playings.id')->
					leftJoin('playing_times', 'reserveds.dday', '=', 'playing_times.id')->
					select('jangbuis.*', 'reserveds.members_uid', 'movies.name as movie_name', 'food.name as food_name', 
					'drinks.name as drink_name', 'rooms.name as room_name', 'theaters.location', 'playings.playing_date', 
					'playing_times.playing_time', 'reserveds.seat')->
					where('jangbuis.id', '=', $id) ->first();
		return view('jangbui.show', $data ); // 요기로 넣어줘라 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$data['tmp'] = $this->qstring();
		$data['list'] = $this->getlist_food();
		$data['list1'] = $this->getlist_drink();
		$data['row'] = Jangbui::leftJoin('reserveds', 'jangbuis.reserveds_id', '=', 'reserveds.id')->	
					leftJoin('food', 'jangbuis.food_id', '=', 'food.id')->
					leftJoin('drinks', 'jangbuis.drinks_id', '=', 'drinks.id')->
					leftJoin('movies', 'reserveds.movies_id', '=', 'movies.id')->
					leftJoin('rooms', 'reserveds.rooms_id', '=', 'rooms.id')->
					leftJoin('theaters', 'reserveds.theaters_id', '=', 'theaters.id')->
					leftJoin('playings', 'reserveds.playings_id', '=', 'playings.id')->
					leftJoin('playing_times', 'reserveds.dday', '=', 'playing_times.id')->
					select('jangbuis.*', 'reserveds.members_uid', 'movies.name as movie_name', 'food.name as food_name', 
					'drinks.name as drink_name', 'rooms.name as room_name', 'theaters.location', 'playings.playing_date', 
					'playing_times.playing_time', 'reserveds.total')->
					where('jangbuis.id', '=', $id) ->first();   // 자료 찾기
		return view('jangbui.edit', $data );   // 수정화면 호출
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
        $row = Jangbui::find($id); 		// member 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		$tmp = $this->qstring();
		return  redirect('jangbui'.$tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jangbui::find( $id )->delete();
      
		$tmp = $this->qstring();
		return redirect('jangbui'.$tmp); // 다시 멤버 클레스로 가라 첫번째 실행은 index라 메인 페이지 보임
    }
	public function getlist($text1) 
	{
		$result = Jangbui::leftJoin('reserveds', 'jangbuis.reserveds_id', '=', 'reserveds.id')->	
					leftJoin('food', 'jangbuis.food_id', '=', 'food.id')->
					leftJoin('drinks', 'jangbuis.drinks_id', '=', 'drinks.id')->
					leftJoin('movies', 'reserveds.movies_id', '=', 'movies.id')->
					select('jangbuis.*', 'reserveds.members_uid as uid', 'movies.name as movie_name', 'food.name as food_name', 'drinks.name as drink_name')->
					where('reserveds.members_uid', 'like', '%'.$text1.'%') ->orderby('reserveds.members_uid', 'asc')->paginate(5);
		return $result;
	}
	public function getlist_food()
	{
		$result=Food::orderby('name')->get();
		return $result;
	}
	public function getlist_drink()
	{
		$result=Drink::orderby('name')->get();
		return $result;
	}
	public function save_row(Request $request, $row)
	{
       $request->validate( [
        'reserveds_id' => 'required',
        'purchase_date' => 'required',
        'total_price' => 'required',
    ] ,
    [
        'reserveds_id.required'  => '예매정보는 필수입력입니다.',
        'purchase_date.required' => '구매날짜는 필수입력입니다.',
        'total_price.required' => '금액은 필수입력입니다.',
    ] );
     
      $row->reserveds_id = $request->input("reserveds_id");   // 값 입력 
      $row->food_id = $request->input("food_id");
      $row->drinks_id = $request->input("drinks_id");
      $row->total_price = $request->input("total_price");
      $row->purchase_date = $request->input("purchase_date");
	  
      $row->save();         // 저장
	}
	public function qstring()
	{
		$text1 = request("text1") ? request('text1') : "";
		$page = request('page') ? request('page') : "1";
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		return $tmp;
	}
}
