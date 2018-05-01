<?php
namespace EddiesBlog\Http\Middleware;
use Closure;

class TerminateMiddleware 
{
   public function handle($request, Closure $next)
   {
      echo "Executing statements of handle method of TerminateMiddleware.<br />";
      
      return $next($request);
   }
   
   public function terminate($request, $response)
   {
      echo "<br />Executing statements of terminate method of TerminateMiddleware.";
   }
}