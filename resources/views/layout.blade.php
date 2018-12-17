<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <base href="{{asset('/')}}">
        <meta name="author" content="Jhousyfran Costa">
        <meta name="description" content="Teste para vaga de DEV">
        <meta name="theme-color" content="#EEE"/>    
        <!-- <link rel="shortcut icon" href="{{asset('icon.png')}}"> -->
        <!-- <link rel="manifest" href="{{asset('pwa.manifest.json')}}"> -->

        <title>Escola</title>
        

        <!-- Fonts -->
        <!-- <link href="{{asset('/fonts/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css"> -->
        <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

        <script src="{{asset('/js/vue.js')}}" charset="utf-8"></script>
    <script src="{{asset('/js/axios.js')}}" charset="utf-8"></script>

    </head>
    <body>

        <div class="col-md-10 offset-md-1 "><br>
            <div class="row">
                <div class="col-md-12">
                    <h3>
                    <i class="fa fa-eye" aria-hidden="true"> </i>
                    Detalhamento da Escola</h3>
                    <!-- <hr> -->
                </div>
            </div>
        </div>
        <div class="col-md-10 offset-md-1 bg-default"><br>
            
             @yield('content')

        </div>

        <style>
            .bg-default {
                background-color: #eee;
            }

            .form-campo {
                display: block;
                width: 100%;
                /* padding: .375rem .75rem; */
                font-size: 14px;
                 font-weight: bold;
                line-height: 1.5;
                /* color: #495057; */
                /* background-color: #fff; */
                background-clip: padding-box;
                /* border: 1px solid #ced4da; */
                /* border-radius: .25rem; */
                /* transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; */
            }

            p {
                margin-top: -5px;
                /* font */
            }

            .aba{
                margin-top:10px;
                font-size:18px;
                cursor:pointer;
            }
        </style>

    </body>
    

   


</html>
