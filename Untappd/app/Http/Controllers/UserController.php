<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Friendship;
use App\Cerveja;
use App\cervejaria;
use App\CheckIn;
use App\Comentario;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' =>$request->nome,
            'email'=>$request->email,
            'password'=>bcrypt($request->senha),
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            ]);
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchFriends(Request $request)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $users = User::get();
        
        return view('home', compact('nome', 'users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //$id
    public function solicitations(){
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
         $solicitacao = Friendship::select('users.name', 'friendships.id', 'users.id as id_user')
         ->where('id_user1', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user2', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);
        return view('solicitacaoAmizade', compact('nome', 'solicitacao', 'numero'));
    }

    public function show()
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $email = User::where('id', $id_user)->first()->email;
        $cidade = User::where('id', $id_user)->first()->city;
        $estado = User::where('id', $id_user)->first()->state;
        $pais = User::where('id', $id_user)->first()->country;

          $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user1', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);
        
        $feed = CheckIn::select('cervejas.name as name_cerveja' , 'cervejarias.name as name_cervejaria', 'checkins.star', 'checkins.id')
        ->where('id_user', $id_user)
        ->join('cervejas', 'cervejas.id', '=', 'checkins.id_cerveja')
        ->join('cervejarias', 'cervejarias.id', '=', 'checkins.id_cervejaria')->get();

        $total1 = CheckIn::where('id_user', $id_user)->get();
        $total = count($total1);

        $unique1 = CheckIn::select('id_cerveja')->where('id_user', $id_user)->distinct()->get();
        $unique = count($unique1);
        $coments = Comentario::select('users.name', 'comentarios.coment', 'comentarios.id_user2', 'comentarios.id_checkin')
        ->where('id_user1', $id_user)
        ->join('users', 'users.id', '=', 'comentarios.id_user2')
        ->get();
    
        
        return view('meuPerfil', compact('nome', 'email', 'cidade', 'estado', 'pais', 'numero', 'feed', 'coments', 'total', 'unique'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $id_user = Auth::user()->id;
        $cerveja = Cerveja::where('name','like', '%'.$request->pesquisa.'%')->get();
        $cervejaria = Cervejaria::where('name','like', '%'.$request->pesquisa.'%')->get();;
        $user = User::where('name','like', '%'.$request->pesquisa.'%')->get();
         $nome = User::where('id', $id_user)->first()->name;
         $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);



        return view('pesquisa', compact('cerveja', 'cervejaria', 'user', 'nome', 'numero'));
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
