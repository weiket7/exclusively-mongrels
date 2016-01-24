@extends('template')

@section('content')

  <div class="container">
    <h1>Login</h1>
    <br>

    @if (Session::has('message'))
      <div class="alert alert-danger">
        {{ Session::get('message') }}
      </div>
    @endif

    <form method="post" action="" class="form-inline">
      {{csrf_field()}}
      <div class="row">
        <div class="col-md-3 form-group">
          <label class="">Username</label>
        </div>
        <div class="col-md-9">
          <input type="text" name="username" class="form-control">
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 form-group">
          <label class="">Password</label>
        </div>
        <div class="col-md-9">
          <input type="password" name="password" class="form-control">
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <input type="submit" value="Login" class="btn btn-primary">
        </div>
      </div>
    </form>

  </div>

@endsection