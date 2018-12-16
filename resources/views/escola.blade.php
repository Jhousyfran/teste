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
        <link href="{{asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="col-md-10 offset-md-1 "><br>
            <div class="row">
                <div class="col-md-12">
                    <h3>Detalhamento da Escola</h3>
                    <!-- <hr> -->
                </div>
            </div>
        </div>
        <div class="col-md-10 offset-md-1 bg-default"><br>
            <div class="row">
                <div class="col-md-5 offset-2" >
                    <h4>Unidade de Ensino João Alberto</h4>
                    Código INEP:25986  CNPJ: 1111111111111
                </div>
                <div class="col-md-2" >
                    Status
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Endereço:</label>
                                <p class="form-campo">Rua das Laranjas</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Bairro:</label>
                                <p class="form-campo">Modelo Imerial</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Cep:</label>
                                <p class="form-campo">56565656</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Endereço:</label>
                                <p class="form-campo">Rua das Laranjas</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Bairro:</label>
                                <p class="form-campo">Modelo Imerial</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Cep:</label>
                                <p class="form-campo">56565656</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>


            <div class="row">
                <div class="col-md-8 offset-2" >
                    <h4>Dados do Gestor</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label >Nome:</label>
                                <p class="form-campo">João da Silva Moraes de Azevedo</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label >Tipo:</label>
                                <p class="form-campo">Principal</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label >Email:</label>
                                <p class="form-campo">gestor@geestor.com</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label >telefone</label>
                                <p class="form-campo">(98)9999-9999</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Forma de Seleção:</label>
                                <p class="form-campo">Modelo Imerial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
             <div class="row">
                <div class="col-md-8 offset-2" >
                    <h4>Dados de Sala Fora</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8 offset-2" >
                    <h4>Financeiro</h4>
                </div>
            </div>



        </div>

        <style>
            .bg-default {
                background-color: #eee;
            }

            .form-campo {
                display: block;
                width: 100%;
                /* padding: .375rem .75rem; */
                font-size: 20px;
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
        </style>

    </body>
    <!-- <script src="{{asset('/js/moment-with-locales.min.js')}}" charset="utf-8"></script> -->


</html>
