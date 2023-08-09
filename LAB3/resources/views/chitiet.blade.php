{{-- <h1>Thông Tin Chi Tiết Tin {{$id}}</h1> --}}

@extends('layout')
@section('tieudetrang')
    {{$tin->tieuDe}}
@endsection

@section('noidung')
    <h2>{{$tin->tieuDe}}</h2>
    <h3>{{ $tin->tomTat }}</h3>
    <div id="noidung">
        {!! $tin->noiDung !!}
    </div>
@endsection
