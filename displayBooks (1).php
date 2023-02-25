<!DOCTYPE HTML>
<html>
    <body bgcolor="#f5776e">
    <center><h2>Library Management System</h2></center>
    <br>
 
    <?php
    $con = Mysqli_connect("localhost","root","","mydb");
	if(!$con){
	 echo "Connection Error";
	} 
 
    $search = $_REQUEST["search"];
 
    $query = "select Accession_number,Title,Author,Edition,Publication from books where title like '%$search%'";
    $result = mysqli_query($con,$query);
 
    if(mysqli_num_rows($result)>0)
    {
    ?>
 
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> Accession_number </th>
            <th> Title </th>
            <th> Author </th>
            <th> Edition </th>
            <th> Publication </th>
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row["Accession_number"];?> </td>
            <td><?php echo $row["Title"];?> </td>
            <td><?php echo $row["Author"];?> </td>
            <td><?php echo $row["Edition"];?> </td>
            <td><?php echo $row["Publication"];?> </td>
        </tr>
        <?php
        }
        }
        else
        echo "<center>No books found in the library by the name $search </center>" ;
        ?>   
    </table>
    </body>
</html>