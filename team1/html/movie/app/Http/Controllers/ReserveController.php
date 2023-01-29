<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    // DB 클래스 사용
use App\Models\Reserved;	      // Eloquent ORM
use App\Models\Movie;  
use App\Models\Theater;  
use App\Models\Room;  
use App\Models\Playing;  
use App\Models\Playing_time;  
class ReserveController extends Controller
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
		$data['list'] = $this->getlist($text1);		// 자료 읽기
		return view( 'reserveds.index', $data );	// 자료 표시(view/product폴더의 index.blade.php)
	
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
		where('members_uid', 'like', '%' .$text1. '%')->orderby('members_uid','asc')->
		paginate(5)->appends(['text1' => $text1]);             
   
		
		return $result;
	}
	
	function getlist_movies()
	{
		 $result=Movie::orderby('name')->get();
	  return $result;
	}
	
	function getlist_theaters()
	{
		 $result=Theater::orderby('location')->get();
	  return $result;
	}
	
	function getlist_rooms()
	{
		 $result=Room::orderby('name')->get();
	  return $result;
	}
	
	function getlist_playings()
	{
		 $result=Playing::orderby('playing_date')->get();
	  return $result;
	}
	
	function getlist_playingstime()
	{
		 $result=Playing_time::orderby('playing_time')->get();
	  return $result;
	}


 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['list'] = $this->getlist_movies();
		$data['list2'] = $this->getlist_theaters();
		$data['list3'] = $this->getlist_rooms();
		$data['list4'] = $this->getlist_playings();
		$data['list5'] = $this->getlist_playingstime();
		$data['tmp'] = $this->qstring();
        return view('reserveds.create', $data);
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $row = new Reserved;       // reserved 모델변수 row 선언
      $this -> save_row($request, $row);      // 저장
      
      $tmp = $this->qstring();
      return  redirect('reserveds	'. $tmp);      // 목록화면으로 이동
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
	
	
        $data['row'] = Reserved::leftjoin('movies', 'reserveds.movies_id', '=', 'movies.id')->
		leftjoin('theaters', 'reserveds.theaters_id', '=', 'theaters.id')->
		leftjoin('rooms', 'reserveds.rooms_id', '=', 'rooms.id')->
		leftjoin('playings', 'reserveds.playings_id', '=', 'playings.id')->
		leftjoin('playing_times', 'reserveds.dday', '=', 'playing_times.id')->
		select('reserveds.*', 'movies.name as movie_name', 'theaters.location', 'rooms.name as room_name', 'playings.playing_date', 'playing_times.playing_time')->
	    where('reserveds.id', '=', $id)->first();
	
    return view('reserveds.show', $data ); // 요기로 넣어줘라 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		
				$data['list'] = $this->getlist_movies();
		$data['list2'] = $this->getlist_theaters();
		$data['list3'] = $this->getlist_rooms();
		$data['list4'] = $this->getlist_playings();
		$data['list5'] = $this->getlist_playingstime();
		$data['tmp'] = $this->qstring();
		$data['row'] = Reserved::find( $id );   // 자료 찾기
      return view('reserveds.edit', $data );   // 수정화면 호출
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
       
		$row = Reserved::find($id); 		// reserved 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		
		$tmp = $this->qstring();
		return  redirect('reserveds'.$tmp);		// 목록화면으로 이동
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      Reserved::find( $id )->delete();
      
      $tmp = $this->qstring();
      return redirect('reserveds'.$tmp); // 다시 멤버 클레스로 가라 첫번째 실행은 index라 메인 페이지 보임 

    }
   
   public function save_row(Request $request, $row)
{
         $request->validate( [
    
        'members_uid' => 'required',
		'movies_id' => 'required',
		'theaters_id' => 'required',
		'rooms_id' => 'required',
		
    ] ,
    [
     
		'members_uid.required' => '회원아이디는 필수입력입니다.',
		'movies_id.required' => '영화는 필수입력입니다.',
        'theaters_id.required' => '지역은 필수입력입니다.',
		'rooms_id.required' => '상영관은 필수입력입니다.',
    ] );
	
   
   
      

		
     
		$row->members_uid = $request->input("members_uid");
		$row->movies_id = $request->input("movies_id");
		$row->theaters_id = $request->input("theaters_id");
		$row->rooms_id = $request->input("rooms_id");
		$row->dday = $request->input("dday");
		$row->playings_id = $request->input("playings_id");
		$row->adult = $request->input("adult");
		$row->teen = $request->input("teen");
		$row->child = $request->input("child");
		$row->disabledperson = $request->input("disabledperson");
		$row->total = $request->input("total");
		$row->seat = $request->input("seat");
      
	  $row->save();			// 저장
		
      
}

public function qstring()
{
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
}


}