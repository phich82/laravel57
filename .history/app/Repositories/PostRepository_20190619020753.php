<?php

namespace App\Repositories;

use App\Post;
use App\Repositories\Contracts\PostRepositoryContract;

class PostRepository extends EloquentRepository implements PostRepositoryContract
{
    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return Post::class;
    }

    /**
     * Get 5 posts hot in a month the last
     *
     * @return mixed
     */
    public function getPostsTop()
    {
        return $this->model->where('created_at', '>=', Carbon::now()->subMonth())
                    ->orderBy('view', 'desc')
                    ->take(5)
                    ->get();
    }
}
