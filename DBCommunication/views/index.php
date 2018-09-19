<?php
// index.php
// include connection page
require_once('new-connection.php');
// get a single record from the interests table joining musics
$query = "SELECT interests.color, musics.name AS music, interests.file_path 
          FROM interests
          LEFT JOIN musics ON interests.music_id = musics.id LIMIT 1";
// since we've included the connection page, we can use the $connection variable
$result = fetch_record($query);
?>
    <div>
      <h3>Favorite Color: <?= $result['color'] ?></h3>
      <h3>Favorite Music Type: <?= $result['music'] ?></h3>
      <img src="<?= $result['file_path'] ?>">

<?php

// get multiple records from the table interests
    $query = "SELECT interests.color, musics.name AS music, interests.file_path 
            FROM interests
            LEFT JOIN musics ON interests.music_id = musics.id";
    $results = fetch_all($query);
    foreach($results as $row)
{
?>
    <div>
        <h3>Favorite Color: <?= $row['color'] ?></h3>
        <h3>Favorite Music Type: <?= $row['music'] ?></h3>
        <img src="<?= $row['file_path'] ?>">
    </div>
<?php
}
?>
