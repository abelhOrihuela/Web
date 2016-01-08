<?php

namespace Wtc\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Wtc\User;

class TypeUserMiddleware
{
  /**
   * The Guard implementation.
   *
   * @var Guard
   */
  protected $auth;

  /**
   * Create a new filter instance.
   *
   * @param  Guard  $auth
   * @return void
   */
   public function __construct(Guard $auth)
   {
       $this->auth = $auth;
   }

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {

    if ($this->auth->guest()) {
        return redirect()->guest('auth/login');
    }else{
      if ( Auth::user()->type == 0 ) {
        return redirect()->guest('Vacantes');
      }
    }

    return $next($request);
  }
}
