<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Redirect;
class socialController extends Controller
{
    //

    public function redirect($service) {
        return Socialite::driver ( $service )->redirect ();
    }

    public function callback($service) {
        $user = Socialite::with ( $service )->user ();
        return view ( 'welcome' )->withDetails ( $user )->withService ( $service );
    }
}
