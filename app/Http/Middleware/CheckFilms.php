<?php

namespace App\Http\Middleware;

use Closure;
use Validator;

class CheckFilms
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
        $params=$request->all();
        if(strlen($params['titre'])<4){
            $validator= Validator::make($params, array());
            $validator->getMessageBag()->add('titre','titre nok !');

            return redirect()->back()->withErrors($validator);
        }
        return $next($request);
    }
}
