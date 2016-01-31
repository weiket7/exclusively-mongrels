@extends('template')

@section('content')

  <div class="container">
    <br>
    <h1>Admin</h1>

    @if (Session::has('message'))
      <div class="alert alert-success">
        {{ Session::get('message') }}
      </div>
    @endif

    <a href="{{URL::to('admin/adopt')}}">Adoption List</a>
    <br><br>

    <form method="post" action="" enctype="multipart/form-data">
      {{csrf_field()}}
      <table class="table table-bordered">
        @foreach($configs as $config)
          <tr>
            <td style="width:150px">
              <b>{{$config->config_key}}</b><br>
              @if($config->config_desc)
                <small>({{$config->config_desc}})</small>
              @endif
            </td>
            @if($config->config_type == 'textarea')
              <td>
                <textarea name="{{$config->config_key}}" rows="5" cols="100">{{$config->config_value}}</textarea>
              </td>
            @elseif($config->config_type == 'image')
              <td>
                <img src="{{URL::to('/')}}/assets/images/{{$config->config_value}}" style="max-height: 100px"/>
                <input type="file" name="{{$config->config_key}}"/>
              </td>
            @elseif($config->config_type == 'text')
              <td>
                <input type="text" name="{{$config->config_key}}" value="{{$config->config_value}}"/>
              </td>
            @endif
          </tr>
        @endforeach
        <tr>
          <td colspan="2" style="text-align:center"><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>

  </div>

@endsection