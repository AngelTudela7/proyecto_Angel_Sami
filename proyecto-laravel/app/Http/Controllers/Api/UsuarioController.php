<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index():JsonResponse{

    $usuarios = Usuario::all();
    return response()->json($usuarios);


    }
}
