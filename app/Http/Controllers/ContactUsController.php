<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contactUs.index');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required|numeric|regex:/^[0-9]{10}$/',
            'correo' => 'required|email',
            'experiencia' => 'required',
            'puestos' => 'required',
            'ingles' => 'required',
        ]);

        // Verificar la aprobación basada en las respuestas seleccionadas
        $aprobado = ($request->experiencia == '3' || $request->experiencia == '4') &&
            ($request->ingles == '3' || $request->ingles == '4');

        // Crear y enviar el correo solo si es aprobado
        if ($aprobado) {
            $correoAprobado = new ContactUsMailable($request->all());
            Mail::to($request->correo)->send($correoAprobado);
            return redirect()->route('contactUs.index')->with('info', 'Mensaje enviado');
        } else {
            return redirect()->route('contactUs.index');
        }
    }
}
