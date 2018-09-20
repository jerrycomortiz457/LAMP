<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Address Validated</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php
    session_start();
    require_once('new-connection.php');
    ?>
    <div id="email_valid_notification">
        <h3>The email address you entered <?= $_SESSION['emailcheck']?> is a VALID email address! Thank You!</h3>
    </div>

    <div id="email_table">
        <h2>Email Address Entered</h2>
        
        <table>
    <?php
        $query = "SELECT emails.id, emails.email_address, date_format(emails.created_at, '%m/%d/%y %h:%i %p') AS registered_date FROM emails";
        $email_database = fetch_all($query);
        foreach($email_database as $emailadd)
        {
            echo "<tr>
                  <td>{$emailadd['email_address']} </td> 
                  <td>{$emailadd['registered_date']} </td>
                  <td> <form action='delete.php' method='post'>
            <input type='hidden' name='delete_email' value='{$emailadd['id']}'>
            <input type='submit' value='Delete'>
            </form></td></tr>";
        }
    ?>   
        </table>
    </div>
    <div id="resetarea">
        <h4>Delete and reset all data in the email address database</h4>
        <form action="reset.php" method="post">           
            <input type="submit" value="Reset" name="reset" id="reset">
        </form>
        <form action="back.php" method="post">           
            <input type="submit" value="Back" name="back" id="back">
        </form>
    </div>
</body>
</html>

