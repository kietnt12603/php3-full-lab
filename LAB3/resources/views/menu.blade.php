@php
     $loaitin_arr = DB::table('loaitin')
        ->select('idLT', 'moTa')
        ->where('anHien', '=', 1)
        ->orderBy('thuTu', 'asc')
        ->limit(5)
        ->get();
@endphp
<div class="container-fluid">
    <a class="navbar-brand" style="font-size: 30px" href="{{url('/')}}">Tin Tức 24H</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            @foreach ($loaitin_arr as $lt)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cat', [$lt->idLT]) }}">{{ $lt->moTa }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
