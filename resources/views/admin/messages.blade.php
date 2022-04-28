 @extends('admin.home')

 @section('content')

     <h1 class="text text-center"> Barcha xabarlar</h1>

     <div  class="container" align="center">

         <table class="w-75" style="border: 1px solid gray">
             <tr style="background-color: gray; align-items: center;border: 1px solid gray">
                 <th style="padding: 20px; ">T/R</th>
                 <th class="text-wrap w-50" style="padding: 20px; ">name</th>
                 <th style="padding: 20px; ">mavzu</th>
                 <th style="padding: 20px; ">Vaqti</th>
                 <th style="padding: 20px; ">Amallar</th>
             </tr>

             @foreach($data as $mess)

                 <tr style="border: 1px solid gray;">
                     <td style="padding: 20px; border: 1px solid gray;" >{{$mess->id}}</td>
                     <td class="text-wrap w-50" style="padding: 20px; border: 1px solid gray; " >{{$mess->name}}</td>
                     <td class="text-wrap w-50" style="padding: 20px; border: 1px solid gray; " >{{$mess->mavzu}}</td>
                     <td class="text-wrap w-50" style="padding: 20px; border: 1px solid gray; " >{{$mess->created_at}}</td>
                     <td style="padding: 20px;" >
                         <a class="btn btn-success" href="{{url('read',$mess->id)}}">O'qish</a>

                     </td>
                 </tr>

             @endforeach

         </table>

     </div>


 @endsection
