<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">
    <style>

*{
  font-family:'Nunito Sans', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background-color:#f3ebeb;
}

.container form{
  padding:20px;
  width:700px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  border-radius: 3px;
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:8px;
  border-radius: 3px;
  padding-left: 270px;
  padding-right:270px;
  font-size: 17px;
  text-decoration: none;
  background: #27ae60;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #2ecc71;
}
    </style>

</head>
<body>

<div class="container">

    <form action="">

        <div class="row">
            <div class="col">

                <h3 class="title">payment</h3>

   
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Your Name">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="text" class="card-no" maxlength="19">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="number" min="1" max="12" placeholder="12">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="password" maxlength="3" placeholder="***">
                    </div>
                </div>
                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="assets/images/card_img.png" alt="">
                </div>

            </div>
    
        </div>
        
        <a href="confirm.php" class="submit-btn">Proceed to Pay</a>
    

    </form>
    <script>
    const inputField = document.querySelector('.card-no');

    inputField.addEventListener('input', function() {
      let inputValue = this.value.replace(/\D/g, ''); // Remove non-numeric characters

      // Add hyphens every 4 digits, not exceeding a total of 19 characters
      inputValue = inputValue.replace(/\B(?=(\d{4})+(?!\d))/g, '-').slice(0, 19);

      this.value = inputValue;
    });
  </script>
</div>    
</body>
</html>