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
                                <th> City</th>
                                <th>State</th>
                                <th> Status </th>
                            </tr>
                            <tr>
                                @foreach($user->foods as $food)
                                    {{ $user->name }}
                                @endforeach

                                <td> {{ $food->donor_address }}</td>
                                <td> {{--{{ $food->donor_address }}--}}</td>
                                <td> {{ $food->name }}</td>
                                <td> {{ $food->food_quant}}</td>
                                <td></td>
                                <td></td>
                                <td> {{ $food->status }}</td>
                            </tr>
                        </table>




             {{--       {{ Form::open(['route'=>['food.store'] , 'method'=>'post'])}}<br>
                    <div class="form-group row">
                        {{ Form::label('donor_address','Address:',['class' => 'col-sm-4 col-form-label text-md-right']) }}
                        <div class="col-md-6">
                            {{ Form::textarea('donor_address',null,['class'=>'form-control','placeholder'=>'Enter Destination Address','rows'=>'2']) }}<br>
                        </div></div>

                    <div class="form-group row">
                        {{ Form::label('food_quant','Food Quantity',['class'=>'col-sm-4 col-form-label text-md-right']) }}
                        <div class="col-md-6">
                            {{ Form::text('food_quant',null,['class'=>'form-control','placeholder'=>'Enter Food Quantity']) }} </div>
                    </div>

                    <div class="form-group row">
                        <div class=" col-md-9">
                            {{ Form::submit('Submit',['class'=>'btn btn-link form-control']) }}
                        </div>
                    </div>
                {{ Form::close()}}--}}
                <!-- <form method="post">
						<label>Address:</label><br>
						<input type="text" name="address" required="required" placeholder="Enter Destination Address"><br>

						<label>Food Quantity (Approx):</label><br>
						<input type="text" name="foodquant" placeholder="Food Quantity in KG (Approx)"><br>

						<input type="submit" name="donatefood" value="Donate">
					</form> -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
