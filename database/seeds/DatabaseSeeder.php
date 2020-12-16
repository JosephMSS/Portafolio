<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Member::class, 3)->create();

        factory(App\User::class, 1)-> create()->each(function ($user)
        {
            $user->profile()->save(factory(App\Profile::class)->make());
            $user->image()->save(factory(App\Image::class)->make([
                'url' => 'https://www.fillmurray.com/1024/1024/'
            ]));
        });
        
        factory(App\Category::class)->create(['name'=>'main']);
        factory(App\Category::class)->create(['name'=>'secondary']);
        factory(App\Tag::class, 6)->create(); 
        
        factory(App\Project::class,5)->create()->each(function ($project)
        {
            $project->image()->save(factory(App\Image::class)->make());

            // $project->user()->attach(1);
              
            
            $project->members()->attach($this->array(rand(1,3)));
            $project->tags()->attach($this->array(rand(1, 6)));

        });
    }

    public function array($max)
    {
        $values = [];

        for ($i=1; $i < $max; $i++) { 
            $values[] = $i;
        }

        return $values;
    }

}
