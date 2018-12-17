@extends('layout')
@section('content')

<div id="info">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Lista</a></li>
                <li class="breadcrumb-item active" aria-current="page">@{{escola.nome}}</li>
            </ol>
    <div class="row" >
        <nav aria-label="breadcrumb">
        </nav>
        <div class="col-md-5 offset-2" >
            <h4>@{{escola.nome}}</h4>
            Código INEP: @{{escola.inep}} 
        </div>
        <div class="col-md-2" >
            <div>
                <div style="padding-left:50px;">
                    Status
                </div>
                <div>
                    <label style="background-color: green; color:white; padding: 7px; margin-left: 30px;">
                        @{{escola.situacao}}
                    </label>
                </div>
            </div>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col-md-8 offset-2"  style="border: solid 1px #ddd; background-color:white;">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Cidade:</label>
                        <p class="form-campo">@{{escola.cidade}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Bairro:</label>
                        <p class="form-campo">@{{escola.bairro}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Cep:</label>
                        <p class="form-campo">@{{escola.cep}}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Localidade:</label>
                        <p class="form-campo">@{{escola.logradouro}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Telefone:</label>
                        <p class="form-campo">@{{escola.telefone}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Regional:</label>
                        <p class="form-campo">@{{escola.regional}}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Dados do Imovel:</label>
                        <p class="form-campo">@{{escola.ocupacao}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Tipo de Escola:</label>
                        <p class="form-campo">@{{escola.descricao}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-success font-weight-bold"> Tipo de Ensino:</label>
                        <p class="form-campo">@{{escola.modalidade}}</p>
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
        <div class="col-md-8 offset-2" style="border: solid 1px #ddd; background-color:white;">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('/img/user.jpg')}}" width="120">
                </div>
                <div class="col-md-10">
                    <div class="row">
                            <div class="col-md-8">
                            <div class="form-group">
                                <label class="text-info font-weight-bold">Nome:</label>
                                <p class="form-campo">@{{escola.gestores[0].nome}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-info font-weight-bold">Tipo:</label>
                                <p class="form-campo">@{{escola.gestores[0].cargo}}</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="text-info font-weight-bold">Email:</label>
                                <p class="form-campo">@{{escola.gestores[0].email}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="text-info font-weight-bold">telefone</label>
                                <p class="form-campo">@{{escola.gestores[0].celular}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-info font-weight-bold">Forma de Seleção:</label>
                                <p class="form-campo">@{{escola.gestores[0].tipo_eleito}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <br>
        <div class="row">
        <div class="col-md-8 offset-2" >
            <h4>Dados diretoria</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-2" >
            <div class="row" >
                <div class="col-md-12" style="border: solid 1px #ddd; background-color:white;" >
                    <table  class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Cargor</th>
                                <th scope="col">matricula</th>
                                <th scope="col">situacao</th>
                                <th scope="col">CPF</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white;">
                            <tr v-for="gestor in escola.gestores">
                                <th>@{{gestor.nome}}</th>
                                <td>@{{gestor.cargo}}</td>
                                <td>@{{gestor.matricula}}</td>
                                <td>@{{gestor.tipo_eleito}}</td>
                                <td>@{{gestor.cpf}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col-md-8 offset-2" >
            <h4>Financeiro</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-2" >
            <div class="row" >
                <div class="col-md-3" :class="{'bg-info': aba == 1}" style="border: solid 1px #ddd; height: 50px; border-bottom: solid 1px;">
                    <label class="aba" @click="selecionaAba(1)">Contratos e Repasses</label>
                </div>
                <div  style="width:5px;border-bottom: solid 1px;">
                </div>
                <div class="col-md-3" :class="{'bg-info': aba == 2}" style="border: solid 1px #ddd; border-bottom: solid 1px;">
                    <label class="aba" @click="selecionaAba(2)">Prestações de Contas</label>
                </div>
                <div class="col-md-4" style="border-bottom: solid 1px;">
                </div>
            </div>
           <br>
        </div> 
    </div>
     <div v-if="aba == 1" class="row">
        <div class="col-md-8 offset-2" >
            <h4>Contratos</h4>
        </div>
    </div>
    <div class="row">
        <div  v-if="aba == 1" class="col-md-8 offset-2" style="border: solid 1px #ddd; background-color:white;">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-success font-weight-bold" >Vigilancia:</label>
                        <p class="form-campo">R$ @{{escola.gastos_vigilancia}},00</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-success font-weight-bold" >Serviços Gerais:</label>
                        <p class="form-campo">R$ @{{escola.gastos_limpeza}},00</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-success font-weight-bold" >Aluguel:</label>
                        <p v-if="escola.gastos_aluguel" class="form-campo">@{{escola.gastos_aluguel}}</p>
                        <p v-else="escola.gastos_aluguel" class="form-campo"> R$ 0,00</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-success font-weight-bold" >Merendeira</label>
                        <p class="form-campo">R$ @{{escola.gastos_merendeira}},00</p>
                    </div>
                </div>
            </div>
        </div><br>
         <div  v-if="aba == 2" class="col-md-8 offset-2" style="border: solid 1px #ddd; background-color:white;">
         </div>
        <div class="col-md-2" >
            <div style="border: solid 5px #ddd; background-color:white;">
                <div style="padding-left:15px; border-bottom:solid 5px #ddd;">
                    STATUS FINANCEIRO
                </div>
                <div>
                    <label  style="background-color: green; color:white; padding: 7px; margin-left: 30px;">
                        Adimplente
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="row" v-if="aba == 1">
        <div class="col-md-8 offset-2" >
            <h4>Repasses</h4>
        </div>
    </div>
    <div class="row" v-if="aba == 1">
        <div class="col-md-8 offset-2 " style="border: solid 1px #ddd; background-color:white;">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-warning font-weight-bold" >Manutenção:</label>
                        <p class="form-campo">R$ @{{escola.repasse_manutencao}},00</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-warning font-weight-bold" >Pagamentos Terceiros:</label>
                        <p class="form-campo">R$ @{{escola.repasse_pagamentos_terceiros}},00</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-warning font-weight-bold" >Outros:</label>
                        <p  class="form-campo">R$ @{{escola.repasse_outros}},00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br><br><br>    
<script>
    
new Vue({
  el: '#info',
  data () {
    return {
        escola: {} ,
        aba : 1
    }
  },
  computed: {
      
  },
  methods : {
    selecionaAba(valor){
        this.aba = valor;
    }
  },
  async mounted () {
    let url = window.location.href;
    url = url.split('/');
    let idescola = url[url.length -1];

      let api = 'http://'+window.location.host + '/api/escola/' + idescola;
      console.log(api);
      
    
        let response = await axios.get(api);
        console.log('oii');
        this.escola = response.data.imovel;
        this.escola.gastos_limpeza = response.data.gastos_limpeza;
        this.escola.gastos_vigilancia = response.data.gastos_vigilancia;
        this.escola.gastos_merendeira = response.data.gastos_merendeira; 
        this.escola.repasse_manutencao = response.data.repasse_manutencao; 
        this.escola.repasse_pagamentos_terceiros = response.data.repasse_pagamentos_terceiros; 
        this.escola.repasse_outros = response.data.repasse_outros; 
  }
})
</script>
@endsection