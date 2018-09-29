@extends('layouts.app')
@section('custom_css')
    <style>
        .py-4 {
            background-color: white;
        }
/*

        table {
            width:100%;
            border:1px solid rgba(0,0,0,0.2);
        }

        th {
            font-family: Roboto-Bold;
            padding: 1em;
            padding-left: 1.5em;
            border-right: 1px solid rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(0,0,0,0.1);
            line-height: 1.4;
            font-size: 14px;
            color: #333;
        }

        th:nth-child(3),td:nth-child(3) {
            border-right: 1px solid rgba(0,0,0,0.2);
        }

        td:nth-child(3) {
            border-bottom: 1px solid rgba(0,0,0,0.2);
        }

        td{
            font-family: Roboto-Medium;
            padding: 0.8em;
            padding-left: 1.5em;
            border-right: 1px solid rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(0,0,0,0.1);
            line-height: 1.4;
        }
*/

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Food Details</div><br>

                    <table style=" width: 100%; text-align: center ">
                        <tr>
                            <th>Donor's Name</th>
                            <th>Donor's Address</th>
                            <th> Action</th>
                        </tr>
                        @foreach($foods as $food)
                            @if($food->status == 'Not Collected')
                            <tr>{{--{{ $food->user->name }}--}}
                                <td> {{ \App\User::find($food->donated_by)->name }} </td>
                                <td> {{ $food->donor_address }}</td>
                                <td>
                                    <a href="{{ route('volunteer.show',$food->donated_by) }}">Show</a>
                                    <input type="button" class="btn btn-link" value="Send Food for Checking" onclick="sendForFoodCheck({{ $food->id }},this);">
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </table><br>
                </div>
            </div>
        </div>
    </div>
      <script>
            function sendForFoodCheck(id,element)
            {
                $.ajax({
                    type: "GET",
                    url: '{{ route('food.check') }}',
                    data: {id: id},
                    success: function (msg)
                    {
                        alert('Food Successfully Sent for Checking!');
                        $(element).parent().parent().remove();
                    }
                });
            }
        </script>

@endsection
{{--

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">

                <table>
                    <tr>
                        <th class="text-md-left">Donor's Name</th>
                        <th>Donor's Address</th>
                        <th> Action</th>
                    </tr>
                    @foreach($foods as $food)
                        @if($food->status == 'Not Collected')
                            <tr> --}}
{{--{{ $food->user->name }}--}}{{--

                                <td class="text-md-left"> {{ \App\User::find($food->donated_by)->name }} </td>
                                <td> {{ $food->donor_address }}</td>
                                <td>
                                    <a href="{{ route('volunteer.show',$food->donated_by) }}">Show</a>
                                    <input type="button" class="btn btn-link" value="Send Food for Checking" onclick="sendForFoodCheck({{ $food->id }},this);">
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
        <script>
            function sendForFoodCheck(id,element)
            {
                $.ajax({
                    type: "GET",
                    url: '{{ route('food.check') }}',
                    data: {id: id},
                    success: function (msg)
                    {
                        alert('Food Successfully Sent for Checking!');
                        $(element).parent().parent().remove();
                    }
                });
            }
        </script>
@endsection--}}
