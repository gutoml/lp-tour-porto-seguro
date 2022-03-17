<?php

namespace App\Http\Controllers;

use App\Models\ImagePasseio;
use App\Models\Passeio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index()
    {
        $passeios = Passeio::all();
        $fotosPasseios = ImagePasseio::all();

        return view('lp.index', compact('passeios', 'fotosPasseios'));
    }

    public function passeio($local)
    {
        $local = Str::replace('-', ' ', $local);
        $local = Str::upper($local);

        $passeio = Passeio::where('local', $local)->first();
        $passeios = Passeio::where('local', '!=', $local)->get();

        if (!$passeio) {
            return redirect()->route('index');
        }

        return view('lp.passeio', compact('passeio', 'passeios'));
    }
}
