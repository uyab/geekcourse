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

        // User registrasi
        $users = factory(\App\User::class)->times(10)->create();

        // Admin membuat master kategori
        $categories = factory(\App\Category::class)->times(10)->create();

        $courses = [];

        // Untuk setiap user, punya 0 - 3 course
        foreach ($users as $user) {
            $userCourses = factory(\App\Course::class)
                ->times(rand(0, 3))
                ->create([
                     'author_id' => $user->id,
                     'category_id' => $categories->random()->id,
                 ]);

            // setiap course punya beberapa video
            foreach($userCourses as $course) {
                foreach (range(1, 5) as $index) {
                    factory(\App\Video::class)->create(['course_id' => $course->id, 'order' => $index]);
                }
                $courses[] = $course;
            }
        }

        // Wishlist
        $courses = collect($courses);
        foreach($users as $user)
        {
            // @todo: tidak boleh menambahkan course punya sendiri ke wishlist
            $user->wishlists()->sync([$courses->random()->id, $courses->random()->id]);
        }

        // Enrolled Course
    }
}
