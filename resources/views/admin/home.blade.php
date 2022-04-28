<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>

<div class="container-scroller">


    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')


    <div class="container-fluid page-body-wrapper">

        @include('admin.navbar')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
</div>



@include('admin.js')

</body>
</html>
