<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    // DB 클래스 사용
use App\Models\Member2;	      // Eloquent ORM
use App\Models\Action;  
use App\Models\Movie;  

class MapControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
		
		return view( 'map.index');	// 자료 표시(view/product폴더의 index.blade.php)
	
    }
	
	
	
	
    


}