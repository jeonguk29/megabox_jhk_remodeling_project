<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Member;

class SignupControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('signupuser.index');
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
		$row = new Member; 		// member 모델변수 row 선언
		$this -> save_row($request, $row);		// 저장
		return view('main.index');		// 목록화면으로 이동
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
	public function save_row(Request $request, $row)
	{
		   $request->validate( [
			'uid' => 'required|max:20',
			'pw' => 'required|max:30',
			'name' => 'required|max:20',
			'email' => 'required|max:20',
			'birth' => 'required|size:10',
			'tel' => 'required',
			'ad' => 'required',
		] ,
		[
			'uid.required'  => '아이디는 필수입력 항목입니다.',
			'pw.required' => '비밀번호는 필수입력 항목입니다.',
			'name.required' => '이름은 필수입력 항목입니다.',
			'email.required' => '이메일은 필수입력 항목입니다.',
			'tel.required' => '전화번호는 필수입력 항목입니다.',
			'ad.required' => '주소는 필수입력 항목입니다.',
			'birth.required' => '생년월일은 필수입력 항목입니다.',
			'uid.max'  => '20자 이내입니다.',
			'pw.max' => '30자 이내입니다.',
			'name.max' => '20자 이내입니다.',
			'email.max' => '20자 이내입니다.',
			'birth.size' => 'xxxx-xx-xx의 형식으로 입력해주세요.'
		] );	
		
			
			$row->name = $request->input("name");	// 값 입력 
			$row->uid = $request->input("uid");
			$row->passwd = $request->input("pw");
			$row->email = $request->input("email");
			$row->tel = $request->input("tel");
			$row->rank = 0;
			$row->birthday = $request->input("birth");
			$row->juso = $request->input("ad");
			$row->save();         // 저장
	}
}