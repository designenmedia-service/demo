@extends('layouts.app')



@section('content')

<h1>Contact Page</h1>



<ul>

        
    @foreach($people as $person)

        <li>{{$person}}</li>
        
    @endforeach
        
</ul>

<ul>Hallo</ul>
<li>Hallo</li>




@stop

@section('footer')
<!-- 
<script>alert('Hello Visitor')</script> -->

@stop




