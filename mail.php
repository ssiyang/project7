<?php

    if (isset($_POST["submit"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass1 = $_POST["pass1"];
        $pass2 = $_POST["pass2"];
        $message = $_POST["message"];

        $errorEmpty = false;
        $errorEmail = false;
        $errorPass = false;

        if (empty($name) || empty($email) || empty($pass1) || empty($pass2) || empty($message)) {

            echo "<span class='form-error'>&#35531;&#36664;&#20837;&#23436;&#25972;&#36039;&#35338;</span>";
            $errorEmpty = true;

        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            echo "<span class='form-error'>&#35531;&#36664;&#20837;&#27491;&#30906;&#26684;&#24335;&#30340;&#37109;&#31665;&#22320;&#22336;</span>";
            $errorEmail = true;

        } elseif ($pass1 != $pass2) {

            echo "<span class='form-error'>&#35531;&#30906;&#35469;&#24744;&#36664;&#20837;&#30456;&#21516;&#30340;&#23494;&#30908;</span>";
            $errorPass = true;

        } else {

            echo "<span class='form-success'>&#37109;&#20214;&#30332;&#36865;&#25104;&#21151;</span>";

        }


    } else {
        $mailToname = "brian.com";
        $mailTo = "brian19960@hotmail.com";
        $mailFromname = $name;
        $mailFrom = $email;
        $mailSubject = "&#32178;&#31449;&#32879;&#32363;&#34920;&#21934;";
        $mailContent = "&#22995;&#21517;: ".$name.
        "&#20449;&#24687;&#20839;&#23481;: ".$message;

        if (mail($mailTo, $mailSubject, $mailContent, $mailFrom)) {

        echo "<span class='form-error'>&#32178;&#36335;&#37679;&#35492;, &#35531;&#31245;&#24460;&#20877;&#35430;</span>";

        } else {

            echo "<span class='form-error'>&#37109;&#20214;&#30332;&#36865;&#22833;&#25943;</span>";

        }


    }


?>

<script>

    $("#email-name, #email-address, #pass1, #pass2, #mail-message").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";
    var errorPass = "<?php echo $errorPass; ?>";

    if (errorEmpty == true) {

        $("#email-name, #email-address, #pass1, #pass2, #mail-message").addClass("input-error");

    }

    if (errorEmail == true) {

        $("#email-address").addClass("input-error");

    }

    if (errorPass == true) {

        $("#pass1, #pass2").addClass("input-error");

    }

</script>
