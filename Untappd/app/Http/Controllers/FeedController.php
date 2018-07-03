<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CheckIn;
use Auth; 
use App\User;
use App\Friendship;

class FeedController extends Controller
{

    public function show()
    {
        $feed = CheckIn::select('cervejas.name as name_cerveja', 'cervejarias.name as name_cervejaria', 'users.name as name', 'users.id as id_user', 'cervejas.id as id_cerveja', 'cervejarias.id as id_cervejaria', 'checkins.star as stars')
        ->OrderBy('checkins.id', 'DESC')
        ->join('cervejas', 'cervejas.id', '=', 'checkins.id_cerveja')
        ->join('cervejarias', 'cervejarias.id', '=', 'checkins.id_cervejaria')
        ->join('users', 'users.id', '=', 'checkins.id_user')
        ->limit(10)
        ->get();

        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
         $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user1', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user2', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);

        return view('home', compact('nome', 'numero', 'feed'));
    }

}
