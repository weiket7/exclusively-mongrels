<?php namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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

  public function getConfigAllSimple()
  {
    $data = DB::table('config')->get();
    $res = [];
    foreach($data as $d) {
      $res[$d->config_key] = $d->config_value;
    }
    return $res;
  }

  public function getConfigAll()
  {
    return DB::table('config')->get();
  }

  public function updateConfigAll($input)
  {
    $configs = $this->getConfigAll();
    foreach($configs as $config) {
      if ($config->config_type == 'image') {
        $file = Input::file($config->config_key);
        if ($file) {
          $dir = $this->getImageDir();
          $file_name = $config->config_key.'.'.$file->getClientOriginalExtension();
          $file->move($dir, $file_name);
          $this->updateConfig($config->config_key, $file_name);
        }
      } else { //textarea, text
        $this->updateConfig($config->config_key, $input[$config->config_key]);
      }
    }
    return true;
  }

  public function getImageDir() {
    if (App::environment('local')) {
      return $_SERVER['DOCUMENT_ROOT'] . "em/assets/images/";
    } else if (App::environment('production')) {
      return $_SERVER['DOCUMENT_ROOT'] . "/assets/images/";
    }
  }

  private function updateConfig($config_key, $config_value)
  {
    $s = "update config set config_value = :config_value where config_key = :config_key";
    $p['config_value'] = $config_value;
    $p['config_key'] = $config_key;
    DB::statement($s, $p);
  }


}
