<!-- PHP Forms Tutorial: GET & POST Requests in php  -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> Introduction
Usually, a website consists of multiple web pages and some of these pages are linked with each other and need to exchange data between them. In this lesson, you will learn how to send and receive form data between Php pages.

-> There are two methods by which the user can send data to the server.

1. Get Method
2. Post Method

These methods are used for both submitting form data or exchanging the value of variables set in our webpage.


-> What is the Get method in Php?
The get method sends the information of the user with the page request. 
This information can be seen in the URL of the page. 
This information is separated by ? character.

http://www.xyz.com/index.htm?n1=value1&n2=value2

<html>
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>   
   </body>
</html>

Set the method to “Get”

-> Note: $_POST is an associative array in PHP that contains all the information sent through the POST method.


-> What is the Post method in Php?
The post method sends the data to the backend. The information is encoded and put into the header known as QUERY_STRING. 
The user cannot see this information from the URL of the page.

<html>
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
   </body>
</html>

All you have to do is to set the method to “Post”. 
$_PHP_SELF is a special variable that contains the name of the current PHP page.

-> Note: $_GET is an associative array in PHP that contains all the information sent through GET method.


-> Comparison of Post and Get method – Advantages/Disadvantages
By the GET method, only 1024 characters of information can be sent. 
Whereas the POST method does not have any restriction.

As the information exchanged by using the GET method can be seen through the URL of the page. 
It is not recommended to use the GET method for passing sensitive data like passwords.

In the POST method, the information goes through the HTTP header. So, the security depends on HTTP protocol.

The POST method can send both binary and ASCII data. On the other hand, the GET method cannot be used to send binary data like documents, images, etc.


-> How to handle GET and POST methods in PHP
PHP provides $_REQUEST variable that allows to access the contents of both POST and GET methods. 
Refer to the example below to access the data of the above example forms.

if ($_REQUEST["name"] || $_REQUEST["age"]) {
    echo "Welcome " . $_REQUEST['name'] . "<br />";
    echo "You are " . $_REQUEST['age'] . " years old.";
}

The if statement checks if there is a name or age variable received.

You can use the $_SERVER['REQUEST_METHOD'] to check if the data is received through GET or POST method.

$_SERVER['REQUEST_METHOD'] == 'POST'
$_SERVER['REQUEST_METHOD'] ==  'GET'

-> Tip: You can refer to https://getbootstrap.com/docs/4.5/getting-started/introduction/ to get the Responsive Forms, Alert boxes, and much more codes for your webpa
 -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Get and post!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Get/Post</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/cwhphp/21_Get_Post.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your email ' . $email . ' and password ' . $password . ' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
        // Submit these to a database
    }


    ?>

    <div class="container mt-3">
        <h1>Please enter your email and password</h1>
        <form action="/cwhphp/21_Get_Post.php" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>