<h1>EM Admin</h1>

<a href="{{URL::to('admin/adopt')}}">Adopt</a>
<br><br>

<form method="post" action="">
  <table border="1">
    @foreach($configs as $config)
      <tr>
        @if($config->config_type == 'textarea')
          <td>{{$config->config_key}}</td>
          <td>
            <textarea name="{{$config->config_key}}" rows="4" cols="20">{{$config->config_value}}</textarea>
          </td>
        @elseif($config->config_type == 'image')
          <td>{{$config->config_key}}</td>
          <td>
            <input type="file" name="{{$config->config_key}}"/>
          </td>
        @elseif($config->config_type == 'text')
          <td>{{$config->config_key}}</td>
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