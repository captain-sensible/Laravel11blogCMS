@extends('mastertemplate')

@section('content')
<br><br>
<blockquote class= "prophet">
<h4 class ="antic">List of blogs as follows :</h4>
 
 <br><br>
  </blockquote>

@foreach($blogs as $output)



 <blockquote class= "prophet">
  
  <a href="{!! url('blogArticle/'.$output->slug) !!} "><h4> {{$output->title}}</a>  
  
  
  
  </h4>
   
 </blockquote>  
      
    
  
   
   
    @endforeach
.<br><br><Br>
<h5>{{ $blogs->links()  }} </h5>
@endsection

 
