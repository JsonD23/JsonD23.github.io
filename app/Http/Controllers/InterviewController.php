<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function store(Request $request)
    {
        // Validación de la fecha para evitar días anteriores
        $validated = $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'description' => 'required|string|max:255',
        ]);

        // Guardar la entrevista en la sesión
        $interviews = session('interviews', []);
        $interviews[] = [
            'date' => $validated['date'],
            'description' => $validated['description'],
            'id' => count($interviews) + 1 // Generar un ID simple
        ];
        session(['interviews' => $interviews]);

        return redirect()->route('calendar.index')->with('success', 'Entrevista agregada exitosamente.');
    }

    public function destroy($id)
    {
        $interviews = session('interviews', []);
        $interviews = array_filter($interviews, fn($interview) => $interview['id'] != $id);
        session(['interviews' => array_values($interviews)]);

        return redirect()->route('calendar.index')->with('success', 'Entrevista eliminada exitosamente.');
    }
}
