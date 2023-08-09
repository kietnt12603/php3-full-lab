{{-- <h1>Các Tin Trong Loại {{$idLT}}</h1> --}}

@extends('layout')
@section('tieudetrang')
    Tin Trong Loại {{$tenloai->moTa}}
@endsection

@section('noidung')
    <h1 class="bg-warning">{{$tenloai->moTa}}</h1>
    @foreach($listtin as $t)
        <div class="row">
            <h3><a href="{{url('/tin',[$t->id])}}">{{$t->tieuDe}}</a></h3>
            <p>{{$t->tomTat}}</p>
        </div>
    @endforeach
@endsection
