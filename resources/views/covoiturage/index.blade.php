@extends('layouts.master')
@section('content')
<div class="panel panel-inverse" data-sortable-id="form-stuff-2">          	    
                <div class="panel-body form-horizontal form-bordered">
                    <div class="row gutter">
                        <form accept-charset="utf-8" id="form" name="form" method="post" action="{{ url('action/modifydemandebyreferent/')}}"  enctype="multipart/form-data">
				    				{{ csrf_field() }}
				    		<div class="form-group">
				    				<div class="row gutter">
				    		            <div class="col-md-2">
                                            <div class="input-group">
                                                <input list="villes" class="form-control inputfiel" type="text" id="villedepart" placeholder="Ville de départ">
                                                <datalist id="villes">
                                                  <option value="CASABLANCA">
                                                  <option value="RABAT">
                                                  <option value="SALE">
                                                  <option value="AZROU">
                                                  <option value="MEKNES">
                                                  <option value="FES">
                                                </datalist>
                                            </div>
                                        </div>
				    		            <div class="col-md-2">
                                            <div class="input-group">
                                                <input list="villes" class="form-control inputfiel" type="text" id="villearrivee" placeholder="Ville d'arrivée">
                                            </div>
                                        </div>    
                                        <div class="col-md-2" >
                                            <div class="input-group">
                                                <select id="datededepart" class="form-control inputfiel">
                                                <option  value="" selected>Date de départ</option>
                                                @for ($i = 0; $i <= 29; $i++)
                                                <option value=' {{ date("Y-m-d", mktime(0, 0, 0, date("m"),date("d")+$i)) }}'>{{ date("d/m/Y", mktime(0, 0, 0, date("m"),date("d")+$i)) }}</option>

                                                @endfor
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <select class="form-control inputfiel" id="typeannonce" placeholder="Type">
                                                  <option value="DEMANDE">DEMANDE</option>
                                                  <option value="OFFRE">OFFRE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a href="{{ url('covoiturage/create') }}" class="col-md-2 col-md-offset-2" >
                                            <button type="button" class="btn btn-success"><i class="fa fa-automobile"></i> Déposer Une annonce</button>
                                        </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
</div>
<div class="row gutter" style="margin-top:80px">
    <div class="col-md-8 col-md-offset-2">
        <div class="table-responsive">
			<table accept-charset="UTF-8" id="scrollTabledemandes" class="display table table-bordered no-margin" width="100%"  style="width: 100%;">
                            
                        @foreach($listdesdemandes as $demande)
                            <tr>
								<td nowrap>{{$demande->nom_annonceur}}</td>
                                <td nowrap>{{$demande->type_annonce}}</td>
                                <td nowrap>{{$demande->type_annonce=='DEMANDE'?'D':'O'}}</td>
                            </tr>
                            <tr>
								<td nowrap rowspan="3"></td>
                                <td nowrap>{{$demande->ville_depart}}</td>
                                <td nowrap>{{$demande->ville_arrivee}}</td>
                            </tr>
                            <tr>
                                <td nowrap>{{$demande->date_depart}}</td>
                                <td nowrap>{{$demande->heure_depart}}</td>
                            </tr>
                            <tr style="border-bottom:2px solid black;">
                                <td nowrap>0620667788</td>
                                <td nowrap>Prix : 80 DH</td>
                            </tr>
                        @endforeach
            </table>
        </div>
    </div>


</div>
@endsection
@section('script')
<script src="{{asset('assets/js/customjs/covindex.js')}}"></script>
@endsection 