<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Danh Sách Tin</h1>
        <a href="{{ route('themtin') }}" class="btn btn-info">Thêm</a>
        @foreach ($data as $tin)
            <div class="row">
                <h4>{{$tin->tieuDe}}</h4>
                <p>{{$tin->tomTat}}</p>
            </div>
            <div class="right">
                <a href="{{ route('capnhattin', ['id'=>$tin->id]) }}" class="btn btn-success">Sửa</a>
                <a href="{{ route('xoatin', ['id'=>$tin->id]) }}" class="btn btn-danger">Xóa</a>
            </div>
        @endforeach

    </div>
</body>
</html>