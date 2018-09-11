<?php

namespace App\Http\ViewComposers;

use App\Bike;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Users\Repository as UserRepository;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(User $user)
    {
        // Dependencies automatically resolved by service container...
        $this->is_user_logged_in = Auth::check();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('is_user_logged_in', $this->is_user_logged_in);
    }
}