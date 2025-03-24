<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetSecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Content Security Policy
    
         $response->headers->set('Content-Security-Policy' ,"default-src 'none'; form-action 'self'; frame-src 'self'  https://www.juicer.io/api/feeds/prophetjonath/iframe?  www.tiktok.com www.youtube.com;    style-src 'self' maxcdn.bootstrapcdn.com  cdn.jsdelivr.net       ; font-src 'self'   maxcdn.bootstrapcdn.com ;  img-src 'self'; script-src 'self'  https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js   https://www.xml-sitemaps.com/");
    

        // X-Frame-Options
        $response->headers->set('X-Frame-Options', 'DENY');

        // X-XSS-Protection
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // X-Content-Type-Options
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Referrer Policy
        $response->headers->set('Referrer-Policy', 'no-referrer');
        
         $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');

         
        
        
        
        return $response;
    }

}
