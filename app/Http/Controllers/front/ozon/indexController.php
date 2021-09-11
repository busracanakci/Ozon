<?php

namespace App\Http\Controllers\front\ozon;

use App\Models\Ozon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index($selflink)
    {
      $c = Ozon::where('selflink','=', $selflink)->count();
      if($c!=0)
      {
        $w = Ozon::where('selflink','=', $selflink)->get();
        return view('front.ozon.index',['data'=>$w]);
      }
      else {
        return redirect('/');
      }
    }
}
