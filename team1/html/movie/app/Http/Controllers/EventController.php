<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    // DB 클래스 사용
use App\Models\Reserved;	      // Eloquent ORM
use App\Models\Movie;  
use App\Models\Member;  
use App\Models\Room;  
 

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	// 자료 읽기
    return view( 'event.index');	// 자료 표시(view/product폴더의 index.blade.php)
	
    }
	


  


}