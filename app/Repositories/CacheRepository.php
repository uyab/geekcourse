<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Cache;

class CacheRepository implements CourseRepositoryInterface
{
    /**
     * @var CourseRepository
     */
    private $repository;

    /**
     * CacheRepository constructor.
     */
    public function __construct(CourseRepository $repository) {
        $this->repository = $repository;
    }

    public function popular()
    {
        if (Cache::has('popular')) {
            return Cache::get('popular');
        } else {
            $popular = $this->repository->popular();
            Cache::add('popular', $popular, 60);

            return $popular;
        }
    }
}
