<?php


namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){ // listar series
//    $series = [
//        'Grey\'s Anatomy',
//        'Lost',
//        'Agents of SHIELD'
//    ];

//    return view('series.index', [
//        'series' => $series
//    ]);

        // trazedo todas as informações do banco de dados
//        $series = Serie::all();

        // trazendo informações do banco de dados por ordem alfabética
        $series = Serie::query()->orderBy('nome')->get();
//        var_dump($series);
//        exit();

    return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
//        $nome = $request->get('nome');
//        $nome = $request->nome;
//        $serie = new Serie();
//        $serie->nome = $nome;
//        var_dump($serie->save());
//
//        $serie = Serie::create([
//           'nome' => $nome
//        ]);
        $nome = $request->nome;
        $serie = Serie::create($request->all());

        echo "Série com id {$serie->id} criada: {$serie->nome}";

    }
}
