<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Handle actions after user authentication.
     */
    public function authenticated(Request $request, $user)
    {
        // Set session variable to show welcome modal
        session(['welcome_modal' => true]);
    }
}
