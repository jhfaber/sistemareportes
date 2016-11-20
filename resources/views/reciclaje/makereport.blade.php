@extends('layouts.plantilla')
@section('contenido')
<div class="col-sm-12 col-md-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12"><h2>Mapa</h2></div>
                                    <div class="clearfix"></div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div id="map-canvas"></div>
                                        <p>Dirección</p>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                    	<!--Aqui iba el form -->

                                        

                                        {!!Form::open(array('url'=>'/','method'=>'POST','autocomplete'=>'off'))!!}
                                        {{Form::token()}}
                                        
                                                <div class= "form-group">
                                                    <select name="id_ciudad" class="form-control">
                                                        @foreach ($ciudades as $ci)
                                                            
                    <option value="{{$ci->idciudad}}">{{$ci->ciudad}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>







                                                <div class="form-group">
                                                    <!--<label for="contact_name">Name:</label>-->
                                                    <input type="text" name="direccion" id="contact_name" class="form-control" placeholder="Dirección del insidente" />
                                                </div>
                                                <div class="form-group">
                                                    <!--<label for="contact_email">Email:</label>-->
                                                    <input type="text" name="correo" id="contact_email" class="form-control" placeholder="Correo personal para enviar radicado" />
                                                </div>
                                                <div class="form-group">
                                                    <!--<label for="contact_message">Message:</label>-->
                                                    <textarea name="descripcion" id="contact_message" class="form-control" rows="7" placeholder="Descripción"></textarea>
                                                </div>
                                                <button name="enviar" id="enviar" type="submit" class="btn btn-primary">Enviar</button>

                                       
                                        {!!Form::close()!!}



                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
</div>
@endsection