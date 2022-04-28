@extends('user.master')
@section('content')
    <div class="container">



        @if($data->isNotEmpty())

            <h1 class="text-center">Qidiruv natijalari</h1>
            <div class="row">
                @foreach($data as $key1=>$post)


                    <div class="col-lg-4" >
                        <div class="position-relative mb-3" >
                            <img class="img-fluid w-100" src="/newsimge/{{$post->rasm}}" style="height: 240px; object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <a class="h4" href="{{url('single',$post->id)}}">{{substr($post->mavzu,0,40)}}...</a>
                                <p class="m-0">
                                    {{ substr($post->matn, 0,  120)}}...
                                </p>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>

        @else
            <div class="text-center">
                <h3 class="m-4">Hech qanday najija topilmadi </h3>
                <p>Boshqa kalit so'zlardan foydalanib qayta urinib ko'ring !</p>

                <img src="{{asset('/asset/img/search.jpg')}}" alt="">
            </div>
        @endif

    </div>
@endsection
