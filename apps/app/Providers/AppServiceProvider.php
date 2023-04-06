<?php

namespace App\Providers;

use App\Repositories\Category\CategoryInterface;
use App\Repositories\Course\CourseImplement;
use App\Repositories\Course\CourseInterface;
use App\Repositories\Enrollment\EnrollmentImplement;
use App\Repositories\Enrollment\EnrollmentInterface;
use App\Repositories\Permission\PermissionImplement;
use App\Repositories\Permission\PermissionInterface;
use App\Repositories\Permission\RoleImplement;
use App\Repositories\Role\RoleInterface;
use App\Repositories\User\UserImplement;
use App\Repositories\User\UserInterface;
use Illuminate\Support\ServiceProvider;
use Modules\Backend\Repositories\Tenant\CategoryImplement;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryInterface::class, CategoryImplement::class);
        $this->app->bind(CourseInterface::class, CourseImplement::class);
        $this->app->bind(PermissionInterface::class, PermissionImplement::class);
        $this->app->bind(RoleInterface::class, RoleImplement::class);
        $this->app->bind(UserInterface::class, UserImplement::class);
        $this->app->bind(EnrollmentInterface::class, EnrollmentImplement::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
