<?php

namespace Litecms\News\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Litecms\News\Models\News;

class NewsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can view the news.
     *
     * @param User $user
     * @param News $news
     *
     * @return bool
     */
    public function view(User $user, News $news)
    {

        if ($user->canDo('news.news.view') && $user->is('admin')) {
            return true;
        }

        return $user->id === $news->user_id;
    }

    /**
     * Determine if the given user can create a news.
     *
     * @param User $user
     * @param News $news
     *
     * @return bool
     */
    public function create(User $user)
    {
        return $user->canDo('news.news.create');
    }

    /**
     * Determine if the given user can update the given news.
     *
     * @param User $user
     * @param News $news
     *
     * @return bool
     */
    public function update(User $user, News $news)
    {

        if ($user->canDo('news.news.update') && $user->is('admin')) {
            return true;
        }

        return $user->id === $news->user_id;
    }

    /**
     * Determine if the given user can delete the given news.
     *
     * @param User $user
     * @param News $news
     *
     * @return bool
     */
    public function destroy(User $user, News $news)
    {

        if ($user->canDo('news.news.delete') && $user->is('admin')) {
            return true;
        }

        return $user->id === $news->user_id;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {

        if ($user->isSuperUser()) {
            return true;
        }

    }

}
