<?php

namespace Database\Seeders;

use App\Models\WasteType;
use App\Models\WasteTypeSubscriptions;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Vote;
use Database\Factories\ClubSubscriptionsFactory;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(19)->create();
        Post::factory(100)->create();
        WasteType::factory(10)->create();

        //generate unique votes. Ensure post_id and user_id are unique for each row
        foreach (range(1, 20) as $user_id) {
            foreach (range(1, 100) as $post_id) {
                if ($post_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'post_id' => $post_id,
                    ]);
                }
            }
            //follower user
            User::find($user_id)->followers()->attach(User::find(21));
            User::find($user_id)->followings()->attach(User::find(22));
        }

        // Generate comments for ideas
        foreach (Post::all() as $post) {
            Comment::factory(25)->existing()->create(['post_id' => $post->id]);
        }

        $faker = Factory::create();
        $posts = Post::all();
        $wasteTypes = WasteType::all()->pluck('id');

        foreach ($posts as $post) {
            $post->wasteTypes()->attach($faker->randomElement($wasteTypes));
        }

//        foreach (range(1, 20) as $user_id) {
//            foreach($wasteTypes as $wasteType)
//            {
//                if($wasteType % 2)
//                {
//                    WasteTypeSubscriptions::factory()->create([
//                        'waste_type_id'=>$wasteType,
//                        'user_id'=>$user_id,
//                    ]);
//                }
//            }
//        }

    }
}
