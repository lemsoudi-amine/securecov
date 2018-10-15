@extends('layouts.master')
@section('content')
<div class="main-container">
	<div class="row gutter" style="margin-left:  5%;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel">
				<div class="panel-body">

						<form accept-charset="utf-8" id="form" name="form" method="post" action="{{ url('covoiturage/store') }}"  enctype="multipart/form-data">
								@if (count($errors))
								<div class="alert alert-danger alert-dismissible" data-dismiss="alert">			
									<div><ul>
											@foreach ( $errors->all() as $message )
												<li>{{ $message }}</li>
											@endforeach
										</ul></div>
									
								</div>
								@endif
								{{ csrf_field() }}
						<div class="form-group">
								<div class="row gutter">
									<div class="col-md-3 selectContainer">
										<label class="control-label">ville de départ *:</label>
										<input list="villes" class="form-control inputfiel" type="text" required id="villedepart" placeholder="Entrez une ville">
                                                <datalist id="villes">
                                                  <option value="CASABLANCA">
                                                  <option value="RABAT">
                                                  <option value="SALE">
                                                  <option value="AZROU">
                                                  <option value="MEKNES">
                                                  <option value="FES">
                                                </datalist>
									</div>
									<div class="col-md-3 selectContainer">
										<label class="control-label">ville d'arrivée *:</label>
										<input list="villes" class="form-control inputfiel" type="text" required id="villedepart" placeholder="Entrez une ville">
									</div>
								</div>
								<div class="row gutter">
									<div class="col-md-3 selectContainer">
										<label class="control-label">Date de départ *:</label>
										<select id="datededepart" class="form-control inputfiel">
                                                <option  value="" selected>Date de départ</option>
                                                @for ($i = 0; $i <= 29; $i++)
                                                <option value='{{ date("Y-m-d", mktime(0, 0, 0, date("m"),date("d")+$i))}}'>{{date("d/m/Y", mktime(0, 0, 0, date("m"),date("d")+$i))}}</option>
                                               @endfor
                                                </select>
									</div>
									<div class="col-md-3 selectContainer">
										<label class="control-label">Heure de départ:</label>
										<input  class="form-control inputfiel" type="text" required id="heuredepart" placeholder="08:00">
									</div>
									
								</div>
								<div class="row gutter">
									<div class="col-md-3 selectContainer">
										<label class="control-label">Nom *:</label>
										<input  class="form-control inputfiel" type="text" required id="heuredepart" placeholder="">
									</div>
									<div class="col-md-3 selectContainer">
										<label class="control-label"> Telephone *:</label>
										<input  class="form-control inputfiel" type="text" required id="heuredepart" placeholder="">									</div>
								</div>
								<div class="row gutter">
									<div class="col-md-3 selectContainer">
										<label class="control-label">Prix *:</label>
										<input  class="form-control inputfiel" type="number" required id="heuredepart" placeholder="">
									</div>						
									<div class="col-md-3">
										  <div class="input-file-container">  
										    <input class="input-file form-control inputfiel" id="my-file" type="file">
										    <label tabindex="0" for="my-file" class="input-file-trigger">Choisir une image</label>
										  </div>
										  <p class="file-return"></p>
									</div>
								</div>

									<div class="row gutter">
										<div class="col-md-12">
											<button type="submit" class="btn btn-warning">Déposer</button>
											<button type="reset" class="btn btn-warning">Annuler</button>
										</div>
									</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
