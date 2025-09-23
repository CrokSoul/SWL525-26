<?php
echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>";
echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js' integrity='sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI' crossorigin='anonymous'></script>";

	$servername = "localhost";
	$username = "MishaDB";
	$password = "8uekc55p2vlvPN";
	$dbname = "MishaDB";
	$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully ";

$sql = "SELECT id, name, email FROM tblUsers";
$result = $conn->query($sql);

?>

<?php
class User {
public $name;
public $email;
  
function __construct($name, $email) {
$this->name = $name;
$this->email = $email;
}

function display() {
echo "name: $this->name, email: $this->email";
}
            
}
$user = new User("John", "john@example.com");
$user->display();
?> 

<table class='table table-dark table-hover'>
  
  <tr>
  	<th>ID</th>
  	<th>Name</th>
  	<th>Email</th>
  </tr>
<?php
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
      
      echo "
      <tr>
  		<td>".$row["id"]."</td>
  		<td>".$row["name"]."</td>
  		<td>".$row["email"]."</td>
      </tr>
      		";
	}
} else {
	echo "0 results";

}
$conn->close();
?> 
  
  
<html>

  <head>
    <title>The first web page</title>

  </head>

  <body>
    <h1>Hello from NCG</h1>
    
  </body>

</html>