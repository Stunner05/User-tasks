$host = '127.0.0.1'; // or 'localhost'
$db   = 'task_management'; // your database name
$user = 'root'; // your MySQL username
$pass = '';     // your MySQL password
$port = 3307;   // your new MySQL port

// Create connection
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // optional test
?>