<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Log in</title>
</head>
<body>
<br>
<br>
<br>
<h1 class="text text-center text-primary">Kirish faqat Admin uchun </h1>
<br>
<br>

<div class="d-flex justify-content-center bordered ">

    <form method="post" action="{{url('admin1')}}"  style=" padding: 20px; width: 400px; height: 300px; background: rgba(214,225,227,0.95)">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Parol</label>
            <input type="password" name="parol" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Kirish</button>
    </form>
</div>

</body>
</html>
