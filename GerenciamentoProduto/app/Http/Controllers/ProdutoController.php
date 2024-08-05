<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('produtos', compact('produtos'));
    }

    public function create() {
        return view('produtos.create');
    }
}
