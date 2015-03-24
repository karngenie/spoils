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

						<div class="col-md-4">
							<div class="cardInfo media thumbnail">
  								<div class="media-left">									
									<img src="http://www.spoilsinventory.com/pics/SGR/3cc3n7r1c%2073chn1c14n.full.jpg" class="media-object" style="width:75px"/>
								</div>
								<div class="media-body">
									<h4>
							
										{{ link_to(LaravelLocalization::getCurrentLocale().'/'.'card/'. $card->number, $card->name,	array('class' => '')) }}

									</h4>
									<p >{{$card->text}}</p>

								</div>
							</div>
						</div>
					@endforeach
				</div>
			{{Form::submit('Envoyer', array('class' => 'btn btn-primary pull-right')) }}
			{{ Form::close() }}


		</div>
		<div>
	</div>	
  




@stop

