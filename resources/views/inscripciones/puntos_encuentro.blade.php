@extends('main')

@section('page_title')
    Detalle de Actividad
@endsection


@section('main_image')
@endsection

@section('main_content')
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<h2 class="card-title">Elegir un punto de encuentro</h1>
					</div>
				</div> 
				<hr>
				<div class="row">
					<div class="col-md-12">
						<h5 class="card-title">Que es un punto de encuentro?</h1>
					</div>
				</div> 
				<div class="row">
					<div class="col-md-12">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					</div>
				</div> 
				<hr>
				<div class="row">
					<div class="col-md-12">
						<h5 class="card-title">Puntos de encuentro</h1>
					</div>
				</div> 
				<form action="/inscripciones/actividad/{{$actividad->idActividad}}/confirmar" method="POST">
					@foreach($actividad->puntosEncuentro as $puntoEncuentro)
					<div class="row">
						<div class="col-md-1">
						  <input type="radio" name="punto_encuentro" value="{{$puntoEncuentro->idPuntoEncuentro}}"{{$loop->first ? 'checked = "checked"': ''}}>
						</div>
						<div class="col-md-11">
						  {{$puntoEncuentro->punto}}	
						</div>
					</div>
					@endforeach
					<div class="row  align-middle">
					<input type="hidden" name="idActividad" id="idActividad" value="{{ $actividad->idActividad }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<div class="col-md-3 text-primary"><i class="fas fa-share-alt"></i><a href="/actividades/{{$actividad->idActividad}}"> volver</a></div>
						<div class="col-md-3"><input type="submit" value="SIGUIENTE" class="btn btn-primary"> </div>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://placeholdit.co/i/555x150?bg=d3d3d3">
					<div class="row">
						<div class="col-md-12">
							<h6>{{ $actividad->tipo->nombre }}</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h5>{{ $actividad->nombreActividad }}</h5>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-4"><i class="far fa-calendar"></i> <span>{{ $actividad->fechaInicio->format('d-m-Y')}}</span></div>
						<div class="col-md-4"><i class="far fa-clock"></i> <span>{{ $actividad->fechaInicio->format('h:m')}}</span></div>
						<div class="col-md-4"><i class="fas fa-map-marker-alt"></i> <span>{{ $actividad->lugar }}</span></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">{{ $actividad->descripcion }}</div>
					</div>

				</div>
			</div>
		</div>
		<inscripciones></inscripciones>
@endsection