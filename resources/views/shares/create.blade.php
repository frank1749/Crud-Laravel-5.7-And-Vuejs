@extends('layout')

@section('content')
<!-- Propiedades Materialize Vuejs -->
  <link rel="stylesheet" type="text/css" href="/css/vue-material.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/default.css" />
  <!-- Fin Propiedades Materialize Vuejs -->
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<style lang="scss" scoped>
  .md-progress-spinner {
    margin: 24px;
  }
</style>

<div class="card uper" id="aplicacion">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <!--<form method="post" action="{{ route('shares.store') }}">-->
        <form>
          <div class="form-group">
              <label for="name">Share Name:</label>
              <input type="text" class="form-control" v-model="share_name" v-validate="'required'" name="share_name"/>
          </div>
          <span v-show="errors.has('share_name')" style="color: red;">
            @{{ errors.first('share_name') }}
          </span>

          <div class="form-group">
              <label for="price">Share Price :</label>
              <input type="number" class="form-control" v-model="share_price" name="share_price" v-validate="'required|numeric|max:10'"/>
          </div>
          <span v-show="errors.has('share_price')" style="color: red;">
            @{{ errors.first('share_price') }}
          </span>

          <div class="form-group">
              <label for="quantity">Share Quantity:</label>
              <input type="number" class="form-control" v-model="share_qty" v-validate="'required|numeric'" name="share_qty"/>
          </div>
          <span v-show="errors.has('share_qty')" style="color: red;">
            @{{ errors.first('share_qty') }}
          </span>

          <hr>

          <div v-show="spinner">
            <md-progress-spinner md-mode="indeterminate"></md-progress-spinner>
          </div>

          <!--<button type="submit" class="btn btn-primary">Add</button>-->
          <button v-on:click="insertData" class="btn btn-primary">Add Vue</button>

        </form>  
  </div>
</div>


<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/vue_min.js"></script>
<script src="/js/vue-material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vee-validate/2.0.0-beta.25/vee-validate.min.js"></script>
<script src="/js/vue_logic.js"></script>

@endsection
