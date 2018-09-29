<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use function Sodium\compare;

class VolunteerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $foods = Food::all();
        $users = User::all();

        return view('volunteer.index', compact('foods','user'));
    }

    public function show($id)
    {
        $user = User::find($id);
        //print_r($user->foods);exit;
        //print_r($user);exit;
        return view('volunteer.show', compact('user'));
    }

    public function foodCheck()
    {
        $id = Input::get('id');

        $food = Food::find($id);
        $food->status = 'Food for Check';
        $food->collected_by = Auth::user()->id;
        $food->save();
    }
}