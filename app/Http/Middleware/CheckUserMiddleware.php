<?php namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class CheckUserMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(Auth::user()->active == 0){
			return response('Unauthorized.', 401);
		}
		return $next($request);
	}

}
