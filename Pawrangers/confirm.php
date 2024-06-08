<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Confirm</title>
<link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">
<style>
    *{
        font-family:'Nunito Sans', sans-serif;
    }
    .payment-success {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 10px rgba(0,0,0,.1);
        color: black;
        padding: 20px;
        margin: 5% auto;
        width: 30%;
        text-align: center;
    }
</style>
<script>
    setTimeout(function() {
        window.location.href = 'index.php'; 
    }, 10000); 
</script>
</head>
<body>
    <div class="payment-success">
        <img src="assets/images/approved-aproved-confirm-2-svgrepo-com.svg" width="100px" height="100px">
        <h2>Payment Successful!</h2>
        <p>Thank you, your payment has been successful. A confirmation email has been sent to your mail.</p>
        <p>Redirecting to another page.. if not working, <a href="index.php">click here</a></p>
    </div>
</body>
</html>
