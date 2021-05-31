@extends ('layouts.app')
@section ('footer')
<h1>Testpagina</h1>

@foreach($namen as $naam)
<li>{{$naam}}</li>
@endforeach


@stop