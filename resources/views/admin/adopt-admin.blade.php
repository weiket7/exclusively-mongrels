@extends('template')

@section('content')

  <div class="container">
    <br>
    <h1>Adoption List</h1>
    <a href="{{URL::to('admin/adopt/create')}}">Create</a><br>
    <a href="{{URL::to('admin')}}">Back to Admin</a>
    <br><br>

    <table class='table table-bordered'>
      <thead>
      <th width="100px">Status</th>
      <th>Name</th>
      <th>DOB</th>
      <th>Gender</th>
      <th>HDB</th>
      </thead>
      <tbody>
      <?php
      $adopt_stat_arr = array('A'=>'Available', 'D'=>'Adopted', 'H'=>'Hidden');
      ?>
      @foreach ($adopts as $key => $a)
        <tr>
          <td>{{$adopt_stat_arr[$a->adopt_stat]}}</td>
          <td>
            <a href='{{URL::to('/')}}/admin/adopt/update/{{$a->adopt_id}}'>{{$a->name}}</a>
          </td>
          <td>{{date('M Y', strtotime($a->birthday))}}</td>
          <td>
            @if ($a->gender == 'M') Male @else Female @endif
          </td>
          <td>
            @if ($a->hdb == 'Y') Yes @else No @endif
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection