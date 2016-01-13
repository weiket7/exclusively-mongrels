<?php

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    public function run()
    {
      $config = [
      'config_type'=>'banner',
      'config_key'=>'banner1',
      'config_value'=>'banner1.jpg',
      ];
      DB::table("config")->insert($config);

      $config = [
        'config_type'=>'about',
        'config_key'=>'mission',
        'config_value'=>'mission.jpg',
      ];
      DB::table("config")->insert($config);

      $config = [
        'config_type'=>'about',
        'config_key'=>'vision',
        'config_value'=>'vision.jpg',
      ];
      DB::table("config")->insert($config);

      $config = [
        'config_type'=>'about',
        'config_key'=>'success',
        'config_value'=>'success.jpg',
      ];
      DB::table("config")->insert($config);

      $config = [
        'config_type'=>'contribute',
        'config_key'=>'config',
        'config_value'=>'config.jpg',
      ];
      DB::table("config")->insert($config);

      $config = [
        'config_type'=>'contribute',
        'config_key'=>'foster',
        'config_value'=>'foster.jpg',
      ];
      DB::table("config")->insert($config);

      $config = [
        'config_type'=>'contribute',
        'config_key'=>'donate',
        'config_value'=>'donate.jpg',
      ];
      DB::table("config")->insert($config);
    }
}
