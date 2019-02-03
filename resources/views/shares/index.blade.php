@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper" id="aplicacion">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <div class="row">
    <a href="/shares/create" class="btn btn-primary">Create New Data</a>
  </div>

  <hr>

  <span>Página: <strong>@{{ pag }}</strong></span>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Stock Name</td>
          <td>Stock Price</td>
          <td>Stock Quantity</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(res, index) in resul_list" v-show="(pag - 1) * NUM_RESULTS <= index  && pag * NUM_RESULTS > index" :class="'row-'+res.id">
            <td>@{{res.id}}</td>
            <td>@{{res.share_name}}</td>
            <td>@{{res.share_price}}</td>
            <td>@{{res.share_qty}}</td>
            <td><a :href="'/shares/'+res.id+'/edit'" class="btn btn-primary">Edit</a></td>
            <td>
                <button class="btn btn-danger" v-on:click="delData(res.id)">Delete</button>
            </td>
        </tr>
    </tbody>
  </table>

  <span>Total Registros: <strong>@{{ tot_reg }}</strong></span>

  <!-- Controles -->        
  <nav aria-label="Page navigation" class="text-center">
      <ul class="pagination text-center">
          <li>
              <a href="#" aria-label="Previous" v-show="pag != 1" @click.prevent="pag -= 1">
                  <span aria-hidden="true">Anterior</span>
              </a>
          </li>
          <hr>
          <li>
              <a href="#" aria-label="Next" v-show="pag * NUM_RESULTS / resul_list.length < 1" @click.prevent="pag += 1">
                  <span aria-hidden="true">Siguiente</span>
              </a>
          </li>
      </ul>
  </nav>

<div>

<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/vue_min.js"></script>
<script src="/js/vue-material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vee-validate/2.0.0-beta.25/vee-validate.min.js"></script>
<script src="/js/vue_logic.js"></script> 
@endsection