<?php namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

  public function saveAdopt() {

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
      if ($diff->y>1) $age.=' yrs ';
      else $age.=' yr ';
    }
    if ($diff->m > 0) {
      $age.=$diff->m;
      if ($diff->m>1) $age.=' mths';
      else $age.=' mth';
    }
    return $age;
  }

}