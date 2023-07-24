 <?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    use Symfony\Component\HttpFoundation\Response;
    use App\Models\User;

    class EnsureUserHasRole
    {
        /**
         * Handle an incoming request.
         * @param  \Illuminate\Http\Request $Request
         * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\ RedirectResponse)  $next
         * @return \Illuminate\Http\Response \Illuminate\Http\RedirectResponse
         */
        public function handle(Request $request, Closure $next, $type): Response
        {
            if ($request->user()->type == $type) {
                return $next($request);
            } else {
                abort(401);
            }
        }
    }
