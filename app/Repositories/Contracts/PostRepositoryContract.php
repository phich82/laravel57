<?php

namespace App\Repositories\Contracts;

interface PostRepositoryContract
{
     /**
     * Get 5 posts hot in a month the last
     * @return mixed
     */
    public function getPostsTop();
}
