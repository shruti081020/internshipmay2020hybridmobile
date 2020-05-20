<h3>
<?php
echo "HTTP_HOST= ".$_SERVER['HTTP_HOST']."<br>";
echo "HTTP_USER_AGENT= ".$_SERVER['HTTP_USER_AGENT']."<br>";
echo "PHP_SELF= ".$_SERVER['PHP_SELF']."<br>";

function showbrowser(){
     return $_SERVER['HTTP_HOST'];
     return $_SERVER['HTTP_USER_AGENT'];
     return $_SERVER['PHP_SELF'];
}

?>
</h3>
<html>
    <body>
<h2>YOU ARE USING <?php ECHO showbrowser(); ?></h2>
</body>
    </html>
