<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    // DB 클래스 사용
use App\Models\Member;	      // Eloquent ORM  

use Image;
class MemberController extends Controller
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
    return view( 'member.index', $data );	// 자료 표시(view/member폴더의 index.blade.php)
	
    }
	
	public function getlist($text1)
	{
		//$sql = 'select * from members order by name';                    // Raw Query
         //$result = DB::select($sql);
		//$result = DB::table('member')->orderby('name')->get();      // Query Builder
		$result = Member::where('name', 'like', '%' .$text1. '%')->orderby('name','asc')->paginate(5)->appends(['text1' => $text1]);                            // Eloquent ORM
		// 필드이름 내번호 넣기 
    return $result;
	}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['tmp'] = $this->qstring();
        return view('member.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		$row = new Member; 		// member 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		
		$tmp = $this->qstring();
		return  redirect('member'. $tmp);		// 목록화면으로 이동
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
		
     $data['row'] = Member::find($id);     //find는 id만 검색할수있는 함수임   //Eloquent ORM
	 return view('member.show', $data ); // 요기로 넣어줘라 

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
	 $data['row'] = Member::find( $id );	// 자료 찾기
		return view('member.edit', $data );	// 수정화면 호출
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
       
		$row = Member::find($id); 		// member 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		
		$tmp = $this->qstring();
		return  redirect('member'.$tmp);		// 목록화면으로 이동
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
		Member::find( $id )->delete();
		
		$tmp = $this->qstring();
		return redirect('member'.$tmp); // 다시 멤버 클레스로 가라 첫번째 실행은 index라 메인 페이지 보임 

    }
	
	public function save_row(Request $request, $row)
{
       $request->validate( [
        'uid' => 'required|max:20',
        'passwd' => 'required|max:30',
        'name' => 'required|max:20',
    ] ,
    [
        'uid.required'  => '아이디는 필수입력입니다.',
        'passwd.required' => '암호는 필수입력입니다.',
        'name.required' => '이름은 필수입력입니다.',
        'uid.max'  => '20자 이내입니다.',
        'passwd.max' => '30자 이내입니다.',
        'name.max' => '20자 이내입니다.',
    ] );
	
        $tel1= $request->input("tel1");
		$tel2= $request->input("tel2");
		$tel3= $request->input("tel3");
		$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);	// 전화번호 합치기
		
	
		
		$row->name = $request->input("name");	// 값 입력 
		$row->uid = $request->input("uid");
		$row->passwd = $request->input("passwd");
		$row->email = $request->input("email");
		$row->tel = $tel;
		$row->rank = $request->input("rank");
		$row->birthday = $request->input("birthday");
		$row->juso = $request->input("juso");
		
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
		
		return  redirect('member');		// 목록화면으로 이동
      	
	
}

public function qstring()
{
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
}


}