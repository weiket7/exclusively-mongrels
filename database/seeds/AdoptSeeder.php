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
        'image'=>'bruno.jpg',
        'breed'=>'Cross Breed',
        'name'=>'Bruno',
        'gender'=>'M',
        'hdb'=>'N',
        'birthday'=>'2015-01-01',
        'desc_long'=>'Bruno was bailed out from the AVA about a month ago. He was rounded up as part of the stray population controls but was kept at the pound for a month because of his good temperament. Bruno is very quiet but is not suitable for families with young kids or small dogs. He needs a very firm handler who will take charge and teach Bruno how to behave.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>2,
        'adopt_stat'=>'A',
        'image'=>'byron.jpg',
        'breed'=>'Cross Breed',
        'name'=>'Byron',
        'gender'=>'M',
        'hdb'=>'N',
        'birthday'=>'2015-02-01',
        'desc_long'=>'Byron was bailed out from the AVA before he was culled as he was caught on their routine rounding up of strays. Byron has a very good temperament and likes to be around humans. He is HDB approved under Project Adore.

Byron is also very good on leash, good with kids and other dogs.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>3,
        'adopt_stat'=>'A',
        'image'=>'felix.jpg',
        'breed'=>'Cross Breed',
        'name'=>'Felix',
        'gender'=>'F',
        'hdb'=>'N',
        'birthday'=>'2015-04-01',
        'desc_long'=>'Remember Freckles? He was bailed out from the Ava a week ago, attended his first adoption drive last Sunday, appeared in The Straits Timeson Monday, and has now settled in nicely at our fosterer.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>4,
        'adopt_stat'=>'A',
        'image'=>'fitch.jpg',
        'breed'=>'Cross Breed',
        'name'=>'Fitch',
        'gender'=>'M',
        'hdb'=>'Y',
        'birthday'=>'2015-05-01',
        'desc_long'=>'Fitch was picked up by the AVA and given a second chance at a good home because he is very friendly and got along well with other dogs and humans.

He likes to be around dogs and still learning how to walk on leash.

Fitch is HDB approved under Project Adore.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>5,
        'adopt_stat'=>'A',
        'image'=>'freckles.jpg',
        'breed'=>'Cross Breed',
        'name'=>'Freckles',
        'gender'=>'M',
        'hdb'=>'N',
        'birthday'=>'2015-06-01',
        'desc_long'=>"Remember Freckles? He was bailed out from the Ava a week ago, attended his first adoption drive last Sunday, appeared in The Straits Timeson Monday, and has now settled in nicely at our fosterer's.
He's been a very busy boy indeed!!!
After his whirlwind 'tour', it's down to serious business of finding him a home. For those who're not familiar, Freckles was dumped by his adopter when she couldn't find him another adopter. He was subsequently picked up by the Ava and the search for his owner began. Not surprising, no one came forward to claim him and we decided to bail him out and make him part of EM.
He's a boisterous boy, loves his walks, his Foster siblings and absolutely adore
his Foster home. But it doesn't stop there for its merely temporary for Freckles.
He's friendly with humans and other dogs, microchipped, vaccinated and will be neutered soon. Freckles is only 1.5 years old, perfect to start a family and grow old with.
Give Freckles a chance, after all, isn't what life is all about, second chances? Drop us a PM or text to 97890569 if you'd like to see Freckles. He is not HDB approved.",
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>6,
        'adopt_stat'=>'A',
        'image'=>'ollie.jpg',
        'breed'=>'Cross Breed',
        'name'=>'Ollie',
        'gender'=>'F',
        'hdb'=>'N',
        'birthday'=>'2015-06-01',
        'desc_long'=>'Ollie was caught by the AVA as a small puppy but due to her godo temperament, she was given to us to rehome her. Ollie is very shy and w ill take time to warm up to humans. However, she is perfect with other dogs and loves to be around them.

Ollie is not HDB approved.',
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

      $adopt = [
        'adopt_id'=>7,
        'adopt_stat'=>'A',
        'image'=>'skinny.jpg',
        'breed'=>'Cross Breed',
        'name'=>'Skinny',
        'gender'=>'M',
        'hdb'=>'N',
        'birthday'=>'2015-06-01',
        'desc_long'=>"Bear with us as you read 'Skinny's story for this will most certainly bring tears to anyone.
Look carefully at his photos, enlarge them if needed and you'll notice he has no eyes.
Below is 'Skinny's story:
3-4 years ago, 'Skinny' was living at a bus stop nearby a factory when someone called up the Ava to lodge a complaint. Knowing his life might be snuffed out if he ended up in the pound, a very kind hearted Muslim feeder contacted one of our friends regarding this dire situation.
'Skinny' was subsequently rescued and placed in a temporary shelter, until last year when his carer noticed he had cloudy eyes and were swollen. Suspecting it could be cataract, 'Skinny' was sent to the vet to be checked out. Turned out there was a lot of pressure in his eyes and it was extremely painful for him. A hard decision was then made to remove one eye first. The vet tried to administer meds on the other eye but that didn't work. So his other eye was also removed. 'Skinny' is now left with two sockets with nothing.
He became depressed, understandably so since he'd lost his sight in both eyes. He lost his confidence, became quiet, reserved, unsure of his environment. 'Skinny' was broken.
His rescuers never gave up on him. They took him out on walks, slowly, 5 min, then 10, and now 30 min. Just to ensure 'Skinny' regains his confidence and allow him to
sharpen his other senses.
Took them months of hard work and patience but it worked! 'Skinny' is more confident now and will wag his tail whenever he hears familiar voices and smells familiar scents.
Sometimes, in the hustle and bustle city life, one just needs to take it slow to truly enjoy what life has to offer. 'Skinny' rescuers did just that, slowed down their pace for him so he could catch up. And he did.
'Skinny' might have lost his sight but he's not lost his zest for life for he's no longer broken.
He is now really to go home, if you'd open your hearts to him.
'Skinny' is a big boy so unfortunately is not HDB approved.",
        'temperament'=>'Gentle',
      ];
      DB::table("adopt")->insert($adopt);

    }
}
