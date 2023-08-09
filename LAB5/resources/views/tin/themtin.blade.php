<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Thêm Tin</h1>
        <form action="/tin/them" method="post" class="col-7 m-auto">
            <p> Tiêu đề: <input name="tieuDe" class="form-control"></p>
            <p> Tóm tắt:
                <textarea name="tomTat" class="form-control"></textarea>
            </p>
            <p> urlHinh: <input name="urlHinh" class="form-control"></p>
            <p> idLT: <select name="idLT" class="form-control">
                    <option value="1">Xã hội</option>
                    <option value="3">Du lịch</option>
                </select> 
            </p>
            <button type="submit" class="btn btn-warning">Thêm tin</button>
            <a href="{{route('dstin')}}" class="btn btn-danger">Quay Lại</a>
            @csrf
        </form>
    </div>
</body>
</html>