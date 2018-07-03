<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Friendship;
use App\Badge;
use App\CheckIn;
use App\Comentario;
use Auth;
use Carbon\Carbon;

class BadgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
         $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user1', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);

        $checkin = CheckIn::where('id_user', $id_user)->get();
          $check = \DB::table('checkIns')
            ->select('id_cerveja',\DB::raw('count(*) as total'))
            ->where('id_user', $id_user)
            ->groupBy('id_cerveja')
            ->get();
        $checkB = 0;
        foreach ($check as $ch) {
            if($ch->total > 2){
                $checkB = 1;
            }
        }

       $friday = false;
       $happyHour = false;
       $checkT=0;
       $bestDrink = collect([]);
        foreach ($checkin as $c) {
        if($c->created_at->dayOfWeek == 5) {
            $friday = true;
        }
        if($c->created_at->hour > 20) {
            $happyHour = true;  
            }
        
            $bestDrink->push($c->created_at->hour);

            $checkT ++;
        }

        $whereValue = $bestDrink->max();
        $threeBeerInHour = false;
        if($bestDrink->where('hour', $whereValue)->count() >= 3) {
            $threeBeerInHour = true;
        }


        $coment = Comentario::where('id_user1', $id_user)->get();
        $coT = 0;
        foreach ($coment as $co) {
            $coT++;
        }

        return view('badges', compact('nome', 'numero', 'checkT', 'checkB', 'coT', 'friday', 'happyHour', 'threeBeerInHour'));
    }

        public function badgesAmigo($id)
    {
       $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
         $solicitacao = Friendship::select('users.name', 'friendships.id')
         ->where('id_user1', $id_user)
        ->where('solicitation', 1)
        ->join('users', 'friendships.id_user1', '=', 'users.id')
        ->get();
        $numero = count($solicitacao);

        $checkin = CheckIn::where('id_user', $id)->get();
          $check = \DB::table('checkIns')
            ->select('id_cerveja',\DB::raw('count(*) as total'))
            ->where('id_user', $id)
            ->groupBy('id_cerveja')
            ->get();
        $checkB = 0;
        foreach ($check as $ch) {
            if($ch->total > 2){
                $checkB = 1;
            }
        }

       $friday = false;
       $happyHour = false;
       $checkT=0;
       $bestDrink = collect([]);
        foreach ($checkin as $c) {
        if($c->created_at->dayOfWeek == 5) {
            $friday = true;
        }
        if($c->created_at->hour > 20) {
            $happyHour = true;  
            }
        
            $bestDrink->push($c->created_at->hour);

            $checkT ++;
        }

        $whereValue = $bestDrink->max();
        $threeBeerInHour = false;
        if($bestDrink->where('hour', $whereValue)->count() >= 3) {
            $threeBeerInHour = true;
        }


        $coment = Comentario::where('id_user1', $id)->get();
        $coT = 0;
        foreach ($coment as $co) {
            $coT++;
        }

        return view('badgesAmigo', compact('nome', 'numero', 'checkT', 'checkB', 'coT', 'friday', 'happyHour', 'threeBeerInHour'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
