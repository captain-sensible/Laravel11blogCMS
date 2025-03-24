

  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=" {{ url('home') }}">Home</a>
        </li>
       
       
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('aboutMe') }}">About me</a>   
        </li>
         
         <li class="nav-item">
          <a class="nav-link" href=" {{url('listBlogs') }}">Blogs</a>   
        </li>
        
         <li class="nav-item">
          <a class="nav-link" href=" {{ url('contact') }}">Contact Us</a>   
        </li>
        
        
        
         <li class="nav-item">
          <a class="nav-link" href=" {{ url('listGallery') }}">Gallery</a>   
        </li>
        
        
         <li class="nav-item">
          <a class="nav-link" href=" {{  url('exampleFonts') }}">Fonts</a>   
        </li>
     
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('blackcat') }}">Login</a>   
        </li>
     
         <li class="nav-item">
          <a class="nav-link" href=" {{ url('logout') }}">Logout</a>   
        </li>
     
     <li class="nav-item">
          <a class="nav-link" href="{{ url('admin') }}">Admin</a>   
        </li>
     
     
      </ul>
    </div>
  </div>
</nav>


