<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>




 <link rel="icon" href="{{ asset('laravel.svg') }}">
<link href="{{asset('css/myStyle.css')}}" rel="stylesheet">




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
	<div class="d-flex flex-column mb-3 "  >

	<div class ="headsection"  >  
								 <div class="logo">
									 <img  src ="{{url('images/logo.png') }}" >
								      </div> 			
							    
							   <div class="mx-auto" >
							 <h1 class  ="quintessential" >Laravel 11  CMS </h1> 
							 </div>

                         
					</div>
							
					        
	
	
	
	@include('navbar')

 <div class ="contentsection">
        @yield('content')
    </div>
   <br class="clearfix">
   
  <!--                                        -->
      <div class ="footersection">
				 
				 <div class ="a"> 
				  <a href="https://www.facebook.com"      target="_blank">	<i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>	</a>	 </div>
				 
				<div class="a"><a href ="https://www.tiktok.com" >  
					
				<img   width="50"   <img  src ="{{           url('images/tiktok.svg' )    }}" >
				   
				
				     </a></div>
				 
	           <div class="b">                <a href = "https://www.youtube.com"  target="_blank"    > <i class="fa fa-youtube   fa-3x"></i>	</a></div>
       <div class="a"><a href ="https://www.instagram.com"  target="_blank" ><i class="fa fa-instagram   fa-3x"></i> </a></div>
               
      
      
      
      <div class= "c"><div><h6>powered by:</h6></div> <a class ="andy" href ="https://github.com/captain-sensible/LaravelblogEngine"><h7>Laravel blog Engine</h7></a>    </div>
	
	
	        </div>	
	       <h5 class="newtimes">©Somebody | All Rights Reserved {{ date('d/m/Y ', time()) }} </h5>	
			</div>
			
			</div>
    
    <!--                                            -->
    </div>   <!-- end main div-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
    <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrapbundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"> </script>
      <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
       <script src="{{ asset('js/jquery-migrate-3.3.0.js') }}"></script>
       <script src="{{ asset('js/jquery-migrate.js') }}"></script>
    
 

 
   
   
</body>

</html>

