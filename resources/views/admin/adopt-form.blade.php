@extends('template')

@section('content')
  <script type="text/javascript">
    $(document).ready(function(){
      $('#birthday_d').datepicker( {
        dateFormat: "M yy",
        altField: "#birthday",
        altFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        yearRange: '-15:+0',
        onClose: function(dateText, inst) {
          var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
          var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
          $(this).datepicker('setDate', new Date(year, month, 1));
        }
      });

      $("#adopt-form").validate({
        rules: {
          name: { required: true },
          gender: { required: true },
          breed: { required: true },
          hdb: { required: true },
          birthday_d: { required: true },
          c_num: { required: true},
          c_person: { required: true },
          short_desc: { required: true }
        },
        messages: {
          name: { required: "Required" },
          age: { required: "Required" },
          stat: { required: "Required" },
          gender: { required: "Required" },
          breed: { required: "Required" },
          hdb: { required: "Required" },
          birthday_d: { required: "Required" },
          c_num: { required: "Required"},
          c_person: { required: "Required" },
          short_desc: { required: "Required" }
        }
      });
    });

    function chooseUser() {
      var user_name = $('#post_user').val();
      var url = '{{URL::to('/')}}/adopt/chooseUser?user_name='+user_name;
      $.ajax({
        url: url,
        error: function (xhr, ajaxOptions, thrownError) { alert(xhr.status + " " + thrownError); },
        async: false
      }).done(function(data) {
        var arr = $.parseJSON(data);
        $('#c_person').val(arr['c_person']);
        $('#c_num').val(arr['c_num']);
      });
    }
  </script>

  <div class="container">
    <br>
    <h1>Adopt</h1>
    <a href="{{URL::to('admin/adopt')}}">Back to Adoption List</a>
    <br><br>

    @if (Session::has('message'))
      <div class="alert alert-success">
        {{ Session::get('message') }}
      </div>
    @endif

    <form method="post" action="" id="adopt-form" enctype="multipart/form-data">
      {{ csrf_field() }}
      <table width='1000' class='table table-bordered'>
        <tr>
          <td>Name of Dog *</td>
          <td>{!! Form::text("name", $adopt->name, ['class'=>'form-control']) !!}</td>
          <td>Status*</td>
          <td>
            <label>{!! Form::radio('adopt_stat', 'A', $adopt->adopt_stat == 'A') !!} Available</label>
            <label>{!! Form::radio('adopt_stat', 'D', $adopt->adopt_stat == 'D') !!} Adopted</label>
            <label>{!! Form::radio('adopt_stat', 'H', $adopt->adopt_stat == 'H') !!} Hide</label>
          </td>
        </tr>
        <tr>
          <td>Breed *</td>
          <td>
            {!! Form::text('breed', $adopt->breed, ['class'=>'form-control']) !!}
          </td>
          <td>HDB Approved*</td>
          <td>
            <input type='radio' name='hdb' value='Y' id='hdbY' <?php if ($adopt->hdb == 'Y') echo 'checked'?>> <label for='hdbY'> Yes</label>
            <input type='radio' name='hdb' value='N' id='hdbN' <?php if ($adopt->hdb == 'N') echo 'checked'?>> <label for='hdbN'> No</label>
            <label for='hdb' class='error' generated='true'/>
          </td>
        </tr>
        <tr>
          <td>Birthday *</td>
          <td>
            <?php $birthday_d = $adopt->birthday == '' ? '' : date("M Y", strtotime($adopt->birthday)); ?>
            <?php $birthday = $adopt->birthday == '' ? '' : $adopt->birthday; ?>
            <input type='text' id='birthday_d' name='birthday_d' value='{{$birthday_d}}' class='form-control' readonly="readonly">
            <input type='hidden' id='birthday' name='birthday' value='{{$birthday}}' class='form-control'>
            <label for='birthday' class='error' generated='true'/>
          </td>
          <td>Temperament</td>
          <td>
            <input type='text' name='temperament' value='<?php echo $adopt->temperament ?>' class='form-control'>
          </td>
        </tr>
        <tr>
          <td>Gender *</td>
          <td>
            <input type='radio' name='gender' value='M' id='M' <?php if ($adopt->gender == 'M') echo 'checked'?>> <label for='M'>Male</label>
            <input type='radio' name='gender' value='F' id='F' <?php if ($adopt->gender == 'F') echo 'checked'?>> <label for='F'>Female</label>
            <label for='gender' class='error' generated='true'/>
          </td>
          <td>Image *<div class='format'><small>(960 x 960 px)</small></div></td>
          <td>
            @if(strlen($adopt->image) > 0)
              <img src='<?php echo URL::to('assets')."/images/adopt/".$adopt->image?>' class='thumb' style="max-height: 70px"/>
            @else
              No image
            @endif
            <input type='file' name='image'><br>

          </td>
        </tr>
        <tr>
          <td colspan='4'>&nbsp;</td>
        </tr>
        <tr>
          <td colspan='4'>Short description<br>
            <small>
              (Health, behaviour, whether understand basic commands, toilet/paper trained, whether good with kids etc)<br>
            </small><br>
            <textarea name='desc_short' rows='4' cols='100'><?php echo $adopt->desc_short ?></textarea>
          </td>
        </tr>
        </tr>
        <tr>
          <td colspan='4'>Long description<br>
            <small>
              (Health, behaviour, whether understand basic commands, toilet/paper trained, whether good with kids etc)<br>
            </small><br>
            <textarea name='desc_long' rows='10' cols='100'><?php echo $adopt->desc_long ?></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="4" class="text-center">
            <input type='submit' value='Submit' class="btn btn-primary">
          </td>
        </tr>
      </table>
    </form>
  </div>
@endsection