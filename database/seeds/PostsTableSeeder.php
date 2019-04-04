<?php
//Также вместо null можно указать категории abstract/animmals/buisness/cats/city/food/
//nightlife/fashion/image/people/nature/sports/technics/transport (color image /gray image)
use App\Post;
use Illuminate\Database\Seeder,
    Carbon\Carbon;

class PostsTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create('ru_RU');
        $filepath = public_path('uploads');

        if(File::exists($filepath)){
            File::deleteDirectory($filepath);
        }
        if(!File::exists($filepath)){
            File::makeDirectory($filepath);
        }
        for ($i = 0; $i < 10; $i++) {
            $postModel = Post::create([
                'image' => $faker->image($filepath,800,600, 'nature', false),
                'title' => $faker->realText(50),
                'tagline' => $faker->realText(30),
                'announce' => $faker->realText(300),
                'fulltext' => $faker->realText(1024),
                'views_count' => mt_rand(0,100),
                'active_from' => Carbon::now(),
                'is_favorite' => $faker->numberBetween(0,1),
                'user_id' => $faker->numberBetween(1,5),
            ]);
            $postModel->slug = $postModel->id . ':' . str_slug($postModel->title, '-');
            $postModel->save();
        }
    }
}
