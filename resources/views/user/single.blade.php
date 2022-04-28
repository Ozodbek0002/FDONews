
@extends('user.master')

@section('content')

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'/'}}">Asosiy</a></li>
            <li class="breadcrumb-item"><a href="{{url('single')}}">Yangiliklar</a></li>
            <li class="breadcrumb-item active">Yangi materiallar</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Single News Start-->
<div class="single-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="sn-container">
                    <div class="sn-img">
                        <img src="/newsimge/{{$data->rasm}}">
                    </div>
                    <div class="sn-content">
                        <h1 class="sn-title">{{$data->mavzu}}</h1>
                        <p>{{$data->matn}}</p>
                    </div>
                </div>

                <div class="sn-related">
                    <h2>Boshqa yangiliklar</h2>
                    <div class="row sn-slider">

                        <?php $chiq=0 ?>
                        @foreach($baza as $d)

                            <?php $bo=0 ?>
                                @if($data->news_id==$d->id)
                                    <?php $bo=1; ?>
                                @endif

                            @if($bo==0)
                                <?php $chiq+=1 ?>

                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img style="height: 200px;" src="/newsimge/{{$d->rasm}}" />
                                        <div class="sn-title">
                                            <a href="{{url('single',$d->id )}}">{{ substr($d->mavzu, 0,30) }}...</a>
                                        </div>
                                    </div>
                                </div>

                            @endif
                            @if($chiq==6) @break @endif
                        @endforeach

                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h2 class="sw-title">Shu tibdagi yangiliklar</h2>
                        <div class="news-list">

                            <?php $chiq=0; ?>
                            @foreach($baza as $b)
                            @foreach($category as $c)


                                @if($b->id==$c->news_id)
                                    @if($data->id==$c->news_id)
                                        @continue
                                    @endif

                                      <?php $chiq+=1 ?>

                                        <div class="nl-item">
                                            <div class="nl-img">
                                                <img src="/newsimge/{{$b->rasm}}" />
                                            </div>
                                            <div class="nl-title">
                                                <span>{{$b->updated_at->format('H:i d-m-Y')}}</span><br>
                                                <a href="{{url('single',$b->id )}}">{{ substr($b->mavzu, 0,30) }}...</a>
                                            </div>
                                        </div>


                                @endif
                                @if($chiq==6) @break @endif
                            @endforeach
                            @endforeach

                        </div>
                    </div>




                    <div class="sidebar-widget">
                        <h2 class="sw-title">Yangilar kategoriyalari</h2>
                        <div class="category">
                            <ul>
                                <li><a href="uzbekiston">O'zbekiston({{$count[0]}}) </a></li>
                                <li><a href="sport">Sport({{$count[1]}})</a></li>
                                <li><a href="jamiyat">Jamiyat({{$count[2]}})</a></li>
                                <li><a href="jahon">Jahon({{$count[3]}})</a></li>
                                <li><a href="biznes">Biznes({{$count[4]}})</a></li>
                                <li><a href="audio">Audio({{$count[5]}})</a></li>
                                <li><a href="fan">Fan-texnika({{$count[6]}})</a></li>
                                <li><a href="iqtisod">Iqtisodiyod({{$count[7]}})</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="sidebar-widget">
                        <h2 class="sw-title">Teglar</h2>
                        <div class="tags">

                            <a href="uzbekiston" class="btn btn-sm btn-outline-secondary m-1">O'zbekiston</a>
                            <a href="sport" class="btn btn-sm btn-outline-secondary m-1">Sport</a>
                            <a href="jamiyat" class="btn btn-sm btn-outline-secondary m-1">Jamiyat</a>
                            <a href="jahon" class="btn btn-sm btn-outline-secondary m-1">Jahon</a>
                            <a href="biznes" class="btn btn-sm btn-outline-secondary m-1">Biznes</a>
                            <a href="audio" class="btn btn-sm btn-outline-secondary m-1">Audio</a>
                            <a href="fan" class="btn btn-sm btn-outline-secondary m-1">Fan-texnika</a>
                            <a href="iqtisod" class="btn btn-sm btn-outline-secondary m-1">Iqtisodiyod</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Single News End-->

@endsection





