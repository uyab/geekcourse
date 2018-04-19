<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample user
        $defaultUser = factory(\App\User::class)->create(
            [
                'name'           => 'Anton',
                'email'          => 'anton@berbageek.com',
                'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            ]
        );


        // User registrasi
        $users = factory(\App\User::class)->times(10)->create();
        $users->push($defaultUser);

        // Admin membuat master kategori
        $categories = [];
        $categories[] = factory(\App\Category::class)->create();
        $categories[] = factory(\App\Category::class)->create();
        $categories[] = factory(\App\Category::class)->create();

        $categories = collect($categories);

        $courses = [];

        // Untuk setiap user, punya 0 - 3 course
        foreach ($users as $user) {

            $userCourses = factory(\App\Course::class)
                ->times(rand(1, 3))
                ->make();

            // asosiasikan course dengan category dan author
            // setiap course punya beberapa video
            foreach($userCourses as $course) {
                $course->author()->associate($user);
                $course->category()->associate($categories->random()->getKey());
                $course->save();
            }

            // setiap course punya beberapa video
            foreach($userCourses as $course) {
                foreach (range(1, 5) as $index) {
                    $video = factory(\App\Video::class)->make(['order' => $index]);
                    $course->videos()->save($video);
                }
                $courses[] = $course;
            }
        }

        // Wishlist
        $courses = collect($courses);
        foreach($users as $user)
        {
            // @todo: tidak boleh menambahkan course punya sendiri ke wishlist
            $user->wishlists()->sync([$courses->random()->getKey(), $courses->random()->getKey()]);
        }

        // Enrolled Course
    }
}
