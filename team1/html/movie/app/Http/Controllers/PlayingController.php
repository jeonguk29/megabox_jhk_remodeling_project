<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Playing;
use App\Models\Movie;  

use Image;
class PlayingController extends Controller
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
		return view('playing.index', $data);
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
		$data['list'] = $this->getlist_movies();
        return view('playing.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Playing;       // member 모델변수 row 선언
		$this -> save_row($request, $row);      // 저장
      
		$tmp = $this->qstring();
		return  redirect('playing'. $tmp);
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
        $data['row'] = Playing::leftjoin('movies', 'playings.movies_id', '=', 'movies.id')->
					select('playings.*', 'movies.name as movie_name')->
					where('playings.id', '=', $id) ->first();
		return view('playing.show', $data ); // 요기로 넣어줘라 
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
		$data['list'] = $this->getlist_movies();
		$data['row'] = Playing::leftjoin('movies', 'playings.movies_id', '=', 'movies.id')->
					select('playings.*', 'movies.name as movie_name')->
					where('playings.id', '=', $id) ->first();   // 자료 찾기
		return view('playing.edit', $data );   // 수정화면 호출
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
        $row = Playing::find($id); 		// member 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		$tmp = $this->qstring();
		return  redirect('playing'.$tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Playing::find( $id )->delete();
      
		$tmp = $this->qstring();
		return redirect('playing'.$tmp); // 다시 멤버 클레스로 가라 첫번째 실행은 index라 메인 페이지 보임
    }
	public function getlist($text1) 
	{
		$result = Playing::leftjoin('movies', 'playings.movies_id', '=', 'movies.id')->
					select('playings.*', 'movies.name as movie_name')->
					where('movies.name', 'like', '%'.$text1.'%') ->orderby('name', 'asc')->paginate(5);
		return $result;
	}
	function getlist_movies()
	{
		$result=Movie::orderby('name')->get();
		return $result;
	}	
	public function save_row(Request $request, $row)
	{
       $request->validate( [
        'movies_id' => 'required',
		'playing_date' => 'required',
    ] ,
    [
        'movies_id.required'  => '제목은 필수입력입니다.',
		'playing_date.required'  => '상영날짜는 필수입력입니다.',
    ] );
     
	$row->movies_id = $request->input("movies_id");   // 값 입력 
	$row->playing_date = $request->input("playing_date");
    $row->save();         // 저장
      
      return redirect('playing');      // 목록화면으로 이동
      
	}
	public function qstring()
	{
		$text1 = request("text1") ? request('text1') : "";
		$page = request('page') ? request('page') : "1";
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		return $tmp;
	}
}
