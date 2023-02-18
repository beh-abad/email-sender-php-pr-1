<html>
    <head>    
        <title>Checking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="send_results.css"/>
    <head>
    <body>       
            <?php
                $whereToGo= filter_var($_POST['sender'], FILTER_SANITIZE_EMAIL);
                $subjecOfMessage= filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
                $text= filter_var($_POST['text'], FILTER_SANITIZE_STRING);
                if(filter_var($whereToGo, FILTER_VALIDATE_EMAIL))
                {                 
                    mail($whereToGo, $subjecOfMessage, $text);
                    echo "<div class='result_yes'>Message has been sent successfully!</div>";
                }
                else 
                {
                    echo "<div class='result_no'>Message can not be sent!</div>";
                }
            ?>                 
    </body>
</html>