<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafeteria;

class CafeteriaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $cafeterias = Cafeteria::where(
            'cafeteria_name',
            'LIKE',
            "%{$search}%"
        )->get();

        return response()->json($cafeterias);
    }
}
