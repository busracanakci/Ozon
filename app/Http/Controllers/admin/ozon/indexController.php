<?php

namespace App\Http\Controllers\admin\ozon;

use App\Helper\mHelper;
use App\Models\Ozon;
use App\Http\Controllers\Controller;
use App\Helper\imageUpload;
use File;
use Illuminate\Http\Request;

class indexController extends Controller
{
  public function index()
  {
    $data = Ozon::paginate(10);
    return view('admin.ozon.index',['data'=>$data]);
  }
  public function create()
  {
    return view('admin.ozon.create');
  }
  public function store(Request $request)
  {
    $all = $request->except('_token');
    $all['selflink'] = mHelper::permalink($all['name']);
    $all['image'] = imageUpload::singleUpload(rand(1,9000),"ozon",$request->file('image'));

    $insert = Ozon::create($all);
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

    $c = Ozon::where('id','=',$id)->count();
    if($c!=0)
    {
      $data = Ozon::where('id','=',$id)->get();
      return view('admin.ozon.edit',['data'=>$data]);
    }
    else {
      return redirect('/');
    }
  }

  public function update(Request $request)
  {
    $id = $request->route('id');
    $c = Ozon::where('id','=',$id)->count();
    if($c!=0)
    {
      $data = Ozon::where('id','=',$id)->get();
      $all = $request->except('_token');
      $all['selflink'] = mHelper::permalink($all['name']);
      $all['image'] = imageUpload::singleUploadUpdate(rand(1,900),"ozon",$request->file('image'),$data,'image');
      $update = Ozon::where('id','=',$id)->update($all);
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

    $c = Ozon::where('id','=',$id)->count();
    if($c!=0)
    {
      $w = Ozon::where('id','=',$id)->get();
      File::delete('public/'.$w[0]['image']);
      Ozon::where('id','=',$id)->delete();
      return redirect()->back();
    }
    else {
      return redirect('/');
    }
  }
}
