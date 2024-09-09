<?php



$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog_school';


$conn = mysqli_connect($server, $username, $password ,$database);

if (!$conn) {
    echo mysqli_connect_error();
};

function getdata($query) {
    global $conn;
    $results = mysqli_query($conn, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($results)){
        $rows[] = $row;
    };

    return $rows;
}

?>