<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\USer;
use App\Cerveja;
use App\Friendship;
use App\cervejaria;
use Auth;
use App\CheckIn;

class CervejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPerfil($id)
    {
        $id_user = Auth::user()->id;
        $cerveja = Cerveja::where('id', $id)->get();

        $nome = User::where('id', $id_user)->first()->name;
        $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);

        $mediaD = CheckIn::select('star')->where('id_cerveja', $id)->get();
        $valor = 0;
        $media =0;
        foreach ($mediaD as $m) {
            $valor+=$m->star;
        }
        if($valor > 0){
            $media = round($valor/count($mediaD), 2);
        }
        

        $checkins = CheckIn::select('cervejas.name as name_cerveja' , 'cervejarias.name as name_cervejaria', 'checkins.star', 'checkins.id', 'users.name as name_user', 'users.id as id_user')
        ->where('id_cerveja', $id)
        ->join('cervejas', 'cervejas.id', '=', 'checkins.id_cerveja')
        ->join('cervejarias', 'cervejarias.id', '=', 'checkins.id_cervejaria')
        ->join('users', 'users.id', '=', 'checkins.id_user')->get();

        return view('perfilCerva', compact('nome', 'numero', 'cerveja', 'media', 'checkins'));
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
        Cerveja::create([

            'name'   => $request->cerveja,
            'teor'  => $request->alcool,
            'type'    => $request->tipo,
            
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
        $cervejarias = Cervejaria::get();
        return view('cadastrarCerva', compact('nome', 'numero', 'cervejarias'));
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
