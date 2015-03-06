@extends('layouts.master')

@section('sidebar')  

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')    
	<div class="row">
		<div class="col-md-8">



			{{ Form::open(array('url' => LaravelLocalization::getCurrentLocale() .'/search','class' => '', 'method' => 'get')) }}
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							{{Form::label('name', Lang::get('cards.CardName'))}}
							{{Form::text('name', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardNamePh'))) }}
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							{{Form::label('subType', Lang::get('cards.CardSubType'))}}
							{{Form::text('subType', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardSubTypePh'))) }}
						</div>
					</div>	

					<div class="col-md-6">				
						<div class="form-group">
							{{Form::label('number', Lang::get('cards.CardNumber'))}}

							{{Form::text('number', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardNumberPh'))) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">				
						<div class="form-group">
							{{Form::label('text', Lang::get('cards.CardText'))}}
							{{Form::text('text', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardTextPh'))) }}
						</div>
					</div>
				
					<div class="col-md-6">				
						<div class="form-group">
							{{Form::label('notes', Lang::get('cards.CardNotes'))}}
							{{Form::text('notes', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardNotesPh'))) }}
						</div>
					</div>
				</div>	

				<div class="row">
					<div class="col-md-12">		
						<div class="row">
							<div class="col-md-6">	
								<div class="form-group">
									{{Form::label('threshold', Lang::get('cards.CardThreshold'))}}
									<div class="row">
										<div class="col-md-4">
											{{Form::select('thresholdFilter', array(':' => '=', '>' => '>', '<' => '<'), null,array('class' => 'form-control input-sm'))}}
										</div>
										<div class="col-md-8">
											{{Form::number('threshold', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardThresholdPh'))) }}
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6">	
								<div class="form-group">
									{{Form::label('cost', Lang::get('cards.CardCost'))}}
									<div class="row">
										<div class="col-md-4">
											{{Form::select('costFilter', array(':' => '=', '>' => '>', '<' => '<'), null,array('class' => 'form-control input-sm'))}}
										</div>
										<div class="col-md-8">
											{{Form::number('cost', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardCostPh'))) }}
										</div>
									</div>
								</div>
							</div>							
						</div>
					</div>
				</div>



				<div class="row">
					<div class="col-md-12">		
						<div class="row">
							<div class="col-md-6">	
								<div class="form-group">
									{{Form::label('strenght', Lang::get('cards.CardStrenght'))}}
									<div class="row">
										<div class="col-md-4">
											{{Form::select('strenghtFilter', array(':' => '=', '>' => '>', '<' => '<'), null,array('class' => 'form-control input-sm'))}}
										</div>
										<div class="col-md-8">
											{{Form::number('strenght', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardStrenghtPh'))) }}
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6">	
								<div class="form-group">
									{{Form::label('life', Lang::get('cards.CardLife'))}}
									<div class="row">
										<div class="col-md-4">
											{{Form::select('lifeFilter', array(':' => '=', '>' => '>', '<' => '<'), null,array('class' => 'form-control input-sm'))}}
										</div>
										<div class="col-md-8">
											{{Form::number('life', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardLifePh'))) }}
										</div>

									</div>
								</div>
							</div>							
						</div>
					</div>
				</div>					

				<div class="row">
					<div class="col-md-12">		
						<div class="row">
							<div class="col-md-6">	
								<div class="form-group">
									{{Form::label('speed', Lang::get('cards.CardSpeed'))}}
									<div class="row">
										<div class="col-md-4">
											{{Form::select('speedFilter', array(':' => '=', '>' => '>', '<' => '<'), null,array('class' => 'form-control input-sm'))}}
										</div>
										<div class="col-md-8">
											{{Form::number('speed', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardSpeedPh'))) }}
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6">	
								<div class="form-group">
									{{Form::label('structure', Lang::get('cards.CardStructure'))}}
									<div class="row">
										<div class="col-md-4">
											{{Form::select('structureFilter', array(':' => '=', '>' => '>', '<' => '<'), null,array('class' => 'form-control input-sm'))}}
										</div>
										<div class="col-md-8">
											{{Form::number('structure', null, array('class' => 'form-control input-sm', 'placeholder' => Lang::get('cards.CardStructurePh'))) }}
										</div>

									</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							{{Form::label('type', Lang::get('cards.CardType'))}}
							{{ Form::select('type', $data['typeCardOptions'] , null, array('multiple' => 'multiple','name'=>'type[]','class'=>'form-control input-sm')) }}
						</div>
					</div>	

					<div class="col-md-6">
						<div class="form-group">
							{{Form::label('trade', Lang::get('cards.CardTrade'))}}
							{{ Form::select('trade', $data['tradeCardOptions'] , null, array('multiple' => 'multiple','name'=>'trade[]','class'=>'form-control input-sm')) }}
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							{{Form::label('edition', Lang::get('cards.CardEdition'))}}
							{{ Form::select('edition', $data['editionCardOptions'] , null, array('multiple' => 'multiple','name'=>'edition[]','class'=>'form-control input-sm')) }}
						</div>
					</div>	

					<div class="col-md-6">
						<div class="form-group">
							{{Form::label('rarity', Lang::get('cards.CardRarity'))}}
							{{ Form::select('rarity', $data['raretyCardOptions'], null, array('multiple' => 'multiple','name'=>'rarity[]','class'=>'form-control input-sm')) }}
						</div>
					</div>			
				</div>
				COUCOUCOU
				{{Lang::get($testlg)}}
				
         
				{{Form::submit('Envoyer', array('class' => 'btn btn-primary pull-right')) }}<br>
				{{
					 $card;
				}}



			{{ Form::close() }}
		</div>
		<div>
	</div>	
  {{ LaravelLocalization::getCurrentLocale() }}
<br />



   {{ LaravelLocalization::getNonLocalizedURL('search') }}<br />
   {{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'search') }}	

@stop


