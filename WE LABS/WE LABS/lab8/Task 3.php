<!DOCTYPE html>
<html>
    <head>
        <title>Components of URL</title>
    </head>
    <body>
        <h1>This document extracts components of a URL</h1>
        <?php 
            $url = "https://www.goodreads.com/fiction";
            echo "The url is: ".$url."<br>";
            $url_parts = array();
            $pos = strpos($url, '/', 0);
           for ($c = 0; $c < 3; $c++) {
                array_push($url_parts, $pos);
                $pos = strpos($url, '/', ++$pos);
            }
            
            // print for validation 
            echo "The scheme is: ".substr($url, 0, $url_parts[0])."<br>";
            echo "The host is:".substr($url, $url_parts[1] + 1, $url_parts[2] - $url_parts[1] - 1)."<br>";
            echo "The path is: ".substr($url, $url_parts[2], strlen($url))."<br>";
        ?>
    </body>
</html>