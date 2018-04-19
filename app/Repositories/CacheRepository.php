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
        $key = 'popular';

        if (Cache::has($key)) {
            return Cache::get($key);
        }

        $popular = $this->repository->popular();
        Cache::add($key, $popular, 60);

        return $popular;
    }

    public function recommended()
    {
        $key = 'recommended';

        if (Cache::has($key)) {
            return Cache::get($key);
        }

        $recommended = $this->repository->recommended();
        Cache::add($key, $recommended, 60);

        return $recommended;
    }
}
