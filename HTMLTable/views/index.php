<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Table</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>
      <table>
        <thead>
            <tr>
                <th>User #</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Full Name</th>
                <th>Full Name in upper case</th>
                <th>Length of full name <span class="normal_font">(without spaces)</span></th>
            </tr>
        </thead>
        <tbody>            
            <?php
             $users = array( 
                array('first_name' => 'Michael', 'last_name' => 'Choi'),
                array('first_name' => 'John', 'last_name' => 'Supsupin'),
                array('first_name' => 'Mark', 'last_name' => 'Guillen'),
                array('first_name' => 'KB', 'last_name' => 'Tonel'),
                array('first_name' => 'Spongebob', 'last_name' => 'Squarepants'),
                array('first_name' => 'Patrick', 'last_name' => 'Starfish'),
                array('first_name' => 'Sandy', 'last_name' => 'Squirrel'),
                array('first_name' => 'Plankton', 'last_name' => 'Plank'),
                array('first_name' => 'Ryan', 'last_name' => 'Guerra'),
                array('first_name' => 'Demy', 'last_name' => 'Balanza'),
                array('first_name' => 'Jhaver', 'last_name' => 'Gurtiza'),
                array('first_name' => 'Jerwin', 'last_name' => 'Fernandez'),
                array('first_name' => 'Jaybee', 'last_name' => 'Balog'),
                array('first_name' => 'Jan Dreau', 'last_name' => 'Ganggangan')                
                );               
            $userid = 1;
                for ($idx = 0; $idx < count($users);$idx++,$userid++)
                {
                    $full_name = $users[$idx]['first_name'].' '.$users[$idx]['last_name'];
                    $length_of_full_name = strlen(str_replace(' ', '', $full_name));                                 
                    echo "<tr><td>{$userid}</td><td>{$users[$idx]['first_name']}</td><td>{$users[$idx]['last_name']}</td><td>{$full_name}</td><td>".strtoupper($full_name)."</td><td>".$length_of_full_name."</td></tr>";                 
                }                
            ?>         
        </tbody>
    </table>

</body>
</html>