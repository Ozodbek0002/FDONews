<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Biznes;
use App\Models\Contact;
use App\Models\Fan_texnika;
use App\Models\Iqtisodiyod;
use App\Models\Jahon;
use App\Models\Jamiyat;
use App\Models\News;
use App\Models\Sport;
use App\Models\Uzbekistan;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }


    public function admin1(Request $request)
    {
        if($request->email=='ozodbekozodov0002@gmail.com' && $request->parol=='ozodov002')
        {

            $data = News::all();
            return view('admin.shownews',compact('data', $data));

        }
        else
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
            ])->with('message','Siz Admin emassiz!');
        }
    }



    public function admin2()
    {
        $data = News::all();
        return view('admin.shownews',compact('data',$data));
    }



    public function addnews(Request $request)
    {
        return view('admin.addnews',);
    }


    public  function contact(Request $request)
    {
        $data= new Contact();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->mavzu = $request->mavzu;
        $data->matn = $request->matn;

        $data->save();

        return redirect()->back()->with('message','Xabar  muvofaqiyatli yuborildi!');

    }

    public  function messages()
    {
        $data = Contact::all();

        return view('admin.messages' , compact('data',$data));
    }

    public function read($id)
    {
        $data = Contact::find($id);

        return view('admin.read', compact('data',$data));

    }


    public function sendnews(Request $request)
    {
        $data = new News();

        $data->mavzu = $request->mavzu;
        $data->matn = $request->matn;
        $image = $request->rasm;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->rasm->move('newsimge', $imagename);
        $data->rasm = $imagename;
        $data->save();

        if(in_array('Uzbekistan', $request->get('news')))
        {
            $uzb= new Uzbekistan();
            $uzb->news_id = $data->id;
            $uzb->save();
        }
        if(in_array('Sport', $request->get('news')))
        {
            $uzb= new Sport();
            $uzb->news_id = $data->id;
            $uzb->save();
        }
        if(in_array('Jamiyat', $request->get('news')))
        {
            $uzb= new Jamiyat();
            $uzb->news_id = $data->id;
            $uzb->save();
        }
        if(in_array('Jahon', $request->get('news')))
        {
            $uzb= new Jahon();
            $uzb->news_id = $data->id;
            $uzb->save();
        }
        if(in_array('Iqtisodiyot', $request->get('news')))
        {
            $uzb= new Iqtisodiyod();
            $uzb->news_id = $data->id;
            $uzb->save();
        }
        if(in_array('Fan', $request->get('news')))
        {
            $uzb= new Fan_texnika();
            $uzb->news_id = $data->id;
            $uzb->save();
        }
        if(in_array('Biznes', $request->get('news')))
        {
            $uzb= new Biznes();
            $uzb->news_id = $data->id;
            $uzb->save();
        }
        if(in_array('Audio', $request->get('news')))
        {
            $uzb= new Audio();
            $uzb->news_id = $data->id;
            $uzb->save();
        }


        return redirect()->back()->with('message','Yangilik muvofaqiyatli qo`shildi!');
    }



    public function update($id)
    {

        $data = News::find($id);


        $is_u = 0;
        $uzbekiston = Uzbekistan::all();
        foreach ($uzbekiston as $u )
        {
            if ($u->news_id == $data->id )
            {
                $is_u = 1;
                break;
            }
        }


        $is_s = 0;
        $sport = Sport::all();
        foreach ($sport as $s )
        {
            if ($s->news_id == $data->id )
            {
                $is_s = 1;
                break;
            }
        }


        $is_j = 0;
        $Jamiyat = Jamiyat::all();
        foreach ($Jamiyat as $j )
        {
            if ($j->news_id == $data->id )
            {
                $is_j = 1;
                break;
            }
        }


        $is_ja = 0;
        $Jahon = Jahon::all();
        foreach ($Jahon as $u )
        {
            if ($u->news_id == $data->id )
            {
                $is_ja = 1;
                break;
            }
        }


        $is_i = 0;
        $Iqtisodiyod = Iqtisodiyod::all();
        foreach ($Iqtisodiyod as $u )
        {
            if ($u->news_id == $data->id )
            {
                $is_i = 1;
                break;
            }
        }


        $is_f = 0;
        $Fan_texnika = Fan_texnika::all();
        foreach ($Fan_texnika as $u )
        {
            if ($u->news_id == $data->id )
            {
                $is_f = 1;
                break;
            }
        }


        $is_b = 0;
        $Biznes = Biznes::all();
        foreach ($Biznes as $u )
        {
            if ($u->news_id == $data->id )
            {
                $is_b = 1;
                break;
            }
        }


        $is_a = 0;
        $Audio = Audio::all();
        foreach ($Audio as $u )
        {
            if ($u->news_id == $data->id )
            {
                $is_a = 1;
                break;
            }
        }


        return view('admin.updatenew',[
            'data'=>$data,
            'uz'=>$is_u,
            'sp'=>$is_s,
            'jam'=>$is_j,
            'ja'=>$is_ja,
            'iq'=>$is_i,
            'fan'=>$is_f,
            'biz'=>$is_b,
            'au'=>$is_a
        ]);

    }



    public function updatenew(Request $request,$id)
    {
        $data = News::find($id);

        $data->mavzu=$request->mavzu;
        $data->matn=$request->matn;
        $image=$request->rasm;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->rasm->move('newsimge',$imagename);
        $data->rasm=$imagename;
        $data->save();


    // Uzbekistan
        $u = 0;
        $uzb = Uzbekistan::all();
        foreach ($uzb as $uz)
        {
            if ($uz->news_id == $data->id) {
                $u = 1;
                if (!(in_array('Uzbekistan', $request->get('news'))))
                {
                    $uz->delete();
                }
            }
        }
        if (in_array('Uzbekistan', $request->get('news')) && $u==0)
        {
            $uzbb = new Uzbekistan();
            $uzbb->news_id=$data->id;
            $uzbb->save();
        }


    //Sport
         $u = 0;
        $uzb = Sport::all();
        foreach ($uzb as $uz)
        {
            if ($uz->news_id == $data->id) {
                $u = 1;
                if (!(in_array('Sport', $request->get('news'))))
                {
                    $uz->delete();
                }
            }
        }
        if (in_array('Sport', $request->get('news')) && $u==0)
        {
            $uzbb = new Sport();
            $uzbb->news_id=$data->id;
            $uzbb->save();
        }


    //Jamiyat
         $u = 0;
        $uzb = Jamiyat::all();
        foreach ($uzb as $uz)
        {
            if ($uz->news_id == $data->id) {
                $u = 1;
                if (!(in_array('Jamiyat', $request->get('news'))))
                {
                    $uz->delete();
                }
            }
        }
        if (in_array('Jamiyat', $request->get('news')) && $u==0)
        {
            $uzbb = new Jamiyat();
            $uzbb->news_id=$data->id;
            $uzbb->save();
        }


    //Jahon
         $u = 0;
        $uzb = Jahon::all();
        foreach ($uzb as $uz)
        {
            if ($uz->news_id == $data->id) {
                $u = 1;
                if (!(in_array('Jahon', $request->get('news'))))
                {
                    $uz->delete();
                }
            }
        }
        if (in_array('Jahon', $request->get('news')) && $u==0)
        {
            $uzbb = new Jahon();
            $uzbb->news_id=$data->id;
            $uzbb->save();
        }


    //Iqtisodiyod
         $u = 0;
        $uzb = Iqtisodiyod::all();
        foreach ($uzb as $uz)
        {
            if ($uz->news_id == $data->id) {
                $u = 1;
                if (!(in_array('Iqtisodiyot', $request->get('news'))))
                {
                    $uz->delete();
                }
            }
        }
        if (in_array('Iqtisodiyot', $request->get('news')) && $u==0)
        {
            $uzbb = new Iqtisodiyod();
            $uzbb->news_id=$data->id;
            $uzbb->save();
        }


    //Fan_texnika
         $u = 0;
        $uzb = Fan_texnika::all();
        foreach ($uzb as $uz)
        {
            if ($uz->news_id == $data->id) {
                $u = 1;
                if (!(in_array('Fan', $request->get('news'))))
                {
                    $uz->delete();
                }
            }
        }
        if (in_array('Fan', $request->get('news')) && $u==0)
        {
            $uzbb = new Fan_texnika();
            $uzbb->news_id=$data->id;
            $uzbb->save();
        }


    //Biznes
         $u = 0;
        $uzb = Biznes::all();
        foreach ($uzb as $uz)
        {
            if ($uz->news_id == $data->id) {
                $u = 1;
                if (!(in_array('Biznes', $request->get('news'))))
                {
                    $uz->delete();
                }
            }
        }
        if (in_array('Biznes', $request->get('news')) && $u==0)
        {
            $uzbb = new Biznes();
            $uzbb->news_id=$data->id;
            $uzbb->save();
        }


    //Audio
         $u = 0;
        $uzb = Audio::all();
        foreach ($uzb as $uz)
        {
            if ($uz->news_id == $data->id) {
                $u = 1;
                if (!(in_array('Audio', $request->get('news'))))
                {
                    $uz->delete();
                }
            }
        }
        if (in_array('Audio', $request->get('news')) && $u==0)
        {
            $uzbb = new Audio();
            $uzbb->news_id=$data->id;
            $uzbb->save();
        }


        return redirect()->back()->with('message','Yangilik muvofaqiyatli yangilandi!');

    }



    public function delete($id)
    {
        $data = News::find($id);


        $uzb = Uzbekistan::all();
            foreach ($uzb as $uz)
                if($uz->news_id == $data->id)
                {
                    $uz->delete();
                }


        $uzb = Sport::all();
            foreach ($uzb as $uz)
                if($uz->news_id == $data->id)
                {
                    $uz->delete();
                }


        $uzb = Jamiyat::all();
            foreach ($uzb as $uz)
                if($uz->news_id == $data->id)
                {
                    $uz->delete();
                }


        $uzb = Jahon::all();
            foreach ($uzb as $uz)
                if($uz->news_id == $data->id)
                 {
                    $uz->delete();
                }


        $uzb = Iqtisodiyod::all();
            foreach ($uzb as $uz)
                if($uz->news_id == $data->id)
                 {
                    $uz->delete();
                }


        $uzb = Fan_texnika::all();
            foreach ($uzb as $uz)
                if($uz->news_id == $data->id)
                 {
                    $uz->delete();
                }


        $uzb = Biznes::all();
            foreach ($uzb as $uz)
                if($uz->news_id == $data->id)
                 {
                    $uz->delete();
                }


        $uzb = Audio::all();
            foreach ($uzb as $uz)
                if($uz->news_id == $data->id)
                 {
                    $uz->delete();
                }


        $data->delete();

        return redirect()->back()->with('message','Yangilik muvofaqiyatli o`chirildi!');
    }

}
