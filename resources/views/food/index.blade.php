@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Food Details</div><br>

                    <table style=" width: 100%; text-align: center ">
                        <tr>
                            <th>Donor's Name</th>
                            <th>Donor's Email Address</th>
                            <th> Action</th>
                        </tr>
                        <tr>
                        @foreach($users as $user)
                            <td>{{ $user->name }}<br></td>
                            <td> {{ $user->email }}</td>
                            <td><a href="{{ route('user.show',$user->id) }}">Show</a></td>
                        </tr>
                    @endforeach
                    </table><br>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
