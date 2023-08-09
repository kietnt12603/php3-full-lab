<h1>Tin Mới Nhất</h1>
@foreach ($data as $tin)
    <h2> {{$tin->tieuDe}} </h2>
    {{$tin->ngayDang}}<br/>
    <hr>
@endforeach
