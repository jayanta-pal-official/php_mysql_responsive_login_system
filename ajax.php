<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <style>
        .delete-btn{
            background: red;
            color: black;
            border-radius: 8px;
            cursor: pointer;
        }
        .edit-btn{
            background: green;
            color: whitesmoke;
            border-radius: 8px;
            cursor: pointer;
        }
        #model{
            background:rgba(0, 0, 0, 0.7);
            position:fixed;
            left:0;
            top:0;
            width:100%;
            height:100%;
            z-index: 100;
            display: none;
        }
        #modelBox{
            background:#fff;
            width: 30%;
            position: relative;
            top:20%;
            left:calc(50% - 15%);
            padding:15px;
            border-redius:4px;
        }

        table {
    margin: 0px;
      border-collapse: collapse;
      width: 100%;
      font-family: 'Montserrat', sans-serif;
      margin-top: 10px;
    }
    
    th, td {
      text-align: center;
      padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    tr:hover {background-color:#76D7C4;}
    
    th {
      background-color: #4CAF50;
      color: white;
    }
        </style>
<div id="model">
<div id="modelBox">
    <h2>Edit Form</h2>
</div>
</div>

    <script src="JS/ajax.js"></script>
    <script src="JS/jquery-3.6.4.min.js"></script>
</body>
</html>
<?php
include "_dbconnect.php";
$sql = "SELECT *FROM employee";
$results = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if (mysqli_num_rows($results) > 0) {
    echo '<table border="1" width="100%" cellspacing="0" cellpadding="10px">';
       echo "<tr>";
        echo "<th align = 'center'>ID</th>";
         echo "<th align = 'center'>First Name</th>";
         echo "<th align = 'center'>Last Name</th>";
         echo "<th align = 'center'>Username</th>";
         echo "<th align = 'center'>Email</th>";
         echo "<th align = 'center'>Phone Number</th>";
         echo "<th align = 'center'>Gender</th>";
         echo "<th align = 'center'>Image</th>";
         echo "<th align = 'center'>Date</th>";
         echo "<th align = 'center'>Edit</th>";
         echo "<th align = 'center' width='50px'>Delete</th>";
         echo "</tr>";
        $number=1;
    while ($row = mysqli_fetch_array($results)) {
       echo "<tr>";
       echo "<td>$number</td>";

       echo "<td>{$row["firstname"]}</td>";

       echo "<td>{$row["lastname"]}</td>";

        echo "<td>{$row["username"]}</td>";

        echo "<td>{$row["email"]}</td>";

        echo "<td>{$row["phone_number"]}</td>";

        echo "<td>{$row["gender"]}</td>";

        echo "<td>"."<img src=".$row['image'].' width=100px height="100px">'."</td>";

        echo "<td>{$row["date"]}</td>";

        echo "<td><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td>";

        echo "<td><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td>";
        echo "</tr>";
        $number++;
    }
    echo "</table>";
    mysqli_close($conn);
    
} else {
    echo " <h2> no record found</h2>";
}
?>