<?php

use Illuminate\Database\Seeder;

class AdoptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adopt = [
        'adopt_id'=>1,
        'adopt_stat'=>'A',
        'image'=>'Alpha.jpg',
        'breed'=>'Cross Breed',
        'adopt_name'=>'Alpha',
        'gender'=>'M',
        'hdb'=>'Y',
        'birthday'=>'2015-01-01',
        'desc_long'=>'Remember Freckles? He was bailed out from the Ava a week ago, attended his first adoption drive last Sunday, appeared in The Straits Timeson Monday, and has now settled in nicely at our fosterer.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>2,
        'adopt_stat'=>'A',
        'image'=>'Bravo.jpg',
        'breed'=>'Cross Breed',
        'adopt_name'=>'Bravo',
        'gender'=>'M',
        'hdb'=>'N',
        'birthday'=>'2015-02-01',
        'desc_long'=>'Remember Freckles? He was bailed out from the Ava a week ago, attended his first adoption drive last Sunday, appeared in The Straits Timeson Monday, and has now settled in nicely at our fosterer.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>3,
        'adopt_stat'=>'A',
        'image'=>'Charlie.jpg',
        'breed'=>'Cross Breed',
        'adopt_name'=>'Charlie',
        'gender'=>'M',
        'hdb'=>'N',
        'birthday'=>'2015-04-01',
        'desc_long'=>'Remember Freckles? He was bailed out from the Ava a week ago, attended his first adoption drive last Sunday, appeared in The Straits Timeson Monday, and has now settled in nicely at our fosterer.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>4,
        'adopt_stat'=>'A',
        'image'=>'Delta.jpg',
        'breed'=>'Cross Breed',
        'adopt_name'=>'Delta',
        'gender'=>'F',
        'hdb'=>'Y',
        'birthday'=>'2015-05-01',
        'desc_long'=>'Remember Freckles? He was bailed out from the Ava a week ago, attended his first adoption drive last Sunday, appeared in The Straits Timeson Monday, and has now settled in nicely at our fosterer.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>5,
        'adopt_stat'=>'A',
        'image'=>'Echo.jpg',
        'breed'=>'Cross Breed',
        'adopt_name'=>'Echo',
        'gender'=>'F',
        'hdb'=>'N',
        'birthday'=>'2015-06-01',
        'desc_long'=>'Remember Freckles? He was bailed out from the Ava a week ago, attended his first adoption drive last Sunday, appeared in The Straits Timeson Monday, and has now settled in nicely at our fosterer.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

    }
}
