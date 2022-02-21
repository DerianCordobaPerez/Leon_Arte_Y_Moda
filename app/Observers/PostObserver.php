<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostObserver
{
    private function clearCache()
    {
        for($i = 0; $i < 100; $i++) {
            $key = "post-page-{$i}";

            if(!Cache::has($key)) {
                break;
            }

            Cache::forget($key);
        }
    }

    /**
     * Handle the Post "created" event.
     *
     * @param Post $post
     * @return void
     */
    public function created(Post $post)
    {
        $this->clearCache();
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param Post $post
     * @return void
     */
    public function updated(Post $post)
    {
        $this->clearCache();
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param Post $post
     * @return void
     */
    public function deleted(Post $post)
    {
        $this->clearCache();
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param Post $post
     * @return void
     */
    public function restored(Post $post)
    {
        $this->clearCache();
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param Post $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        $this->clearCache();
    }
}
