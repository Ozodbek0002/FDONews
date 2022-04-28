@extends('resources.views.user.master')
@section('content')

<!-- News With Sidebar Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">{{$name}}</h3>
                        </div>
                    </div>

                        <?php $chiq=0 ?>
                    @foreach($data as $d)
                    @foreach($category as $c)
                        @if($c->news_id==$d->id)
                            <?php $chiq+=1; ?>

                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="/newsimge/{{$d->rasm}}" style="object-fit: cover; height: 300px;  ">
                                    <div class="overlay position-relative bg-light">

                                        <div class="mb-2" style="font-size: 14px;">
                                            <a href="">{{$name}}</a>
                                            <span class="px-1">/</span>
                                            <span>{{$d->updated_at->format('H:i d-m-Y')}}</span>
                                        </div>
                                        <a class="h4" href="{{url('single',$d->id )}}">{{ substr($d->mavzu, 0,  40) }}...</a>
                                        <p class="m-0">{{ substr($d->matn, 0,  100) }}...</p>

                                    </div>
                                </div>
                            </div>

                        @endif
                        @if($chiq==6) @break @endif
                    @endforeach
                    @endforeach
                </div>

                <br><br>
                <h3>To'liq yangiliklar</h3>

                <div class="row">
                    <?php $chiq=0 ?>
                    @foreach($data as $d)
                        @foreach($category as $c)
                            @if($c->news_id==$d->id)
                                <?php $chiq+=1; ?>

                                <div class="col-lg-6">

                                    <div class="d-flex mb-3">
                                        <img src="/newsimge/{{$d->rasm}}" style="width: 100px; height: 100px; object-fit: cover;">
                                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                            <div class="mb-1" style="font-size: 13px;">
                                                <a href="">{{$name}}</a>
                                                <span class="px-1">/</span>
                                                <span>{{$d->updated_at->format('H:i d-m-Y')}}</span>
                                            </div>
                                            <a class="h6 m-0" href="{{url('single',$d->id )}}">{{ substr($d->mavzu, 0,  40) }}...</a>

                                        </div>
                                    </div>
                                </div>

                            @endif
                            @if($chiq==8) @break @endif
                        @endforeach
                    @endforeach

                </div>

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 pt-3 pt-lg-0">


                <!-- Popular News Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Boshqa yangiliklar</h3>
                    </div>

                    <?php $chiq=0 ?>
                    @foreach($data as $d)

                        <?php $bo=0 ?>
                        @foreach($category as $c)
                            @if($c->news_id==$d->id)
                                <?php $bo=1; ?>
                            @endif
                        @endforeach

                        @if($bo==0)
                                <?php $chiq+=1 ?>
                            <div class="d-flex mb-3">
                                <img src="/newsimge/{{$d->rasm}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <span>{{$d->updated_at->format('H:i d-m-Y')}}</span>
                                    <a class="h6 m-0" href="{{url('single',$d->id )}}">{{ substr($d->mavzu, 0,30) }}...</a>
                                </div>
                            </div>

                        @endif
                        @if($chiq==6) @break @endif
                    @endforeach

                </div>
                <!-- Popular News End -->

                <!-- Tags Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0"> Teglar </h3>
                    </div>
                    <div class="d-flex flex-wrap m-n1">

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
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
</div>
<!-- News With Sidebar End -->


@endsection





