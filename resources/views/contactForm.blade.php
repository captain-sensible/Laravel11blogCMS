@extends('mastertemplate')

@section('content')
<div class ="ms-2">If you use the form below entering your name , your email address and your message, then the data from the form will 
be emailed to one of our admin. So we are asking for your email so we can get back to you. If you do not have an email or wish to use your mobile then just put a 
dummy generic email like <b>johndoe@gmail.com</b>  in the email text input field , and remember to let us know your location ( or use full Country Code for number) and<b> leave your mobile number </b>in the message section 



 <br><br>
<form method="POST" action="/contact">
    @csrf
   
   <div class=  "mx-3"> 
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"  class="form-control"  value="{{ old('name') }}"  required><br>
    
    </div>
    
   
    
    <div class= "mx-3"> 
    <label for="email">Email:</label><br>
    <input type="email" id="email"  class="form-control "  name="email" value="{{ old('email') }}"    required><br>
    </div>
    
    <div class="  mx-3"> 
    <label for="message">Message:</label><br>
    <textarea id="message"  class="form-control" name="message" required>{{ old('message') }}</textarea><br>
   </div>
    
    <div class="form-group  ms-2"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
   
    
</form>
</div>
@endsection
