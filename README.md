
#LaravelblogEngine


LaravelblogEngine is a simple web blog engine and basic content management system.
Its an alternative option to WordPress, aimed for web developers that need to produce a web site for small business owners or blog enthusiasts. Laravel is widely used so system could be further developed by any web developer.

Its written on top of Laravel 11 , using composer to install. A populated composer Json file is present at web root, so it should be relatively easy to update the Laravel core when and if needed and other  software installed using composer. Personally I would manually take out all the ^  carets in the composer.json file , and edit step by step to the  version immediately  after Laravel 11. Otherwise just using  a command composer update will update everything to the most recent, which might result in breaking changes ( i know thats a very common result with codeigniter4, if your not careful)  

When developing in Apache i worked on scss; I have a grunt.js file which converts the custom.scss to custom.css and also moves the updated file to webroot/public.css

Requirements are different for different computer operating systems but if you have npm installed on your system and grunt globally  then from a terminal change directory to web root and run :

	$npm init
	$npm install

That should pull in all dependencies  from the  package.json file which is present at web root 
 
Front end uses Bootstrap and flexbox; breakpoints are present and is mobile responsive.

<img src ="https://andrinaboutique.com/images/tablet.png" height="500px">

For development I left links to go to admin login  url, panel, example fonts etc so i didn't have to remember; you might find them useful as well so i left them in the navbar file which is navbar.blade.php. On live you can take out all links after gallery . 


Its got a simple log in,with captcha for a single admin user.

<img src ="https://andrinaboutique.com/images/log-in-tablet.png" height="500px">

Default login credentials are :

	User:Demo
	Password:Demo
	
When successfully logged in you will see an admin panel on the left giving links to do basic tasks and a holding page on the right like so:


<img src ="https://andrinaboutique.com/images/logged-in-tablet.png" height="500px">
	

They can be changed once you have logged  using the default credentials  Demo and Demo; you will find a reset password link on the admin panel.

New credentials will not take affect until you log out. Password in sqlite3 database is encrypted,if you reset the credentials ,your password will be encrypted for you. When password is entered it compares and takes into account the fact that the password is encrypted .

Ive tested system live and you dont need to touch the path of database in the .env file. With codeIgniter4 you have to set app url, i dont remember needing to do that with Laravel system

Blog and gallery are output with pagination, but you wont see that until there are 7 entries i think i set. 

Now for security to deal with :

	Content-Security-Policy 
	X-Frame-Options 
	X-Content-Type-Options 
	Referrer-Policy 
	Strict-Transport-Security


I set headers using middleware. Now  to block users who can not log in ,i have  a middleware to check for role after setting headers. I tested a live site [https://prophetjonathansam.com/](https://prophetjonathansam.com/)

using this system at : [https://securityheaders.com/](https://securityheaders.com/)
Site gave system an "A". 
<img src ="https://andrinaboutique.com/images/security-headers.png" width="500px">

I didn't tackle the permissions policy; to my understanding thats when you have layers and levels of users; my system is aimed at only one admin user.

Ive tested form pages that submit to do things involving admin class methods;unless logged in nobody on the web should be able to access them. After logging out i noted you can use "back" and the admin panel shows- but try doing anything, by  left  clicking on any link, it wont go anywhere so i dont consider that a security risk.

So basically its a almost running system out of the box. The only key thing you have to attend to is the credentials in the controller , ContactController around lines 75/76.


Those two lines are the credentials for email and password. I just use my googlemail accoiunt to rely emails to another of my accounts if im managing a web. Otherwise edit to use web hosting smtp 

Anyway i'm used to PHPMailer and you can use your web hosting smtp account and credentials

I've left login, logout in the navbar, but you can remove them ,the navbar is a view in resources/view the file is navbar.blade.php. So just edit and take out :

	<li class="nav-item">
    <a class="nav-link" href=" {{ url('blackcat') }}">Login</a>   
    </li>
 
     <li class="nav-item">
      <a class="nav-link" href=" {{ url('logout') }}">Logout</a>   
    </li>
the url for login i have coded to be :

domain/blackcat 
Should be easy to remember, blackcat is the nickname for an English football team.


I have put in the grunt file 2 commands:

grunt sass 
grunt watch
The first one makes sure everything in the custom.scss is converted to css; grunt watch evokes that grunt is on the watch for live changes as you work on the file, and updates custom.css in live time

composer.json is what came with vanilla Laravel; i like PHPmailer so thats in the composer file. Now it might seem a lot 75mb but the node_modules have been left in place. you have exactly what ive been playing with except for .git

So LaravelblogEngine is blog engine basic CMS written on top of Lavavel 11

Readme is a Work in progress

