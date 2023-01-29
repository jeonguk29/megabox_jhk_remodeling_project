<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Movie;

use Image;
class MovieController extends Controller
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
		return view('movie.index', $data);
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
        return view('movie.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Movie;       // member 모델변수 row 선언
		$this -> save_row($request, $row);      // 저장
      
		$tmp = $this->qstring();
		return  redirect('movie'. $tmp);
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
        $data['row'] = Movie::find($id);
		return view('movie.show', $data ); // 요기로 넣어줘라 
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
		$data['row'] = Movie::find( $id );   // 자료 찾기
		return view('movie.edit', $data );   // 수정화면 호출
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
        $row = Movie::find($id); 		// member 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		$tmp = $this->qstring();
		return  redirect('movie'.$tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::find( $id )->delete();
      
		$tmp = $this->qstring();
		return redirect('movie'.$tmp); // 다시 멤버 클레스로 가라 첫번째 실행은 index라 메인 페이지 보임
    }
	public function getlist($text1) 
	{
		$result = DB::table('movies')
					->where('name', 'like', '%'.$text1.'%') ->orderby('name', 'asc')->paginate(5);
		return $result;
	}	
	public function save_row(Request $request, $row)
	{
       $request->validate( [
        'name' => 'required|max:20',
        'rating' => 'required',
        'director' => 'required|max:20',
		'playingtime' => 'required',
		'release_date' => 'required',
		'publisher' => 'required|max:20',
    ] ,
    [
        'name.required'  => '제목은 필수입력입니다.',
        'rating.required' => '상영등급은 필수입력입니다.',
        'director.required' => '감독은 필수입력입니다.',
		'playingtime.required' => '상영시간은 필수입력입니다.',
		'release_date.required' => '개봉일자는 필수입력입니다.',
		'publisher.required' => '배급사는 필수입력입니다.',
        'name.max'  => '20자 이내입니다.',
        'director.max' => '20자 이내입니다.',
        'publisher.max' => '20자 이내입니다.',
    ] );
     
      $row->name = $request->input("name");   // 값 입력 
      $row->rating = $request->input("rating");
      $row->director = $request->input("director");
      $row->playingtime = $request->input("playingtime");
      $row->release_date = $request->input("release_date");
      $row->publisher = $request->input("publisher");
      $row->video = $request->input("video");
	  $row->description = $request->input("description");
	
	if ($request->hasFile('pic1'))            // upload할 파일이 있는 경우
         {
            $pic1 = $request->file('pic1');
            $pic_name1 = $pic1->getClientOriginalName();             // 파일이름
            $pic1->storeAs('public/product_img', $pic_name1);        // 파일저장
            
            $img = Image::make($pic1)
               ->resize(null, 200, function($constraint){ $constraint->aspectRatio();})
               ->save('storage/product_img/thumb/' .$pic_name1);
            
            $row->pic1 = $pic_name1;                     // pic 필드에 파일이름 저장
         }
	if ($request->hasFile('pic2'))            // upload할 파일이 있는 경우
         {
            $pic2 = $request->file('pic2');
            $pic_name2 = $pic2->getClientOriginalName();             // 파일이름
            $pic2->storeAs('public/product_img', $pic_name2);        // 파일저장
            
            $img = Image::make($pic2)
               ->resize(null, 200, function($constraint){ $constraint->aspectRatio();})
               ->save('storage/product_img/thumb/' .$pic_name2);
            
            $row->pic2 = $pic_name2;                     // pic 필드에 파일이름 저장
         }
	if ($request->hasFile('pic3'))            // upload할 파일이 있는 경우
         {
            $pic3 = $request->file('pic3');
            $pic_name3 = $pic3->getClientOriginalName();             // 파일이름
            $pic3->storeAs('public/product_img', $pic_name3);        // 파일저장
            
            $img = Image::make($pic3)
               ->resize(null, 200, function($constraint){ $constraint->aspectRatio();})
               ->save('storage/product_img/thumb/' .$pic_name3);
            
            $row->pic3 = $pic_name3;                     // pic 필드에 파일이름 저장
         }
         
      $row->save();         // 저장
      
      return  redirect('member');      // 목록화면으로 이동
      
	}
	public function qstring()
	{
		$text1 = request("text1") ? request('text1') : "";
		$page = request('page') ? request('page') : "1";
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		return $tmp;
	}
}
