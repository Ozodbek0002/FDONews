
@extends('user.master')

@section('content')


@if(session()->has('message'))
    <div id="yashirish" class="alert alert-danger flex justify-between" onclick="yashir()">

        {{session()->get('message')}}
        <button type="button" class="close " data-dismiss="alert" data-target="alert"></button>

    </div>
@endif



<!-- Top News Start-->
<div class="top-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 tn-left">
                <div class="row tn-slider">
                    @foreach($data as $key=>$news)
                        @if($key<4) @continue @endif
                        @if( $key == 8 )@break
                        @endif
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img style="height: 350px;" src="/newsimge/{{$news->rasm}}" alt="bu rasm" >
                            <div class="tn-title">
                                <a href="{{url('single',$news->id )}}" >{{ substr($news->mavzu, 0,40) }}...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="col-md-6 tn-right">
                <div class="row">

                    @foreach($data as $key=>$news)
                        @if( $key == 4 )@break
                        @endif
                    <div class="col-md-6">
                        <div class="tn-img h-100">
                            <img src="/newsimge/{{$news->rasm}}" />
                            <div class="tn-title">
                                <a href="{{url('single',$news->id )}}" >{{ substr($news->mavzu, 0,40) }}...</a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top News End-->


<!-- Category News Start-->
<div class="cat-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Uzbekiston</h2>
                <div class="row cn-slider">
                    @foreach($uzb as $uz)
                        @foreach( $data as $da)
                        @if($uz->news_id==$da->id)
                            <div class="col-md-6 ">
                                <div class="cn-img" >
                                        <img style="height: 200px" src="/newsimge/{{$da->rasm}}">
                                    <div class="cn-title">
                                        <a href="{{url('single',$da->id )}}">{{ substr($da->mavzu, 0,30) }}...</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    @endforeach
                </div>
            </div>


            <div class="col-md-6">
                <h2>Sport</h2>
                <div class="row cn-slider">
                    @foreach($spo as $s)
                        @foreach( $data as $da)
                            @if($s->news_id==$da->id)
                                <div class="col-md-6 ">
                                    <div class="cn-img" >
                                        <img style="height: 200px" src="/newsimge/{{$da->rasm}}">
                                        <div class="cn-title">
                                            <a href="{{url('single',$da->id )}}">{{ substr($da->mavzu, 0,30) }}...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Category News End-->


<!-- Category News Start-->
<div class="cat-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Bizneslar</h2>
                <div class="row cn-slider">
                    @foreach($biz as $b)
                        @foreach( $data as $da)
                            @if($b->news_id==$da->id)
                                <div class="col-md-6 ">
                                    <div class="cn-img" >
                                        <img style="height: 200px" src="/newsimge/{{$da->rasm}}">
                                        <div class="cn-title">
                                            <a href="{{url('single',$da->id )}}">{{ substr($da->mavzu, 0,30) }}...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h2>Iqtisodiyod</h2>
                <div class="row cn-slider">

                    @foreach($iqt as $b)
                        @foreach( $data as $da)
                            @if($b->news_id==$da->id)
                                <div class="col-md-6 ">
                                    <div class="cn-img" >
                                        <img style="height: 200px" src="/newsimge/{{$da->rasm}}">
                                        <div class="cn-title">
                                            <a href="{{url('single',$da->id )}}">{{ substr($da->mavzu, 0,30) }}...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category News End-->


<!-- Category News Start-->
<div class="cat-news">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h2>Jahon</h2>
                <div class="row cn-slider">
                    @foreach($jah as $b)
                        @foreach( $data as $da)
                            @if($b->news_id==$da->id)
                                <div class="col-md-6 ">
                                    <div class="cn-img" >
                                        <img style="height: 200px" src="/newsimge/{{$da->rasm}}">
                                        <div class="cn-title">
                                            <a href="{{url('single',$da->id )}}">{{ substr($da->mavzu, 0,30) }}...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="col-md-6">
                <h2>Jamiyat</h2>
                <div class="row cn-slider">

                    @foreach($jam as $b)
                        @foreach( $data as $da)
                            @if($b->news_id==$da->id)
                                <div class="col-md-6 ">
                                    <div class="cn-img" >
                                        <img style="height: 200px" src="/newsimge/{{$da->rasm}}">
                                        <div class="cn-title">
                                            <a href="{{url('single',$da->id )}}">{{ substr($da->mavzu, 0,30) }}...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>
<!-- Category News End-->

<!-- Category News Start-->
<div class="cat-news">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h2>Fan-texnika</h2>
                <div class="row cn-slider">
                    @foreach($fan as $b)
                        @foreach( $data as $da)
                            @if($b->news_id==$da->id)
                                <div class="col-md-6 ">
                                    <div class="cn-img" >
                                        <img style="height: 200px" src="/newsimge/{{$da->rasm}}">
                                        <div class="cn-title">
                                            <a href="{{url('single',$da->id )}}">{{ substr($da->mavzu, 0,30) }}...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="col-md-6">
                <h2>Audio</h2>
                <div class="row cn-slider">

                    @foreach($aud as $b)
                        @foreach( $data as $da)
                            @if($b->news_id==$da->id)
                                <div class="col-md-6 ">
                                    <div class="cn-img" >
                                        <img style="height: 200px" src="/newsimge/{{$da->rasm}}">
                                        <div class="cn-title">
                                            <a href="{{url('single',$da->id )}}">{{ substr($da->mavzu, 0,30) }}...</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Category News End-->

<br>
<br>
<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2>Yangiliklar</h2>
                <div class="row">

                <?php $chiq=0; ?>

                @foreach($data as $news)
                    <?php $chiq+=1; ?>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img style="height: 200px;" src="newsimge/{{$news->rasm}}" />
                            <div class="mn-title">
                                <a href="{{url('single',$news->id )}}">{{ substr($da->mavzu, 0,40) }}...</a>
                            </div>
                        </div>
                    </div>
                    @if($chiq==9) @break @endif
                @endforeach

                </div>
            </div>


            <div class="col-lg-3">
                <div class="mn-list">
                    <h2>Teglar</h2>
                    <ul>
                        <li><a href="uzbekiston">O'zbekiston</a></li>
                        <li><a href="sport">Sport</a></li>
                        <li><a href="jamiyat">Jamiyat</a></li>
                        <li><a href="jahon">Jahon</a></li>
                        <li><a href="biznes">Biznes</a></li>
                        <li><a href="audio">Audio</a></li>
                        <li><a href="fan">Fan-texnika</a></li>
                        <li><a href="iqtisod">Iqtisodiyod</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News End-->


@endsection




