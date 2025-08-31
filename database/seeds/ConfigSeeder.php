<?php

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    public function run()
    {
      $configs[] = [
        'config_type'=>'image',
        'config_key'=>'banner1',
        'config_value'=>'banner1.jpg',
        'config_desc'=>'1920px width x 1214px height'
      ];
      $configs[] = [
        'config_type'=>'image',
        'config_key'=>'banner2',
        'config_value'=>'banner2.jpg',
        'config_desc'=>'1920px width x 1214px height'
      ];

      $configs[] = [
        'config_type'=>'image',
        'config_key'=>'mission_image',
        'config_value'=>'mission.jpg',
        'config_desc'=>'800px width x 500px height'
      ];
      $configs[] = [
        'config_type'=>'textarea',
        'config_key'=>'mission_text',
        'config_value'=>'Every year hundreds of animals such as dogs, cats are become homeless for many reasons. Our mission is to find out the homless animals around the country and make a better life for them. As like human they need love, care and also need home. We founded our organisation to give them a better life and better home. Our successes are going forward and throughtout the year we give a better life around hundreds of homless animals.',
      ];
      $configs[] = [
        'config_type'=>'image',
        'config_key'=>'vision_image',
        'config_value'=>'vision.jpg',
        'config_desc'=>'400px width x 350px height'
      ];
      $configs[] = [
        'config_type'=>'textarea',
        'config_key'=>'vision_text',
        'config_value'=>'We want to ensure that after 10 years there are no homeless animals on the street. Every single animal find their sweet home.',
      ];
      $configs[] = [
        'config_type'=>'image',
        'config_key'=>'success_image',
        'config_value'=>'success.jpg',
        'config_desc'=>'400px width x 350px height'
      ];$configs[] = [
      'config_type'=>'textarea',
      'config_key'=>'success_text',
      'config_value'=>'In five years we find more than 5000 cats and dogs around the USA. 3000 already find thier sweet home and more are knocking the door.',
    ];

      $configs[] = [
        'config_type'=>'image',
        'config_key'=>'adopt_image',
        'config_value'=>'adopt.jpg',
        'config_desc'=>'360px width x 360px height'
      ];
      $configs[] = [
        'config_type'=>'textarea',
        'config_key'=>'adopt_text',
        'config_value'=>'We have almost 1000 homes polite and cute cats and dogs into our care. You can adopt as many as your demand.',
      ];
      $configs[] = [
        'config_type'=>'image',
        'config_key'=>'foster_image',
        'config_value'=>'foster.jpg',
        'config_desc'=>'360px width x 360px height'
      ];
      $configs[] = [
        'config_type'=>'textarea',
        'config_key'=>'foster_text',
        'config_value'=>'Love, care and better home are essential need for every animals. You can take that chance to love our animals as human do.',
      ];
      $configs[] = [
        'config_type'=>'image',
        'config_key'=>'donate_image',
        'config_value'=>'donate.jpg',
        'config_desc'=>'360px width x 360px height'
      ];
      $configs[] = [
        'config_type'=>'textarea',
        'config_key'=>'donate_text',
        'config_value'=>'We have around 100 volunteers in our club. You can join we with us and help the homless animals to find their home.',
      ];
      $configs[] = [
        'config_type'=>'text',
        'config_key'=>'rescued_initial',
        'config_value'=>'65',
      ];
      $configs[] = [
        'config_type'=>'text',
        'config_key'=>'adopted_initial',
        'config_value'=>'57',
      ];

      foreach($configs as $config) {
        DB::table("config")->insert($config);
      }
    }
}
