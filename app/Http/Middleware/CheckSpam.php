<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use  Illuminate\Support\Facades\Route;

use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use \App\Http\Controllers\ContactController;



class CheckSpam
{
   
protected $keywords = array('zināt','http','https', 'www','//', 'viagra','vildi','late client','.com','.net','promotion', 'app','free consultation','Toenail Clippers','free shipping','free shipping !','Ã','YouTube','Î','É','Salam','Zdravo','cijenu','kainÄ','prys','Ciao','prezzo','Ÿ','të','የእርሱ','التابع', 'এর', '的'	, 'của', 'ของ');
protected $commentText;
protected $logic;
protected $hasKeyword;			
protected $email;
protected $data;
protected $inputString;
protected $inputName;    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
				 
				  
				   $this->data= $request;
				   $this->inputString =$this->data->message;
				   $this->inputName= $this->data->name;
				
				
				
				   
				  
				  
				 				

				
				foreach($this->keywords as $keyword)
					 {
									  if(   (  str_contains($this->inputString,$keyword)  ) OR   (  str_contains($this->inputName,$keyword)                  )  )
								 
								 

								
							{
							// basically below has to be defined in routes 	
							
								 return redirect()->action([\App\Http\Controllers\ContactController::class, 'spam']);
								
								 }
					 
					}
        return $next($request);
    }
}//end class 

