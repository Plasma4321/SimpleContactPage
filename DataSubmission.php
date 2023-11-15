<?php
include "Connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #4caf50;
        }
        p{
            font-weight: bold;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .form-container {
            background-color: rgb(201, 43, 43);
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            width: 80%;
            height: 60%;
        }

        .form-container .form-image {
            flex: 1;
            background: url('laugh.png') center/cover no-repeat ;
            position: relative;
        }

        .text_on_pic{
            top: 10%;
            position: absolute;
            width: 100%;
            text-align: center;
            justify-content: center;
        }

        .info {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .info i {
            margin-right: 10px;
        }

        .form-container .form-content {
            flex: 1;
            padding: 20px;
        }

        .form-container form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-container label, .form-container input, .form-container button {
            display: block;
            margin-bottom: 15px;
        }
        .form-container input, .form-container textarea{
            width: 70%;
        }

        .form-container button {
            margin: 1%;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 70%;
        }
        
    </style>
    <title>Contact Submit Page</title>
</head>
<body>



<div class="container">
    <div class="form-container">
        <div class="form-image">
            <div class="text_on_pic">
                <h2>Address</h2>
                <div class="info">
                    <i class="icon fas fa-map-marker-alt"></i>
                    <p>Bangladesh, Dhanmondi</p>
                </div>
                <h2>Phone</h2>
                <div class="info">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <p >+880 123456789</p>
                </div>
                <h2>Support</h2>
                <div class="info">

                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                    <a href="mailto:tahmidhosssainjit@gmail.com?subject=NeedHelp&body=whatiwanttotypeis">tahmidhosssainjit@gmail.com</a>
                </div>
            </div>
        </div>


        <div class="form-content">
            <h2>Send Us A Message</h2>
            <form action="submit_handler.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="Phone">Phone:</label>
                <input type="text" id="Phone" name="phone" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>