<?php

namespace App\Http\Controllers\front\ekip;

use App\Http\Controllers\Controller;
use App\Models\Ekibimiz;
use File;
use imageUpload;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index($selflink)
    {
      $c = Ekibimiz::where('selflink','=',$selflink)->count();
      if($c!=0)
      {
          $w = Ekibimiz::where('selflink','=',$selflink)->get();
          return view('front.ekip.index',['data'=>$w]);
      }
      else {
        return redirect('/');
      }

    }
}
