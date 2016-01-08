<?php

namespace Wtc\Composers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Contracts\Auth\Guard;

class CurrentUserComposer{

    public function compose(View $view){
        $view->with('currentUser', Auth::user());
    }
}