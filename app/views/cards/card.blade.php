@extends('layouts.master')

@section('sidebar')  

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')    
	<div class="row">
		<div class="col-md-12">
			
			<h3>{{{$cardtb[0]->name}}}</h3>
			<p>{{{$cardtb[0]->number}}}</p>
			{{{$cardtb[0]->text}}}
		
			
			<img src="http://www.spoilsinventory.com/pics/SGR/3cc3n7r1c%2073chn1c14n.full.jpg" class="media-object"/>
			
		</div>
		<div>
	</div>	
  




@stop

