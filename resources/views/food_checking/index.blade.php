@extends('layouts.app')
@section('custom_css')
    <style>
        .py-4 {
            background-color: white;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pending Food for Checking</div>
                        <div class="card-body">
                            <table style="text-align: center;width: 100%">
                                <tr>
                                    <th>Volunteer Name</th>
                                    <th>Food Quantity</th>
                                    <th>Food Type</th>
                                    <th>Action</th>
                                </tr>
                            <tr>
                            @foreach($foods as $food)
                                @if($food->status == 'Food for Check' )
                                    <td>{{ $food->collected_by }}</td>
                                    <td> {{ $food->food_quant }}</td>
                                    <td> {{ $food->food_type }}</td>
                                    <td><input type="button" class="btn btn-link" value="Pass" onclick="sendFoodCheckingStatusPass({{ $food->id }},this)">
                                        <input type="button" class="btn btn-link" value="Fail" onclick="sendFoodCheckingStatusFail({{ $food->id }},this)">
                                    </td>
                                @endif
                            </tr>
                            @endforeach
                                {{-- <td>{{$user->name }}</td><br> --}}
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function sendFoodCheckingStatusPass(id,element)
        {
            $.ajax({
                type: "GET",
                url: '{{ route('food.foodCheckingPass') }}',
                data: {id: id},
                success: function (msg)
                {
                    alert('Food Status Updated!');
                    $(element).parent().parent().remove();
                }
            });
        }

        function sendFoodCheckingStatusFail(id,element)
        {
            $.ajax({
                type: "GET",
                url: '{{ route('food.foodCheckingFail') }}',
                data: {id: id},
                success: function (msg)
                {
                    alert('Food Status Updated!');
                    $(element).parent().parent().remove();
                }
            });
        }
    </script>
@endsection