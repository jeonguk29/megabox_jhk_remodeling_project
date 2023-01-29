<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Food;

use Image;
class FoodController extends Controller
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
		return view('food.index', $data);
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
        return view('food.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Food;       // member 모델변수 row 선언
		$this -> save_row($request, $row);      // 저장
      
		$tmp = $this->qstring();
		return  redirect('food'. $tmp);
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
        $data['row'] = Food::find($id);
		return view('food.show', $data ); // 요기로 넣어줘라 
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
		$data['row'] = Food::find( $id );   // 자료 찾기
		return view('food.edit', $data );   // 수정화면 호출
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
        $row = Food::find($id); 		// member 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		$tmp = $this->qstring();
		return  redirect('food'.$tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Food::find( $id )->delete();
      
		$tmp = $this->qstring();
		return redirect('food'.$tmp); // 다시 멤버 클레스로 가라 첫번째 실행은 index라 메인 페이지 보임
    }
	public function getlist($text1) 
	{
		$result = DB::table('food')
					->where('name', 'like', '%'.$text1.'%') ->orderby('name', 'asc')->paginate(5);
		return $result;
	}	
	public function save_row(Request $request, $row)
	{
       $request->validate( [
        'name' => 'required|max:20',
		'price' => 'required',
    ] ,
    [
        'name.required'  => '제목은 필수입력입니다.',
		'price.required'  => '가격은 필수입력입니다.',
		'name.max'  => '20자 이내입니다.',
    ] );
     
	$row->name = $request->input("name");   // 값 입력 
	$row->subname = $request->input("subname");   // 값 입력 
	$row->price = $request->input("price");
	if ($request->hasFile('pic'))            // upload할 파일이 있는 경우
		{
			$pic = $request->file('pic');
			$pic_name = $pic->getClientOriginalName();             // 파일이름
			$pic->storeAs('public/product_img', $pic_name);        // 파일저장
			
			$img = Image::make($pic)
			   ->resize(null, 200, function($constraint){ $constraint->aspectRatio();})
			   ->save('storage/product_img/thumb/' .$pic_name);
			
			$row->pic = $pic_name;                     // pic 필드에 파일이름 저장
		}
    $row->save();         // 저장
      
      return redirect('food');      // 목록화면으로 이동
      
	}
	public function qstring()
	{
		$text1 = request("text1") ? request('text1') : "";
		$page = request('page') ? request('page') : "1";
		$tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
		return $tmp;
	}
}
