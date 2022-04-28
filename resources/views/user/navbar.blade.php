<!-- Brand Start -->
<div class="brand">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-between">

            <div class="col-lg-3 col-md-4">
                <div class="b-logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('asset/img/logo.png')}}" alt="Logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="b-search">
                    <form action="{{url('search')}}" method="post">
                        @csrf

                        <input type="text" placeholder="Qidiruv.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Brand End -->

<!-- Nav Bar Start -->
<div class="nav-bar ">
    <div class="container ">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Asosiy</a>
                    <div class="nav-item dropdown">
                        <a href="/" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategoriyalar</a>
                        <div class="dropdown-menu">
                            <a href="uzbekiston" class="dropdown-item"> O'zbekiston </a>
                            <a href="sport" class="dropdown-item">Sport</a>
                            <a href="jamiyat" class="dropdown-item">Jamiyat</a>
                            <a href="jahon" class="dropdown-item">Jahon</a>
                            <a href="biznes" class="dropdown-item">Biznes</a>
                            <a href="audio" class="dropdown-item">Audio</a>
                            <a href="fan" class="dropdown-item">Fan-texnika</a>
                            <a href="iqtisod" class="dropdown-item">Iqtisodiyod</a>
                        </div>
                    </div>

                    <a href="{{url('single')}}" class="nav-item nav-link ">Yangiliklar</a>

                    <a href="{{url('/contact')}}" class="nav-item nav-link">Bog'lanish</a>
                </div>
                <div class="social ml-auto">
                    <a href="https://t.me/ozodbek_ozodov1" target="_blank"><i class="fab fa-telegram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100073672038788" target="_blank" ><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ozodbek_ozodov1/" target="_blank" ><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UC_k9p3pSJksWeVzITcVkjnw" target="_blank" ><i class="fab fa-youtube"></i></a>

                    <a style="color: white" href="{{url('/login')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                        </svg></a>
                </div>

            </div>


        </nav>
    </div>
</div>
<!-- Nav Bar End -->
