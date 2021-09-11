<?php

namespace App\Http\Controllers\admin\ekip;

use App\Helper\mHelper;
use App\Models\Ekibimiz;
use App\Http\Controllers\Controller;
use App\Helper\imageUpload;
use File;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
      $data = Ekibimiz::paginate(10);
      return view('admin.ekip.index',['data'=>$data]);
    }
    public function create()
    {
      return view('admin.ekip.create');
    }
    public function store(Request $request)
    {
      $all = $request->except('_token');
      $all['selflink'] = mHelper::permalink($all['name']);
      $all['image'] = imageUpload::singleUpload(rand(1,9000),"ekip",$request->file('image'));

      $insert = Ekibimiz::create($all);
      if($insert)
      {
        return redirect()->back()->with('status','Ekip Üyesi Başarı ile Eklendi');
      }
      else {
        return redirect()->back()->with('status','Ekip Üyesi Eklenemedi');
      }
    }
    public function edit($id)

    {
      
      $c = Ekibimiz::where('id','=',$id)->count();
      if($c!=0)
      {
        $data = Ekibimiz::where('id','=',$id)->get();
        return view('admin.ekip.edit',['data'=>$data]);
      }
      else {
        return redirect('/');
      }
    }

    public function update(Request $request)
    {
      $id = $request->route('id');
      $c = Ekibimiz::where('id','=',$id)->count();
      if($c!=0)
      {
        $data = Ekibimiz::where('id','=',$id)->get();
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $all['image'] = imageUpload::singleUploadUpdate(rand(1,900),"ekip",$request->file('image'),$data,'image');
        $update = Ekibimiz::where('id','=',$id)->update($all);
        if($update)
        {
          return redirect()->back()->with('status','Üye başarı ile güncellendi');
        }
        else {
          return redirect()->back()->with()('status','Üye Güncellenemedi');
        }
      }
      else {
        return redirect('/');
      }

    }

    public function delete($id)
    {

      $c = Ekibimiz::where('id','=',$id)->count();
      if($c!=0)
      {
        $w = Ekibimiz::where('id','=',$id)->get();
        File::delete('public/'.$w[0]['image']);
        Ekibimiz::where('id','=',$id)->delete();
        return redirect()->back();
      }
      else {
        return redirect('/');
      }
    }
}
