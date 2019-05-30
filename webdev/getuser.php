<link rel="stylesheet" href="style.css">

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','techkrunch-ajax');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
ECHO "<DIV>";
echo "<table class='pure-table'>
<tr>
<th>Usernames</th>
<th>Password</th>
<th>Name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div";
mysqli_close($con);
?>