@extends('layouts.app')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Food for Society</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .py-4 {
                background-color: white;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                color: rgba(0,0,0,.9);
                font-family: Meera;
                font-weight: lighter;
                position: absolute;
                left: 92px;
                top: 18px;
                font-size: 21px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 89px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .about_food {/*
                width:70%;
                border: 1px solid rgba(0,0,0,0.1);
                box-shadow: 5px 5px 5px rgba(0,0,0,0.1);
                margin-bottom: 15px;
                margin-top:12em;
                padding-bottom: 5em;
                padding: 0.7em 3em;
                color: black;
                font-family: Prime;
                font-size: 14px;   */
                width:70%;
                border:1px solid rgba(0,0,0,0.1);
                box-shadow: 5px 5px 5px rgba(0,0,0,0.1);
                margin:1.5em 14%;
                padding: 0.9em 3em;
                color:#212121;
                font-family: Prime; margin-bottom: 30px;

                font-size: 18px;

            }

            b{
                font-size: 20px;
                font-family: sans-serif;
            } 

            hr {
                width:12.5%;
                margin: 0%;
                margin-top: 0.5em;
            } 

            .m-b-md {
                margin-bottom: 30px;
            }
            footer {
                color: black;
                font-family: Prime;
                text-align: center;
                bottom: 5px;
                margin-bottom: 1.2em;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
<!--                 <div class="title m-b-md"> -->
                 <div class="top-left">
                    Food for Society
                </div>
            </div>
        </div>

@section('content')
    <div class="col-md-12">
        <div class="about_food ">
            <p>
                <b>Mission</b>
                <hr><br>
                The Food Project's mission is to create a thoughtful and productive community of youth and adults from diverse backgrounds who work together to build a sustainable food system. Our community produces healthy food for residents of the city and suburbs, provides youth leadership opportunities, and inspires and supports others to create change in their own communities.<br><br>
                <b>Vision</b>
                <hr><br>
                We envision a world where youth are active leaders, diverse communities feel connected to the land and each other, and everyone has access to fresh, local, healthy, affordable food<br><br>
                <b>Philosophy</b>
                <hr><br>
                At The Food Project, we generate a community where people have a rare opportunity to re-create themselves. We gather youth and adults from all backgrounds and abilities and give them the opportunity to contribute purposefully to society by growing food, caring for the land, and bringing fresh affordable produce to communities with the least access. Through this meaningful and demanding work, they are challenged to step outside the story of who they are or have been and try on a new way of thinking, acting, or being. By inviting youth to serve and to take risks, we offer people chances to see themselves, others, and the world differently.<br><br>

                The Food Project uses an intensely personal model. It makes a deep commitment to each person and community it touches, and invites the same of each volunteer, neighbor, and friend. We strive to bridge cultural, ethnic, and personality differences with our "Straight Talk" system of frank communication. We want to expand permanently each person’s recognition of himself or herself as an agent for social change.<br><br>

                We also serve as a resource center and leader of this process. Nearly half of The Food Project's work serves those who come from other cities, countries, farms and even other types of organizations for inspiration and skills. Because of our dedication to advancing communities, youth and sustainable agriculture wherever they might be, we aid these colleagues as well.
            </p>
        </div>
    </div>
     <footer>
            <p>&copy Food for Society,2018</p>        
    </footer>
    </body>
</html>
@endsection
