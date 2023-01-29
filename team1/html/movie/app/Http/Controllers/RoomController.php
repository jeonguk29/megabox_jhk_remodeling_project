<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Room;

class RoomController extends Controller
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
		return view('room.index', $data);
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
        return view('room.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Room;       // member 모델변수 row 선언
		$this -> save_row($request, $row);      // 저장
      
		$tmp = $this->qstring();
		return  redirect('room'. $tmp);
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
        $data['row'] = Room::find($id);
		return view('room.show', $data ); // 요기로 넣어줘라 
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
		$data['row'] = Room::find( $id );   // 자료 찾기
		return view('room.edit', $data );   // 수정화면 호출
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
        $row = Room::find($id); 		// member 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		$tmp = $this->qstring();
		return  redirect('room'.$tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::find( $id )->delete();
      
		$tmp = $this->qstring();
		return redirect('room'.$tmp); // 다시 멤버 클레스로 가라 첫번째 실행은 index라 메인 페이지 보임
    }
	public function getlist($text1) 
	{
		$result = DB::table('rooms')
					->where('name', 'like', '%'.$text1.'%') ->orderby('name', 'asc')->paginate(5);
		return $result;
	}	
	public function save_row(Request $request, $row)
	{
       $request->validate( [
        'name' => 'required',
    ] ,
    [
        'name.required'  => '제목은 필수입력입니다.',
    ] );
     
      $row->name = $request->input("name");   // 값 입력 
         
      $row->save();         // 저장
      
      return  redirect('room');      // 목록화면으로 이동
      
	}
	public function qstring()
	{
		$text1 = request("text1") ? request('text1') : "";
		$page = request('page') ? request('page') : "1";
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		return $tmp;
	}
}
