<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Friendship;
use App\User;
use App\CheckIn;
use App\Comentario;
use Auth;

class FriendshipController extends Controller
{
    
    public function makeSolicitation($id){
        $id_user = Auth::user()->id;
        Friendship::create([
            'id_user1'   => $id,
            'id_user2'  => $id_user,
            'solicitation'    => 1,

            ]);

          return redirect('inicio');
    }

    public function accept($id){
        $solicitacao = Friendship::findOrFail($id);

        $solicitacao->update([
            'solicitation'     => 0,
            ]);
       return redirect('solicitations');
    }

    public function decline($id){
        $solicitacao = Friendship::findOrFail($id);

        $solicitacao->delete();

       return redirect('solicitations');
    }

    public function vizualizar($id){
      $id_user = Auth::user()->id;
        $user = User::where('id', $id)->get();
        $nome = User::where('id', $id_user)->first()->name;
        $idU = User::where('id', $id_user)->first()->id;
         $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);
         $solicitation = Friendship::select('solicitation', 'id')
        ->where('id_user1', $id_user)
        ->Where('id_user2', $id)
        ->orWhere('id_user1', $id)
        ->where('id_user2', $id_user)
        ->get();

        $feed = CheckIn::select('cervejas.name as name_cerveja' , 'cervejarias.name as name_cervejaria', 'checkins.star', 'checkins.id')
        ->where('id_user', $id)
        ->join('cervejas', 'cervejas.id', '=', 'checkins.id_cerveja')
        ->join('cervejarias', 'cervejarias.id', '=', 'checkins.id_cervejaria')->get();

        $total1 = CheckIn::where('id_user', $id)->get();
        $total = count($total1);

        $unique1 = CheckIn::select('id_cerveja')->where('id_user', $id)->distinct()->get();
        $unique = count($unique1);

        $coments = Comentario::select('users.name', 'comentarios.coment', 'comentarios.id_user2', 'comentarios.id_checkin')
        ->where('id_user1', $id)
        ->join('users', 'users.id', '=', 'comentarios.id_user2')
        ->get();

        $flag=0;
            foreach ($solicitation as $S ) {
               $flag=1;
            }

        return view('perfilUsuario', compact('nome','user', 'id', 'numero', 'solicitation', 'flag', 'idU', 'feed', 'coments', 'total', 'unique'));
    }

     public function vizualizarP($id){
        $id_user = Auth::user()->id;
        $user = User::where('id', $id)->get();
        $nome = User::where('id', $id_user)->first()->name;
        $idU = User::where('id', $id_user)->first()->id;
         $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);
         $solicitation = Friendship::select('solicitation', 'id')
        ->where('id_user1', $id_user)
        ->Where('id_user2', $id)
        ->orWhere('id_user1', $id)
        ->where('id_user2', $id_user)
        ->get();

        $feed = CheckIn::select('cervejas.name as name_cerveja' , 'cervejarias.name as name_cervejaria', 'checkins.star', 'checkins.id')
        ->where('id_user', $id)
        ->join('cervejas', 'cervejas.id', '=', 'checkins.id_cerveja')
        ->join('cervejarias', 'cervejarias.id', '=', 'checkins.id_cervejaria')->get();

        $total1 = CheckIn::where('id_user', $id)->get();
        $total = count($total1);

        $unique1 = CheckIn::select('id_cerveja')->where('id_user', $id)->distinct()->get();
        $unique = count($unique1);

        $coments = Comentario::select('users.name', 'comentarios.coment', 'comentarios.id_user2', 'comentarios.id_checkin')
        ->where('id_user1', $id)
        ->join('users', 'users.id', '=', 'comentarios.id_user2')
        ->get();

        $flag=0;
            foreach ($solicitation as $S ) {
               $flag=1;
            }

        return view('perfilUsuario', compact('nome','user', 'id', 'numero', 'solicitation', 'flag', 'idU', 'feed', 'coments', 'total', 'unique'));
    }

    public function showFriends(){
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
         $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user2', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);
        $friends = Friendship::select('id_user1', 'id_user2',  'solicitation')
        ->where('id_user1', '=', $id_user)
        ->orWhere('id_user2', '=', $id_user)
        ->get();
        
         $nome_f = [];
         $id_f = [];
         $i=0;
        foreach ($friends as $f) {
               if($f->id_user1 != $id_user && $f->solicitation == 0){
            $nome_f[$i] = User::where('id', $f->id_user1)->first()->name;
            $id_f[$i] = $f->id_user1;
        }else if($f->id_user1 == $id_user && $f->solicitation == 0){
            $nome_f[$i] = User::where('id', $f->id_user2)->first()->name;
            $id_f[$i] = $f->id_user2;

        }   
        $i++;
        }


        return view('members', compact('nome', 'numero', 'nome_f', 'id_f'));
    }

}
