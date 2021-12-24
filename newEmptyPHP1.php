<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php    
if (isset ($_FILES['image'])){
echo 'yes';


} else {    
echo 'no';      
}

?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
 <form action=""  method="post" enctype="multipart/form-data" class="contact-form">
   <form action=""  method="post" enctype="multipart/form-data" class="contact-form">


   <label for="title"><strong>Title</strong> (required)</label>
   <input type="text" name="title" value="" required>


   <label><span class="small"><strong>Add a photo</strong></span></label>
   <input type="file" name="image"/>


   <input type="submit" name"submit" value="Submit">    
   </form>
    </body>
</html>
