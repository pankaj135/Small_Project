<html>
    <body>
        <nav>
            <a href="form.php">form</a>
        </nav>
        <div class='container'>
            <div>
                <table >
                    <tr>
                        <th>
                            User Id
                        </th>
                        
                        <th>
                            Name
                        </th>
                        
                        <th>
                            Email
                        </th>
                        
                        <th>
                            Phone Number
                        </th>
                    </tr>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "first_application";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM user_data";
                    // Execute the SQL query
                    $result = $conn->query($sql);

                    // Process the result set
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                            echo "<tr>
                            <td>
                                $row[id]
                            </td>
                            
                            <td>
                                $row[name]
                            </td>
                            
                            <td class='email'>
                                $row[email]
                            </td>
                            
                            <td>
                                $row[phone_no]
                            </td>
                            
                        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    
                
                ?>

                    

            </table>
        </div>
    </div>
    <style>
        body{
            height:100vh;
            background: rgba(112, 200, 255,0.2);
        }
        table tr th{
            color:white;
            background:wheat;
        }
        .container{
            border-style: solid;
            border-width: 2px;
        }
        table{
            width: 100%;
        }   
        table tr td{
            text-align: center;
            background-color:rgba(0,0,255,0.2); 
        }     
        table tr:hover {
            background-color:wheat;
            color:white;
        }
        table tr:hover{
            color:red;
        }
        table tr:hover .email{
            color:blue;

        }
        nav{
            width: 100%;
            height:5%;
            background: skyblue;
            margin:5px;
            border-radius: 5px;
           
        }
    </style>
    </body>
</html>