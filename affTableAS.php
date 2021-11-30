<?php
$servername = "localhost";
$username = "alexis.s";
$password = "alexis.SQL@011012";
$database = "ma_base";
$con=mysqli_connect($servername,$username,$password,$database);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//afficher tableaux
$result = mysqli_query($con,"SELECT * FROM test");

echo "<table border='1'>
<tr>
<th>id</th>
<th>nom</th>
<th>prenom</th>
<th>pw</pw>
<th>ages</pw>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['prenom'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['ages'] . "</td>";
echo "</tr>";
}
echo "</table>";
//fin tableau
$reponse = $con->query("SELECT avg(ages) FROM `test`;");
$result = mysqli_fetch_assoc($reponse);
print ("la moyen est :".$result["avg(ages)"]);

echo $donnée;
mysqli_close($con);
?>
