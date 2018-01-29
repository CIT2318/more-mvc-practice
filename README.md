# More Practice With Basic MVC

This practical provides further practice using the ideas we looked at last week; moving from flat PHP files to an MVC structure. This time we will look at a user authentication example. 

* Put the PHP files on a web server. You should recognise this example, it is the simple user authentication example we looked at in term 1. 

* Create a file called *auth-fns.php*. This file will contain a series of functions to help with authentication tasks e.g. *login()*, *logout()*, *isLoggedIn()*, *getUser()*. Here's a *login()* function to get you started:
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

* Modify the other PHP files to use the *auth-fncs.php* file. For example in *login.php* you might have some code like the following that uses *auth-fns.php*:
```php
...
$username=$_POST['username'];
$password=$_POST['password'];
if(login($username,$password)){ 
    header( "Location: index.php" ); //successful login go to the home page
}else{
    $error_msg="Wrong login details."; //incorrect username or password
}
...
```

* Split the *login.php* file into a controller (*login.php*) and a view (*login-view.php*).
* Try and implement other authentication functions (*logout()*, *isLoggedIn()*, *getUser()*) and refactor each of the pages to use separate view files. 

>Why haven't we named *auth-fncs.php* *auth-model.php*? This is because the model layer is concerned with business logic. Authentication is really about web application logic. It makes sense to separate out authentication to help organise our code and remove duplication, but it isn't really a model. 
