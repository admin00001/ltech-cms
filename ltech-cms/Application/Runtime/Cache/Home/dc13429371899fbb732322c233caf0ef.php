<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>view pdf</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <input id='path' type='hidden' value="<?php echo ($path); ?>">
        <script>
            var url = document.getElementById("path").value;
            console.log(url);
            window.onload = function(){
                window.location.href=url;//直接在浏览器打开pdf
            };
        </script>
    </body>
</html>