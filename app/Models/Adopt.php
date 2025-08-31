<?php namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Adopt extends Model
{
  public $table = 'adopt';
  protected $primaryKey = 'adopt_id';
  protected $attributes = ['adopt_stat' => 'A', 'breed'=>'Cross Breed'];
  protected $validation;

  private $rules = [
  ];

  private $messages = [

  ];

  public function saveAdopt($input) {
    $this->name = $input['name'];
    $this->breed = $input['breed'];
    $this->gender = $input['gender'];
    $this->adopt_stat = $input['adopt_stat'];
    $this->temperament = $input['temperament'];
    $this->desc_long = $input['desc_long'];
    $this->desc_short = $input['desc_short'];
    $this->birthday = $input['birthday'];
    $this->hdb = isset($input['hdb']) ? $input['hdb']  : 'N';

    $file = Input::file('image');

    if ($file) {
      var_dump($file);
      $config_service = new Config();
      $dir = $config_service->getImageDir() . 'adopt/';

      $file_name = $input['name'].'.'.$file->getClientOriginalExtension();
      var_dump($dir);
      var_dump($file_name);
      $file->move($dir, $file_name);
      $this->image = $file_name;
    }
    $this->save();
    return true;
  }

  public function getAdoptAvailable() {
    $data = DB::table('adopt')->where('adopt_stat', 'A')->get();
    foreach($data as $d) {
      $d->age = $this->calcAge($d->birthday);
    }
    return $data;
  }

  public function getAdoptAll() {
    return DB::table('adopt')->where('adopt_stat', 'A')->get();
  }

  public function calcAge($birthday) {
    $date = new DateTime($birthday);
    $diff = $date->diff(new DateTime());
    $age = '';
    if($diff->y > 0) {
      $age .= $diff->y;
      if ($diff->y>1) $age.=' years ';
      else $age.=' year ';
    }
    if ($diff->m > 0) {
      $age.=$diff->m;
      if ($diff->m>1) $age.=' months';
      else $age.=' month';
    }
    return $age;
  }

  public function requestAdoptadog($adopts) {
    $s = "DELETE from adopt";
    DB::statement($s);

    foreach($adopts as $adopt) {
      $data = [
        'adopt_stat'=>'A',
        'image'=>'bruno.jpg',
        'breed'=>'Cross Breed',
        'adopt_name'=>'Bruno',
        'gender'=>'M',
        'hdb'=>'N',
        'birthday'=>'2015-01-01',
        'desc_long'=>'Bruno was bailed out from the AVA about a month ago. He was rounded up as part of the stray population controls but was kept at the pound for a month because of his good temperament. Bruno is very quiet but is not suitable for families with young kids or small dogs. He needs a very firm handler who will take charge and teach Bruno how to behave.',
        'temperament'=>'Gentle',
      ];
    }
  }

}