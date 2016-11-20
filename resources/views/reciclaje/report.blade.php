@extends('layouts.plantilla')
@section('reportes')
<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th>Id Reporte</th>
							<th>Dirección</th>
							<th>Correo</th>
							<th>Estado</th>
																		
						</thead>						
						@foreach ($reportes as $re)
							<tr>
								<td>{{$re->idreporte}}</td>
								<td>{{$re->direccion}}</td>
								<td>{{$re->correo}}</td>
								<td>{{$re->estado}}</td>								
							</tr>
						
						@endforeach
					</table>
					
@endsection

