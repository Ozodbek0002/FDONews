
@extends('admin.home')

@section('content')

    <h1 class="text text-center"> To'liq xabar </h1>
    <div class="container ">

            <div class="mb-3 w-100 ">
                <h3 class="text-reddit"> Xabar Egasi: </h3>
                <h4>{{$data->name}} </h4>
            </div>

            <div class="mb-3 w-100">
                <h3 class="text-reddit"> Emaili: </h3>
                <h4>{{$data->email}} </h4>
            </div>

            <div class="mb-3 w-100">
                <h3 class="text-reddit"> Mavzusi: </h3>
                <h5>{{$data->mavzu}} </h5>
            </div>

            <div class="mb-3 w-50 ">
                <h3 class="text-reddit"> Matni: </h3>
                <h6 style="display: block">{{$data->matn}} </h6>
            </div>


    </div>

@endsection
