<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deperture;
class DepartureController extends Controller
{
    public function create(Request $request)
    {
        $departure = new Deperture();
        $departure->title = $request->title;
        $departure->save();

        return $departure;
    }

    public function update(Request $request)
    {
    	$departure = Deperture::find($request->id);
    	$departure->title = $request->title;
    	$departure->save();
    	return $departure;
    }

    public function delete($id)
    {
    	$deperture = Deperture::find($id)
    	$deperture->positions()->delete();
    	$deperture->delete();
    }
}
