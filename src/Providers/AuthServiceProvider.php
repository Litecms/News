<?php

namespace Litecms\News\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind News policy
        'Litecms\News\Models\News' => \Litecms\News\Policies\NewsPolicy::class,
// Bind Category policy
        'Litecms\News\Models\Category' => \Litecms\News\Policies\CategoryPolicy::class,
// Bind Comment policy
        'Litecms\News\Models\Comment' => \Litecms\News\Policies\CommentPolicy::class,
// Bind Tag policy
        'Litecms\News\Models\Tag' => \Litecms\News\Policies\TagPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
