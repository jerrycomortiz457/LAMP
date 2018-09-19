<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey Result</title>
    <link rel="stylesheet" href="../assets/css/result.css">
</head>
<body>
    <h1>Survey Result</h1>
    <div id="survey_display">
        <h4>Submitted Information</h4>
        <p>Name: <?php echo "<span id='fullname'>{$_POST['full_name']}</span>"; ?> </p>
        <p>Dojo Location: <?php echo "<span id='location'>{$_POST['location']}</span>"; ?></p>
        <p>Favorite Language: <?php echo "<span id='language'>{$_POST['language']}</span>"; ?></p>
        <p>Comment: <?php echo "<span id='comment'>{$_POST['comment']}</span>";?></p>
       <button onclick="history.go(-1);">Go Back</button>
    </div>
</body>
</html>