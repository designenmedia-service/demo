@extends('layouts.app')



@section('content')

@foreach($mensen as $mens)
<li>{{$mens}}</li>
@endforeach

@stop
