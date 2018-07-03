<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\USer;
use App\Cerveja;
use App\Friendship;
use App\Cervejaria;
use App\CervejaCervejaria;
use Auth;
use App\CheckIn;

class CervejariaController extends Controller
{
   
     public function showPerfil($id)
    {
        $id_user = Auth::user()->id;
        $cervejaria = Cervejaria::where('id', $id)->get();
        $cervejas = CervejaCervejaria::select('Cervejas.id', 'Cervejas.name')
        ->where('id_cervejaria', $id)
        ->join('cervejas', 'CervejaCervejarias.id_cerveja', '=', 'Cervejas.id')
        ->get();
        $nome = User::where('id', $id_user)->first()->name;
        $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);

        $mediaD = CheckIn::select('star')->where('id_cervejaria', $id)->get();
        $valor = 0;
        $media = 0;
        foreach ($mediaD as $m) {
            $valor+=$m->star;
        }
        if($valor > 0){
            $media = round($valor/count($mediaD), 2);
        }
        

        return view('perfilCervejaria', compact('nome', 'numero', 'cervejaria', 'cervejas', 'media'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cervejaria::create([

            'name'   => $request->nome,
            'type'  => $request->tipo,
            'city'    => $request->cidade,
            'state' => $request->estado,
            'country' => $request->pais,
            ]);

          return redirect('check');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);
        return view('cadastrarCervejaria', compact('nome', 'numero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
