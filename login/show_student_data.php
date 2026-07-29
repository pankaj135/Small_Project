<html>
    <body>
        <table border=1>
            <tr>
                <th>
                    rollno
                </th>
                
                <th>
                    Name
                </th>
                
                <th>
                    Phone no
                </th>
                
                <th>
                    password
                </th>
            </tr>
        
        

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cm";

        $id = $_GET['id'];


        $conn = mysqli_connect($servername, $username, "", $dbname);
        $sql = "SELECT * FROM register where id=$id ;" ;



        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $rs=mysqli_query($conn,$sql);


            while($row = mysqli_fetch_array($rs)) {
                echo "<tr>
                <td>
                $row[id]
                </td>
                <td>
                 $row[name]
                 </td>
                 <td>
                 $row[phone_no]
                 </td>
                 <td>
                 $row[password]
                 </td>"
                 ;
            }
    
        echo"</table>"
        
        ?>

    </body>
</html>