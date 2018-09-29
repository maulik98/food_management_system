@extends('layouts.app')
@section('custom_css')
<style type="text/css">
	.py-4{
		background-color: white;
	}

	.box{
		width: 54%;
		margin: 1em 25%;
		border:1px solid rgba(0,0,0,0.1);
		box-shadow: 5px 5px 5px rgba(0,0,0,0.1);
		font-size: 18px;
		padding:  0.5em 0.5em;
		padding-top: 2em;
		font-weight: bold;
		word-spacing: 5px;
		font-family: Prime;
		color:black;
	}
	p{
		padding: 0.5em 0.5em;
		text-transform: none;
		font-weight: 200;
		margin-left: 25%;

	}
	a {
		text-decoration: none;
		color: #212121;
		font-weight: lighter;
	}
	hr{
		width:25%;
		color: rgba(0,0,0,0.1);
	}
	label{
		font-family: Prime;
		padding: 0.5em 0.5em;
		margin: 0.5em 0.8em;
		font-weight: 500;
	}
	input{
		width: 59%;
		font-family: Prime;
		font-size: 15px;
		padding: 0.5em 0.5em;
		margin: 1em 1em;
		border:none;
		border-bottom: 1px solid rgba(0,0,0,0.1);
	}
	footer {
		color: black;
		font-family: Prime;
		text-align: center;
		bottom: 5px;
		font-size: 16px;
	}

    button {
        margin-bottom: 2em;
    }

</style>
@endsection
@section('content')
<div class="col-md-12">
        <div class="box ">
		<center>Contact Us</center>
		<hr>
            <p class="col-md-8 col-form-label text-md-left">Contact No.: <a style="text-decoration: none" href="tel:123456789">123456789</a></p>
            <p class="col-form-label col-md-8 text-md-left">Email:<a style="text-decoration: none" href="mailto:@gmail.com "> food4society@gmail.com</a></p><br><br>
		<center>Feedback</center>
		<hr>
		<form>
			<label class="col-sm-3 col-form-label text-md-right">Name:</label>
			<input  type="name" name="name" /required placeholder="Enter Name"><br>
			<label class="col-sm-3 col-form-label text-md-right">Contact No.:</label>
			<input type="text" name="phnumber" required="required" placeholder="Enter Contact No." minlength="10" maxlength="10">
			<label class="col-sm-3 col-form-label text-md-right">Topic:</label>
			<input type="text" name="topic" placeholder="Enter Topic" required="required">
			<label class="col-sm-3 col-form-label text-md-right">Feedback:</label>
			<input class="" type="text" name="feedback" placeholder="Feedback" required="required"><br><br>
			<div class="offset-md-5">
				<button class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>
<footer>
	&copy Food for Society,2018
</footer>
@endsection