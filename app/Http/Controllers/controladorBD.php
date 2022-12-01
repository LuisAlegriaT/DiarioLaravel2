<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;
use DB; //para manejar Bases de datos
use Carbon\Carbon; //Para manejar fechas


class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
        $consultaRec=DB::table('tb_recuerdos')->get();
        return view('Recuerdo',compact('consultaRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Lamar a la vista del formualrio
    {
        return view('Registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorDiario $request)
    {
        DB::table('tb_recuerdos')->insert([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('Recuerdo')->with('Confirmación','xxxxxx');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $consultaId=DB::table('tb_recuerdos')->where('idRecuerdos',$id)->first();

        return view('modalEliminar',compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $consultaId=DB::table('tb_recuerdos')->where('idRecuerdos',$id)->first();

        return view('modalActualizar',compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorDiario $request, $id){
        DB::table('tb_recuerdos')->where('idRecuerdos',$id)->update([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('Recuerdo')->with('actualizado','Recuerdo Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        DB::table('tb_recuerdos')->where('idRecuerdos',$id)->delete();

        return redirect('Recuerdo')->with('eliminado','recuerdo eliminado');
    }
}
