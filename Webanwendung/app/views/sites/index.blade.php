@extends('templates.default')
@section('content')
	<ul class="list-group" id="updateItems">
		@foreach ($items as $item)
			<li class="list-group-item"><img src="{{  $item->image }}" alt="image" width="50" /> 
			{{ $item->name }} 
			<!-- span class="pull-right label label-success" style="margin: 0 0 0 20px;">Vorhanden</span-->
			<span class="badge">{{ money_format('%.2n', $item->price) }} €</span></li>
		@endforeach
	</ul>
@stop
