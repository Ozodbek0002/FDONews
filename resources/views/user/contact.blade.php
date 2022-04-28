


@extends('user.master')

@section('content')

    @if(session()->has('message'))
        <div id="yashirish" class="alert alert-success flex justify-between" onclick="yashir()">

            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert" data-target="alert"  ></button>

        </div>
    @endif


    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Asosiy</a></li>
                <li class="breadcrumb-item active">Bog`lanish</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form action="{{url('contact')}}" method="post" >
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Ismingiz" name="name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Emailingiz" name="email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Mavzu" name="mavzu" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Matn" name="matn"></textarea>
                            </div>
                            <div><button class="btn " type="submit">Yuborish</button></div>

                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <h3>Aloqa</h3>
                        <h4><i class="fa fa-map-marker"></i>Uzbekistan Khorazm</h4>
                        <h4><i class="fa fa-envelope"></i>ozodbekozodov0002@gmail.com</h4>
                        <h4><i class="fa fa-phone"></i>+998912770919</h4>
                        <div class="social">
                            <a href="https://t.me/ozodbek_ozodov1"><i class="fab fa-telegram" target="_blank" ></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100073672038788" target="_blank" ><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/ozodbek_ozodov1/" target="_blank" ><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC_k9p3pSJksWeVzITcVkjnw" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection


