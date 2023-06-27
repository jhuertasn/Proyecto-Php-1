<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use PDF;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function inicio(){
        //ACTUALIZACIÓN PARA LARAVEL 8
        //autenticacion
        //return auth()->user();
        $usuarioEmail = auth()->user()->email;
        //$notas = Nota::paginate(3);
        //return view('welcome',compact('notas'));
        $notas = Nota::where('usuario',$usuarioEmail)->paginate(3);
        return view('welcome',compact('notas'));
    }

    public function detalle($id){
        $nota = Nota::findOrFail($id);
        return view('notas.detalle',compact('nota'));
    }

    public function crear(Request $request){
       // return $request->all();
       $notaNueva = new Nota;
       $notaNueva->nombre = $request->nombre;
       $notaNueva->descripcion = $request->descripcion;
        //con usuario
       $notaNueva->usuario=auth()->user()->email;
       $notaNueva->save();

       return back()->with('mensaje','Nota agregada');
    }

    public function editar($id){
        $nota = Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }

    public function update( Request $request, $id){
        $notaUpdate = Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;

        $notaUpdate->save();

        return back()->with('mensaje','Nota actualizada');
    }

    public function eliminar($id){
        $notaEliminar = Nota::findOrFail($id);
        $notaEliminar->delete();

        return back()->with('mensaje', 'Nota Eliminada');
    }

    public function fotos(){
        return view('fotos');
    }

    public function noticias($nombre=null){
        $news = ['Noticia1','Noticia2','Noticia3'];

        return view('blog', compact('news','nombre'));
    }

    public function about($nombre = null){
        $equipo = ['Ignacio','Juanito','Pedrito'];
        //return view('about', ['equipo'=>$equipo]);
        return view('about', compact('equipo','nombre'));
    }

    public function pdf(){
        // return view('notas.pdf',[
        //     'posts' => Nota::latest()->paginate()
        // ]);
        $user = auth()->user()->email;
        //$notas =Nota::paginate();
        $notas =Nota::where('usuario',$user)->paginate(3);
        //llamando a la vista en formato pdf
        $pdf = PDF::loadView('notas.pdf',['notas'=>$notas]);
        //$pdf->loadHTML('<h1>Test</h1>');
        $pdf->setPaper('letter');
        return $pdf->stream();
    }
}
