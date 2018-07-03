<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Friendship;
use App\Cerveja;
use App\Cervejaria;
use App\CheckIn;
use App\CervejaCervejaria;
use Auth;

class CheckInController extends Controller
{

    public function store(Request $request){
        $id_user = Auth::user()->id;
       CheckIn::create([
            'id_cerveja'   => $request->cerveja,
            'id_cervejaria'  => $request->cervejaria,
            'id_user'    => $id_user,
            'star' => $request->rating,
            ]);
       $cer = CervejaCervejaria::where('id_cerveja', $request->cerveja)->where('id_cervejaria', $request->cerveja)->get();

       $flag = 0;
       foreach ($cer as $ce) {
           $flag++;

       }
       if($flag == 0){
            CervejaCervejaria::create([
            'id_cerveja' => $request->cerveja,
            'id_cervejaria' =>$request->cervejaria,
        ]);
       }
       

          return redirect('inicio');
    }

    public function show()
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', 1)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);
        $cervejas = Cerveja::get();
        $cervejarias = Cervejaria::get();
        return view('buscarCerva', compact('nome', 'numero', 'cervejas', 'cervejarias'));
    }

    public function fase2(Request $request){
        $id_user = Auth::user()->id;
        $cerveja = $request->get('cerveja');
        $cervejarias_id = $request->get('cervejaria');
        $nome = User::where('id', $id_user)->first()->name;
        $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);
        $cervejas = Cerveja::get();
        $cervejarias = Cervejaria::get();
        $nome_c = Cerveja::where('id', $cerveja)->first()->name;
        return view('avaliarCerva', compact('cerveja', 'cervejarias', 'nome', 'numero', 'nome_c', 'cervejarias_id'));
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
