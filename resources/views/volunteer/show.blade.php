@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Donated Food</div>
                    <table style="text-align: center; width: 100%">
                        <tr>
                            <th> Name </th>
                            <th> Address</th>
                            <th>Mobile</th>
                            <th> Food Quantity</th>
                            <th> City</th>
                            <th>State</th>
                            <th> Status </th>
                            <th>Action</th>
                        </tr>
                        <tr>
                             <td>@foreach($user->foods as $food){{ $user->name }} <br>@endforeach</td>
                             <td>@foreach($user->foods as $food){{ $food->donor_address}}<br> @endforeach</td>
                             <td>{{ $user->mobile }}</td>
                             <td>@foreach($user->foods as $food){{ $food->food_quant }} <br>@endforeach</td>
                             <td>{{ $user->city }}</td>
                             <td>{{ $user->state }}</td>
                             <td>@foreach($user->foods as $food){{ $food->status }}<br>@endforeach</td>
                             <td>@foreach($user->foods as $food)
                                 @if($food->status == 'Not Collected')
                                    <input type="button" class="btn btn-link" value="Send for Food Checking" onclick="sendForFoodCheck({{ $food->id }});">
                                 @endif<br>
                                     @endforeach
                             </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('custom_script')
    <script>
        function sendForFoodCheck(id)
        {
            $.ajax({
                type: "GET",
                url: '{{ route('food.check') }}',
                data: {id: id},
                success: function (msg)
                {
                    alert('Food Successfully Sent for Checking!');
                },
            });
        }
    </script>
@endsection