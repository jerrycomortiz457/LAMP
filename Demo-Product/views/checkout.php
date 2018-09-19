<?php
    session_start();
?>

<p>Hi <?= $_SESSION["name"]?>! Thanks for purchasing <?= $_SESSION["quantity"]?> '<?= $_SESSION["item"]?>'.</p>
<p>An email will be sent to <?= $_SESSION["email"]?>!</p>