@extends('layouts.master')

@section('sidebar')  

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')    
	<div class="row">
		<div class="col-md-12">


			
			{{ Form::open(array('url' => LaravelLocalization::getCurrentLocale() .'/result','class' => '', 'method' => 'get')) }}

				<div class="row">
					@foreach($cardtb as $card)
						<div class="col-md-2 bg-info thumbnail">{{$card->name}}
							<img src="http://www.spoilsinventory.com/pics/SGR/3cc3n7r1c%2073chn1c14n.full.jpg" />
						</div>
					@endforeach
				</div>
			{{Form::submit('Envoyer', array('class' => 'btn btn-primary pull-right')) }}
			{{ Form::close() }}


		</div>
		<div>
	</div>	
  




@stop

