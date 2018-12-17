
@extends('layout')
@section('content')
<div id="lista">
<table class="table" id="lista">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Anexo</th>
      <th scope="col">INEP</th>
      <th scope="col">Regional</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="escola in escolas">
      <th scope="row">@{{escola.codigo}}</th>
      <td>@{{escola.nome}}</td>
      <td>@{{escola.anexo}}</td>
      <td>@{{escola.inep}}</td>
      <td>@{{escola.regional}}</td>
      <td>
        <a :href="teste(escola.codigo)" class="btn btn-info">
            <i class="fa fa-eye" aria-hidden="true"> </i>
            Detalhes
        </a>
    </td>
    </tr>
  </tbody>
</table>
</div>


<script>
new Vue({
  el: '#lista',
  data () {
    return {
      escolas: []
    }
  },
  computed: {
      
  },
  methods : {
      teste(id){
        let url = window.location + 'escola/'+ id;
        return url;
      }
  },
  async mounted () {
      console.log(window.location);
      
    try {
        let response = await axios.get(window.location+'api/escolas');
        console.log(response.data.imoveis);
        this.escolas = response.data.imoveis;
        
    } catch (error) {
        
    }

      console.log(this.escolas);
  }
})
</script>
@endsection