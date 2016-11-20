<?php

namespace sistemareportes\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Http\Requests as AnotherRequests;
use Illuminate\Support\Facades\Redirect;
use sistemareportes\Http\Requests\ReporteFormRequest; /* Para usar la clase que cree de validacion */ 
use DB;
use Illuminate\Support\Facades\View; // Para las fnciones con view
use sistemareportes\Reporte;
use Illuminate\Eloquent\Collection;

class ReporteController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	
            $ciudades=DB::table('ciudades')->get();
            $reportes=DB::table('reporte')            
            ->orderBy('idreporte','desc')
            ->get();
            //$reportes=DB::select('select idreporte, direccion, correo, descripcion, estado from reporte');
            
                   
            //return view('reciclaje.report',["reportes"=>$reportes]);
            //return View::make('reciclaje.home', ["ciudades"=>$ciudades])->with('reciclaje.reportes');
            //return View::make('reciclaje.home', ["ciudades"=>$ciudades])->nest('reciclaje.reportes', ["ciudades"=>$ciudades]);
            return View::make('reciclaje.makereport', ["ciudades"=>$ciudades])->nest('reciclaje','reciclaje.report', ["reportes"=>$reportes]);
            
        
    }
    public function create()
    {
    	
    }
    public function store (ReporteFormRequest $request)
    {
        $reporte=new Reporte;        
        $reporte->id_ciudad=$request->get('id_ciudad'); //Son los atributos, en este caso el atributo nombre
        $reporte->direccion=$request->get('direccion');
        $reporte->correo=$request->get('correo');
        $reporte->descripcion=$request->get('descripcion');
        $reporte->estado='Activo';
        $reporte->save();
        return Redirect::to('/');
        
        

    }
    public function show($id) 
    {
        
    }
    public function edit($id)
    {
    	
    }

    
    public function update(ArticuloFormRequest $request,$id)
    {
        
    }
    public function destroy($id)
    {
        
        
    }

}
