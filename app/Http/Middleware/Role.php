<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     // used to create a manipulative middleware
     // allows to create an dpass more arguments into the handle method
     // request is the current request of the system
     // Closure method which will return as the method so the reuqest can be modified

    //  student code
    //  public function handle(Request $request, Closure $next, string $role = 'user')

    // industry code
    public function handle(Request $request, Closure $next, ?string $role = null)
    {
        // in the role.php file in the handlwe fucntion we set the default role as user.
        // in the admin.php in middleware  the 2 params are the auth and the role middleware witht the admin parameter
        // in the role.php we check if the user has the role that we sent and the role is admin ,
        // if we havent set it as admin it is going to be user since it is the default value
        //  the default value is taken if we have not ent the value

        // dd(auth()->user(), $request->user());
        // dd($request,$role);
        // return $next($request);


        //can be used to check if the user is logged in

        //Student code
            // if($request->user() && $request->user()->role===$role){
            //     return $next($request);
            // }
            // return abort(403, 'Unauthorized action');


        // industry code

            if($role === null){
                throw new \InvalidArgumentException('The $role argument is required');
            }

        // passed to the user model in auth/User.php
            if(!$request->user() || !$request->user()->hasRole($role)){
                return abort(403, 'Unauthorized action');
            }
            return $next($request);
    }
}
