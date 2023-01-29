<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Food;

use Image;
class StroeControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data['list'] = $this->getlist();
		return view('storeuser.index', $data);
        //
    }
	
	public function getlist() 
	{
		$result = DB::table('food')->get();
		return $result;
	}

 
}
