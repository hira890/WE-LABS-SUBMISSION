<!DOCTYPE html>
<html>
    <head>
        <title>Redirect The User</title>
    </head>
    <body>
        <h1>Hello, this web page will be redirected</h1>
        <?php
           header("Location: https://www.goodreads.com/");
           exit; 
        ?>
    </body>
</html>