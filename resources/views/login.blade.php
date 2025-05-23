<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    {{-- <x-navbar></x-navbar> --}}
    <h1 class="m-5">Login</h1>
    <form class="m-5" method="post">
      @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIS </label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="nis">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NISN</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="nisn">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
