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
    Edit Share
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
      <!--<form method="post" action="{{ route('shares.update', $share->id) }}">
        @method('PATCH')-->
       <form> 
        <div class="form-group">
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="share_name" :value="share_name" v-model="share_name" v-validate="'required'" />
          <input type="hidden" name="id_reg" id="id_reg" value="{{ $share->id }}" />
        </div>
        <span v-show="errors.has('share_name')" style="color: red;">
            @{{ errors.first('share_name') }}
        </span>

        <div class="form-group">
          <label for="price">Share Price :</label>
          <input type="text" class="form-control" name="share_price" :value="share_price" v-model="share_price" v-validate="'required|numeric|max:10'" />
        </div>
        <span v-show="errors.has('share_price')" style="color: red;">
            @{{ errors.first('share_price') }}
        </span>

        <div class="form-group">
          <label for="quantity">Share Quantity:</label>
          <input type="text" class="form-control" name="share_qty" :value="share_qty" v-model="share_qty" v-validate="'required|numeric'" value="share_qty" />
        </div>
        <span v-show="errors.has('share_qty')" style="color: red;">
            @{{ errors.first('share_qty') }}
        </span>

        <hr>

        <div v-show="spinner">
          <md-progress-spinner md-mode="indeterminate"></md-progress-spinner>
        </div>

        <!--<button type="submit" class="btn btn-primary">Update</button>-->
        <button v-on:click="updateData" class="btn btn-primary">Update Vue</button>
      </form>
  </div>
</div>

<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/vue_min.js"></script>
<script src="/js/vue-material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vee-validate/2.0.0-beta.25/vee-validate.min.js"></script>
<script src="/js/vue_logic.js"></script>

@endsection