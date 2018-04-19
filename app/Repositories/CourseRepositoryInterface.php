<?php

namespace App\Repositories;

use App\User;

interface CourseRepositoryInterface
{
    public function popular();

    public function recommended();

    public function ownedBy(User $user);
}
