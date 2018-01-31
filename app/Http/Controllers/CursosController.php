<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index()
    {
      $cursos = ['BDD', 'TDD', 'XP', 'Scrum'];
      return view('cursos', compact('cursos'));
    }
}
