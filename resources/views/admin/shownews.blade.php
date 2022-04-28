
@extends('admin.home')

@section('content')

    @if(session()->has('message'))
        <div id="yashirish" class="alert alert-success flex justify-between" onclick="yashir()">

            {{session()->get('message')}}
            <button type="button" class="close " data-dismiss="alert" data-target="alert"></button>

        </div>
    @endif

<h1 class="text text-center"> Barcha yangiliklar</h1>

<div  class="container" align="center">

        <table class="w-75" style="border: 1px solid gray">
            <tr style="background-color: gray; align-items: center;border: 1px solid gray">
                <th style="padding: 20px; ">T/R</th>
                <th class="text-wrap w-50" style="padding: 20px; ">Mavzu</th>
                <th style="padding: 20px; ">Rasmi</th>
                <th style="padding: 20px; ">Amallar</th>
            </tr>

            @foreach($data as $news)

            <tr style="border: 1px solid gray;">
                <td style="padding: 20px; border: 1px solid gray;" >{{$news->id}}</td>
                <td class="text-wrap w-50" style="padding: 20px; border: 1px solid gray; " >{{$news->mavzu}}</td>
                <td style="padding: 20px; border: 1px solid gray; " >
                    <img style="width: 100px; height: 100px;" src="newsimge/{{$news->rasm}}" alt="">
                </td>
                <td style="padding: 20px;" >
                    <a class="btn btn-success" href="{{url('update',$news->id)}}">Yangilash</a>
                    <a class="btn btn-danger" href="{{url('deletenew',$news->id)}}">O'chirish</a>
                </td>
            </tr>

            @endforeach

        </table>

</div>

@endsection
