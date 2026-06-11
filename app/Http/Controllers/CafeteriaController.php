<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafeteria;

class CafeteriaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $cafeterias = Cafeteria::when($search, function ($query) use ($search) {
            $query->where('cafeteria_name', 'LIKE', "%{$search}%")
                  ->orWhere('location', 'LIKE', "%{$search}%")
                  ->orWhere('status', 'LIKE', "%{$search}%");
        })->get();

        return view('cafeterias', compact('cafeterias', 'search'));
    }
}