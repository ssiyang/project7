
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>驗證表單 (PHP)</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <style>

      body {

        background-color: #F2F3F5;

      }

      #container{

        padding-top: 80px;
        width: 600px;
        margin: auto;
        font-family: "Helvetica Neue", "Helvetica", "Arial";

      }

      .input-style{

        border-radius: 5px;
        border: 1px solid grey;
        font-size: 1.1em;
        padding-left: 20px;
        margin-bottom: 10px;
      }

      .input-width {

        width: 300px;
        height: 40px;

      }

      #mail-gender {

        width: 323px;
        height: 40px;

      }

      label {

        width: 200px;
        float: left;
        font-size: 1.2em;
        padding-top: 8px;

      }

      #mail-message {

        width: 500px;
        padding-top: 5px;

      }

      #submitButton {

        background-color: #AA47BC;
        color: white;
        width: 523px;
        height: 40px;

      }

      #error {

          color: red;

      }

    </style>
</head>

<body>

  <div id="container">
    <form id="validationForm">
      <label for="email-name">姓 名</label>
      <input id="email-name" class="input-style input-width" type="text" name="name" placeholder="請輸入您的姓名">

      <label for="email-address">電子郵箱</label>
      <input id="email-address" class="input-style input-width" type="text" name="email" placeholder="請輸入您的郵箱">

      <label for="mail-gender">姓 別</label>
      <select id="mail-gender" class="input-style" name="gender">
        <option value="male">男 性</option>
        <option value="famale">女 性</option>
      </select>

      <label for="pass1">密 碼</label>
      <input id="pass1" class="input-style input-width" type="password" name="pass1" placeholder="密 碼">

      <label for="pass2">確認密碼</label>
      <input id="pass2" class="input-style input-width" type="password" name="pass2" placeholder="確認密碼">

      <textarea id="mail-message" class="input-style" name="message" rows="8" cols="80" placeholder="請描述您的狀況"></textarea>

      <button id="submitButton" class="input-style" type="submit" name="submit">發送郵件</button>

    </form>

    <div id="error">

    </div>


  </div>


  <script type="text/javascript">

    $("#validationForm").submit(function(event) {

      var errorMessage = "";

      event.preventDefault();

      var name = $("#email-name").val();
      var email = $("#email-address").val();
      var pass1 = $("#pass1").val();
      var pass2 = $("#pass2").val();
      var message = $("#mail-message").val();

       $("#error").load("mail.php", {
      
        name : name,
        email : email,
        pass1 : pass1,
        pass2 : pass2,
        message : message,
        submit : submit,  
      
      });

    });


  </script>


</body>
</html>
