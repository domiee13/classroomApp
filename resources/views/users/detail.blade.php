@extends('layouts.app')

@section('title')
  {{$user->fullname}}'s detail
@endsection

@section('content')
<h2>{{$user->fullname}}</h2>
<hr>
@endsection