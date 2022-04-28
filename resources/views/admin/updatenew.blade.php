


@extends('admin.home')

@section('content')

    @if(session()->has('message'))
        <div id="yashirish" class="alert alert-success flex justify-between" onclick="yashir()">

            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert" data-target="alert"></button>

        </div>
    @endif

    <h1 class="text text-center">Yangilikni yangilash </h1>
    <div class="container d-flex justify-content-center">

        <form action="{{url('updatenew',$data->id)}}" method="post" class="w-50" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Yangilik Mavzusi</label>
                <input type="text" name="mavzu" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->mavzu}}" required>
            </div>
            <div class="form-floating">
                <textarea name="matn" class="form-control text-white" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px" > {{$data->matn}} </textarea>
                <label for="floatingTextarea2"  required >Yangilik matni</label>
            </div>
            <div class="mb-3">
                <label>Yangilikga aloqador kategoriyalarni tanlang !</label><br/>
                <input type="checkbox" @if( $uz==1 )  checked  @endif  name="news[]" value="Uzbekistan"> O'zbekiston <br/>
                <input type="checkbox" @if( $ja==1 )  checked  @endif  name="news[]" value="Jahon">Jahon<br/>
                <input type="checkbox" @if( $iq==1 )  checked  @endif  name="news[]" value="Iqtisodiyot"> Iqtisodiyot<br/>
                <input type="checkbox" @if( $jam==1 )  checked  @endif  name="news[]" value="Jamiyat"> Jamiyat <br/>
                <input type="checkbox" @if( $fan==1 )  checked  @endif  name="news[]" value="Fan">Fan-texnika <br/>
                <input type="checkbox" @if( $sp==1 )  checked  @endif   name="news[]" value="Sport">Sport <br/>
                <input type="checkbox" @if( $biz==1 )  checked  @endif   name="news[]" value="Biznes">Biznes <br/>
                <input type="checkbox" @if( $au==1 )  checked  @endif  name="news[]" value="Audio">Audio <br/> <br>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Oldingi rasm</label>
                <img style="width: 100px; height: 100px;" src="/newsimge/{{$data->rasm}}" alt="Oldingi rasm">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Rasmni tanlang</label>
                <input type="file" name="rasm" class="form-control text-white" id="exampleInputPassword1" required>
            </div>

            <button type="submit" class="btn btn-primary">Bajarildi</button>

        </form>
    </div>

@endsection
