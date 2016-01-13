<?php namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Config extends Model
{
  public $table = 'config';
  protected $primaryKey = 'config_id';
  protected $validation;

  private $rules = [
  ];

  private $messages = [

  ];

  public function saveConfig()
  {

  }

  public function getConfigAll()
  {
    $data = DB::table('config')->get();
    $res = [];
    foreach($data as $d) {
      $res[$d->config_key] = $d->config_value;
    }
    return $res;
  }
}
