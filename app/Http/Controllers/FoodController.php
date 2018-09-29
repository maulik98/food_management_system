<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('food.index', compact('users'));
    }

    public function show(Food $food)
    {
        return view('food.show',compact('food'));
    }

    public function create()
    {
        return view('food.create');exit;
    }

    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    public function update(Request $request, Food $food)
    {
        $data = $request->all();
        $food->update($data);
        return redirect('food');

    }

    public function store(Request $request,User $user,Food $food)
    {
        request()->validate([
            'donor_address' => 'required',
            'food_quant' => 'required|integer',
        ]);

        $food = new Food();
        $food->donor_address= request('donor_address');
        $food->food_quant = request('food_quant');
        $food->donated_by = Auth::id($user->id);
        $food->status = "Not Collected";
        $food->food_type = request('food_type');
        $food->save();
        /*
        $data = $request->all();

        Post::create($data);*/

        return redirect('home');


        /* $users = User::all();
         */
    }

    public function destroy($id)
    {

        Post::where('id',$id)->delete();
        Image::where('id',$id)->delete();

        /*
    $post = Post::findOrFail($id);

    $post->delete();
        Image::where('id',$id)->delete();

    return redirect('post');*/
        return redirect('post');
    }

    public function delete($id)
    {
        Post::where('id',$id)->delete();
        Image::where('id',$id)->delete();
        return back();
    }

    public function foodChecker()
    {
        $foods = Food::all();
        $user = User::find(Auth::user()->user_type == 'volunteer');
        return view('food_checking.index',compact('foods','user'));
    }

    public function foodCheckingPass()
    {
        $id = Input::get('id');
        $food = Food::find($id);
        $food->status = 'Pass';
        $food->save();
    }

    public function foodCheckingFail()
    {
        $id = Input::get('id');
        $food = Food::find($id);
        $food->status = 'Fail';
        $food->save();
    }
}
