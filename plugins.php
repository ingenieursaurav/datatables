<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="thou";

$conn = mysqli_connect($servername, $username, $password);

mysqli_select_db($conn,$databasename);
$q= mysqli_query($conn," SELECT * FROM csv");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>data</title>
    <script type="text/javascript" language="javascript" src="../datatables/DataTables-1.10.7/media/js/jquery.js"></script>
    
    <script type="text/javascript" language="javascript" src="../datatables/DataTables-1.10.7/media/js/jquery.dataTables.min.js"></script>
		
    <script type="text/javascript" language="javascript" src="../datatables/DataTables-1.10.7/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
	
		
	
	
	 	 <link rel="stylesheet" href="../datatables/DataTables-1.10.7/media/css/jquery.dataTables.min.css">
		 <link rel="stylesheet" href="../datatables/DataTables-1.10.7/extensions/TableTools/css/dataTables.tableTools.min.css">
		 
		<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.min.css">
    

		 
<script type="text/javascript" charset="utf-8">
        
            
            $(document).ready( function () {
    $('#one').dataTable( {
        "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "DataTables-1.10.7/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
        }
    } );
} );
            
            

        </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $('#one').dataTable();

        })

        </script>
</head>
<body >
<div>
    <table id="one" border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>street</th>
            <th>city</th>
            <th>zip</th>
            <th>state</th>
            <th>beds</th>
            <th>bath</th>
            <th>squ</th>
            <th>type</th>
            <th>sale</th>
            <th>price</th>
            <th>latitude</th>
            <th>longitude</th>
            <tbody>
        <?php
        //ini_set('max_execution_time', 3000);
        while ($row= mysqli_fetch_array($q))
        {
        ?>
        <tr>
            <td><?php echo '$'.number_format($row['id'],2);?> <br> </td>
            <td><?php echo $row['street']; ?> <br> </td>
            <td><?php echo $row['city'];?> <br> </td>
            <td><?php echo $row['zip'];?> <br> </td>
            <td><?php echo $row['state'];?> <br> </td>
            <td><?php echo $row['beds']; ?> <br> </td>
            <td><?php echo $row['bath'];?> <br> </td>
            <td><?php echo $row['squ'];?> <br> </td>
            <td><?php echo $row['type'];?> <br> </td>
            <td><?php echo $row['sale']; ?> <br> </td>
            <td><?php echo $row['price'];?> <br> </td>
            <td><?php echo $row['latitude'];?> <br> </td>
            <td><?php echo $row['longitude'];?> <br> </td>

        </tr>
        <?php
        }
        ?>

        </tbody>
        </tr>
        </thead>
    </table>
    </div>

</body>
</html>