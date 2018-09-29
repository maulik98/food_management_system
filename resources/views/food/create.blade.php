@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Donate Food</div>

                <form action="{{ route('food.store') }}" method="post"><br>
                    @csrf()
                    <div class="form-group row">
                        <label for="donor_address" class="col-sm-4 col-form-label text-md-right">Address: </label>
                        <div class="col-md-6">
                            <textarea class="form-control" placeholder="Enter Destination Address" rows="2" name="donor_address"></textarea>
                            @if($errors->has('donor_address'))<strong>{{ $errors->first('donor_address') }}</strong>@endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="food_quant" class="col-sm-4 col-form-label text-md-right">Food Quantity: </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Enter Food Quantity" rows="2" name="food_quant">
                        </div>
                        <select class="col-md-2 form-check form-control" name="food_type" id="">
                            <option value="grams">Grams:</option>
                            <option value="kgs">KGs:</option>
                            <option value="liters">Liters:</option>
                        </select>
                        @if($errors->has('donor_address'))<strong>{{ $errors->first('donor_address') }}</strong>@endif
                    </div>
                    <div class="form-group row">
                        <div class=" col-md offset-4">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
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
