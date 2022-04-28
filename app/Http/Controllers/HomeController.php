<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Biznes;
use App\Models\Fan_texnika;
use App\Models\Iqtisodiyod;
use App\Models\Jahon;
use App\Models\Jamiyat;
use App\Models\News;
use App\Models\Sport;
use App\Models\Uzbekistan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = News::all();

        $uzb = Uzbekistan::all();
        $spo = Sport::all();
        $jah = Jahon::all();
        $jam = Jamiyat::all();
        $fan = Fan_texnika::all();
        $iqt = Iqtisodiyod::all();
        $biz = Biznes::all();
        $aud = Audio::all();

        return view('user.home',[
            'data'=>$data,
            'uzb'=>$uzb,
            'spo'=>$spo,
            'jah'=>$jah,
            'jam'=>$jam,
            'fan'=>$fan,
            'iqt'=>$iqt,
            'biz'=>$biz,
            'aud'=>$aud
        ]);
    }


    public function single($id=10)
    {
        $baza = News::all();

        $data = News::find($id);

        $uzbb = Uzbekistan::all()->count();
        $spo = Sport::all()->count();
        $jah = Jahon::all()->count();
        $jam = Jamiyat::all()->count();
        $fan = Fan_texnika::all()->count();
        $iqt = Iqtisodiyod::all()->count();
        $biz = Biznes::all()->count();
        $aud = Audio::all()->count();


        $uzb=Uzbekistan::all()->where('news_id',$id )->first();
        if($uzb)
        {
            $category=Uzbekistan::all();
        }
        else{
            $uzb=Sport::all()->where('news_id',$id )->first();
            if($uzb)
            {
                $category=Sport::all();
            }
            else{
                $uzb=Jahon::all()->where('news_id',$id )->first();
                if($uzb)
                {
                    $category=Jahon::all();
                }
                else{
                    $uzb=Jamiyat::all()->where('news_id',$id )->first();
                    if($uzb)
                    {
                        $category=Jamiyat::all();
                    }
                    else{
                        $uzb=Fan_texnika::all()->where('news_id',$id )->first();
                        if($uzb)
                        {
                            $category=Fan_texnika::all();
                        }
                        else {
                            $uzb = Iqtisodiyod::all()->where('news_id', $id)->first();
                            if ($uzb) {
                                $category = Iqtisodiyod::all();
                            }
                            else {
                                $uzb = Biznes::all()->where('news_id', $id)->first();
                                if ($uzb) {
                                    $category = Biznes::all();
                                }
                                else {
                                    $uzb = Audio::all()->where('news_id', $id)->first();
                                    if ($uzb) {
                                        $category = Audio::all();
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }


        return view('user.single',[
            'baza'=>$baza,
            'data'=>$data,
            'category'=>$category,
            'count'=>[$uzbb,$spo,$jah,$jam,$fan,$iqt,$biz,$aud]
        ]);

    }


    public function contact()
    {
        return view('user.contact');
    }


    public function search(Request $request)
    {
        $se=$request->search;

        $data = News::query()->where('mavzu','LIKE',"%{$se}%")->orWhere('matn','LIKE',"%{$se}%")->get();
        return view('user.search',compact('data',$data));
    }



// categorys

    public function uzbekistan($name='O\'zbekiston')
    {
        $data = News::all();
        $uzb = Uzbekistan::all();

        return view('user.category',[
            'category'=>$uzb,
            'data'=>$data,
            'name'=>$name
            ]);
    }

    public function sport($name='Sport')
    {
        $data = News::all();
        $uzb = Sport::all();

        return view('user.category',[
            'category'=>$uzb,
            'data'=>$data,
            'name'=>$name
        ]);
    }

    public function jamiyat($name='Jamiyat')
    {
        $data = News::all();
        $uzb = Jamiyat::all();

        return view('user.category',[
            'category'=>$uzb,
            'data'=>$data,
            'name'=>$name
        ]);
    }

    public function jahon($name='Jahon')
    {
        $data = News::all();
        $uzb = Jahon::all();

        return view('user.category',[
            'category'=>$uzb,
            'data'=>$data,
            'name'=>$name
        ]);
    }

     public function biznes($name='Biznes')
    {
        $data = News::all();
        $uzb = Biznes::all();

        return view('user.category',[
            'category'=>$uzb,
            'data'=>$data,
            'name'=>$name
        ]);
    }

    public function audio($name='Audio')
    {
        $data = News::all();
        $uzb = Audio::all();

        return view('user.category',[
            'category'=>$uzb,
            'data'=>$data,
            'name'=>$name
        ]);
    }

    public function fan($name='Fan-texnika')
    {
        $data = News::all();
        $uzb = Fan_texnika::all();

        return view('user.category',[
            'category'=>$uzb,
            'data'=>$data,
            'name'=>$name
        ]);
    }

    public function iqtisodiyod($name='Iqtisodiyod')
    {
        $data = News::all();
        $uzb = Iqtisodiyod::all();

        return view('user.category',[
            'category'=>$uzb,
            'data'=>$data,
            'name'=>$name
        ]);
    }


}
