<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Scheduling;

class RegMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
     
        $schedules = Scheduling::all();

        //If Scheduling Table is Null
        if($schedules->isEmpty())
        {          
            //return redirect('/');

            echo "<script>
            alert('You are not allowed to visit this page now');
            window.location.href='http://localhost/final_year_project/public/';
            </script>";
        }

        return $next($request);
    }
}
