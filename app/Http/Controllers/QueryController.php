<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deperture;
use App\Position;
class QueryController extends Controller
{
    public function allQuery(Request $request)
    {
    	if (!$request->ajax()) {
    		return redirect('/');
    	}

    	return [
    		'departures' => Deperture::all(),
    		'positions' => Position::with('departure')->get()
    	];
    }
}
