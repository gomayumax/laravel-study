<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
{
  /**
   * リクエストフィルターを実行
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   **/
  public function handle($request, Closure $next)
  {
    if ($request->input('age') <= 200) {
      return redirect('success');
    }
    return redirect('');
  }
}
