@extends('layouts.app')
@section('custom_css')
<style>
    .py-4{
        background-color: white;
    }
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div><br>
                    <div class="card-body">
                    {{ Form::model($user,['route' => ['user.update',$user->id],'method' => 'patch']) }}

                    <div class="form-group row">
                        {{ Form::label('name','Name',['class'=> 'col-sm-4 text-md-right col-form-label']) }}
                        <div class="col-md-6">
                            {{ Form::text('name',null,['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('email','Email Address',['class'=>'col-sm-4 text-md-right col-form-label']) }}
                        <div class="col-md-6">
                            {{ Form::email('email',null,['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('mobile','Mobile',['class' => 'text-md-right col-sm-4 col-form-label']) }}
                        <div class="col-md-6">
                            {{ Form::text('mobile',null,['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('city' , 'City',['class'=>'text-md-right col-sm-4 col-form-label']) }}
                        <div class="col-md-6">
                            {{ Form::text('city',null,['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('state' ,'State',['class'=>'text-md-right col-sm-4 col-form-label']) }}
                        <div class="col-md-6">
                            {{ Form::text('state',null,['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-4 col-md-6">
                            {{ Form::submit('Submit',['class' => 'btn btn-primary']) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
