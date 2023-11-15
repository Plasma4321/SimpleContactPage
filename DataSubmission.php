<?php
include "Connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="DataSubmission.css">
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