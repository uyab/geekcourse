<?php

namespace App\Repositories;

class DummyRepository implements CourseRepositoryInterface
{
    public function popular()
    {
        return [
            [
                'id'          => 1,
                'title'       => 'lorem ipsum',
                'rating'      => 5,
                'description' => 'description..',
            ],
            [
                'id'          => 2,
                'title'       => 'lorem ipsum',
                'rating'      => 3,
                'description' => 'description..',
            ],

        ];
    }

    public function recommended()
    {
        // TODO: Implement recommended() method.
    }
}
