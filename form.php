<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<form  method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group" style="float: right;">
                <input type="submit" onClick="sendQuery()" value="Send Your Query">
                <!-- <button class="btn" onClick="sendQuery()">Send Your Query</button> -->
                </div>
            </form>
            
</body>
</html>
<?php     
$to_email = 'ziarushda@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: ziarushda@gmail.com';
mail($to_email,$subject,$message,$headers);
?>