<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Stephenjude\FilamentBlog\Models\Post;
use Stephenjude\FilamentBlog\Models\Category;
use Stephenjude\FilamentBlog\Models\Author;
use RyanChandler\FilamentNavigation\Models\Navigation;
use Ramnzys\FilamentEmailLog\Models\Email;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Post::class => 'App\Policies\PostPolicy',
        Category::class => 'App\Policies\CategoryPolicy',
        Author::class => 'App\Policies\AuthorPolicy',
        Navigation::class => 'App\Policies\NavigationPolicy',
        Email::class => 'App\Policies\EmailPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
