<?php
   session_start();
   require_once('new-connection.php');
?>
<div>
    <h3>The email address you entered <?= $_SESSION['emailcheck']?> is a VALID email address! Thank You!</h3>
</div>

<div>
    <h2>Email Address Entered:</h2>

<?php
    $query = "SELECT emails.id, emails.email_address, date_format(emails.created_at, '%m/%d/%y %h:%i %p') AS registered_date FROM emails";
    $email_database = fetch_all($query);
    foreach($email_database as $emailadd)
    {
        echo "{$emailadd['email_address']} {$emailadd['registered_date']} <form action='delete.php' method='post'>
        <input type='hidden' name='delete_email' value='{$emailadd['id']}'>
        <input type='submit' value='Delete'>
    </form><br>";
    }
?>    
</div>
<div>
    <form action="reset.php" method="post">
        <input type="submit" value="Reset">
    </form>
</div>