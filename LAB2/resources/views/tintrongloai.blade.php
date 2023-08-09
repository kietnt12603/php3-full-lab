
<h1 style="text-align: center">Tin Trong Loại {{$tenloai->moTa}}</h1><hr>
@foreach ($data as $tin)
    <div class="row">
        <h3>
            {{$tin->tieuDe}}
        </h3>
        <p>
            {{$tin->tomTat}}
        </p>
        <hr>
    </div>
@endforeach
