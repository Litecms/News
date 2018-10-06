<?php

namespace Litecms\News\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\News\Models\News;

class NewsPolicy
{

    /**
     * Determine if the given user can view the news.
     *
     * @param UserPolicy $user
     * @param News $news
     *
     * @return bool
     */
    public function view(UserPolicy $user, News $news)
    {
        if ($user->canDo('news.news.view') && $user->isAdmin()) {
            return true;
        }

        return $news->user_id == user_id() && $news->user_type == user_type();
    }

    /**
     * Determine if the given user can create a news.
     *
     * @param UserPolicy $user
     * @param News $news
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('news.news.create');
    }

    /**
     * Determine if the given user can update the given news.
     *
     * @param UserPolicy $user
     * @param News $news
     *
     * @return bool
     */
    public function update(UserPolicy $user, News $news)
    {
        if ($user->canDo('news.news.edit') && $user->isAdmin()) {
            return true;
        }

        return $news->user_id == user_id() && $news->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given news.
     *
     * @param UserPolicy $user
     * @param News $news
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, News $news)
    {
        return $news->user_id == user_id() && $news->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given news.
     *
     * @param UserPolicy $user
     * @param News $news
     *
     * @return bool
     */
    public function verify(UserPolicy $user, News $news)
    {
        if ($user->canDo('news.news.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given news.
     *
     * @param UserPolicy $user
     * @param News $news
     *
     * @return bool
     */
    public function approve(UserPolicy $user, News $news)
    {
        if ($user->canDo('news.news.approve')) {
            return true;
        }

        return false;
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
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
