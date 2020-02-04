# More Practice With Basic MVC

This practical provides further practice using the ideas we looked at last week; moving from flat PHP files to an MVC structure. This time we will look at a user authentication example.

* Put the PHP files on a web server. You should recognise this example, it is the simple user authentication example we looked at in term 1.

* Have a look at the file called *auth-fns.php*. This file contains a series of functions to help with authentication tasks e.g. *login()*, *logout()*, *isLoggedIn()*, *getUser()*. Here's the *login()* function:
```php
function login($username,$password){
    if($username==="testuser" && $password === "letmein")
    {
        $_SESSION["username"]=$username;
        return true;
    }else{
        return false;
    }
}
```

* Modify the other PHP files to use the *auth-fncs.php* file, just like we did with the film model last week. For example in *login.php* you might have some code like the following:
```php
...
include "auth/auth-fncs.php"; //include auth-fncs.php
session_start();
if(isset($_SESSION["username"]))
{
	header( "Location: index.php" ); //they are logged in, send them to the homepage
};
if(isset($_POST['login'])) //they have submitted the login form
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(login($username,$password)){ //use the auth-fncs.php login function
	    header( "Location: index.php" ); //successful login go to the home page
	}else{
	    $error_msg="Wrong login details."; //incorrect username or password
	}
}
```

* Try and use other functions from *auth-fncs.php* (*logout()*, *isLoggedIn()*, *getUser()*) in the other pages.
* Refactor each of the pages to use separate view files.

>Why haven't we named *auth-fncs.php* *auth-model.php*? This is because the model layer is concerned with business logic. Authentication is really about web application logic. It makes sense to separate out authentication to help organise our code and remove duplication, but it isn't really a model.
