@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<p>Hello world</p>
    	<table>
    		<tr>
    			<th>name</th>
    			<th>email</th>
    		</tr>
    	@foreach ($users as $user) 
    		<tr>
    			<td>
	    			<a href="{{ url('/people/'.$user->id) }}">{{$user->name}}</td>
    			<td>{{$user->email}}</td>
    			<td>
    			@foreach ($user->bodylist()->get() as $body)
    				<p>{{$body}}</p>
    			@endforeach
    			</td>
    		</tr>
			@endforeach
		</table>
    </div>
</div>
@endsection