@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Donated Food</div>
                    <table style="text-align: center; width: 100%">
                        <tr>
                            <th> Name </th>
                            <th> Address</th>
                            <th>Mobile</th>
                            <th> Food Quantity</th>
                            <th>Food Type</th>
                            <th> City</th>
                            <th>State</th>
                            <th> Status </th>
                        </tr>

                                <td>{{ $user->name }}</td>
                                <td>@foreach($user->foods as $food) {{ $food->donor_address }}<br>@endforeach</td>
                                <td>{{ $user->mobile }}</td>
                                <td>@foreach($user->foods as $food) {{ $food->food_quant}} <br> @endforeach</td>
                                <td> @foreach($user->foods as $food) {{ $food->food_type }}<br>@endforeach</td>
                                <td> {{ $user->city }}</td>
                                <td> {{ $user->state }}</td>
                                <td>@foreach($user->foods as $food) {{ $food->status }}<br>@endforeach</td>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
