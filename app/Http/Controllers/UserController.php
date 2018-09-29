<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
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

    public function show(User $user)
    {
        return view('user.show',compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $user->update($data);
        return redirect('user');
    }

    public function store(Request $request)
    {

        /*request()->validate([
            'name' => 'required',
            'email' => 'required ',
            'mobile' => 'required | string | regex:/^[0-9]/',
            'user_type' => 'required',
            'country' =>'required ',
            'state' => 'required',
            'password' => 'required | confirmed',
        ]);*/

        $requestData=$request->all();


        $user = new User();
        $user->name= $requestData['name'];
        $user->email = $requestData['email'];
        $user->mobile= $requestData['mobile'];
        $user->user_type = $requestData['user_type'];
        $user->country = $requestData['country'];
        $user->state = $requestData['state'];
        $user->city = $requestData['city'];
        $user->password= Hash::make($requestData['password']);
        $user->save();

        /*
        $data = $request->all();

        Post::create($data);*/
        return redirect('user');

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

    public function showProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('user.profile',compact('user'));
    }

}
