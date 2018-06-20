<?php

namespace App\Http\Controllers;

use App\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ModifController extends Controller
{
    public function modif_pool()
    {

        $user_pool = Auth::user()->pool_id;
        $pool = Pool::where('id', $user_pool)->get()->first();

		$pool->titre = request('titre');
		$pool->destination = request('destination');
		$pool->description = request('description');
		$pool->cost_travel = request('cost_travel');
		$pool->start_date = request('start_date');
		$pool->vip = request('vip');

		$pool->save();

		return redirect('/pool');
    }

    public function add_pay()
    {

        $user_pool = Auth::user()->pool_id;
		$pool = Pool::where('id', $user_pool)->get()->first();

        $pay = request('pay');

        $pool->current_money = $pool->current_money + $pay;
        $pool->participants = $pool->participants + 1;

        $pool->save();

    	return redirect('/pool');
    }

    public function modif_profile()
    {

		$user = Auth::user();

		$user->nom = request('nom');
		$user->prenom = request('prenom');
		$user->date_de_naissance = request('birthday');
		$user->telephone = request('telephone');
		$user->email = request('email');
		$user->password = Hash::make(request('password'));	

		$user->save();

		return redirect('/pool');

    }
}
