<?php


namespace App\Http\Controllers;


use App\Http\Requests\SeriesFormRequest;
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
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');
//        var_dump($series);
//        exit();

    return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
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
//        $nome = $request->nome;
//        $request->validate([
//            'nome' => 'required|min:3'
//        ]);
        $serie = Serie::create($request->all());
        $request->session()
//            ->put(
            ->flash(
                'mensagem',
                "Série com id {$serie->id} criada: {$serie->nome}"
            );

//        echo "Série com id {$serie->id} criada: {$serie->nome}";
//        return redirect('/series');
        return redirect()->route('listar_series');

    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Série removida com sucesso!"
            );
//        return redirect('/series');
        return redirect()->route('listar_series');
    }
}
