<html>
    <body>
        
    <div class="main_container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cm";

        $id = $_GET['username'];
        
        $pass = $_GET['password'];



        $conn = mysqli_connect($servername, $username, "", $dbname);
        $sql = "SELECT id ,password FROM register where id=$id ;" ;



        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $rs=mysqli_query($conn,$sql);


            while($row = mysqli_fetch_array($rs)) {
                $pass_db="$row[password]";
                // echo "$pass_db";
                if($pass_db==$pass){
                    echo "password is right";
                }else{
                    echo "password is worng";
                }
                
            }
        
        ?>

        <table border="1">
                <form action="result_db.php">
                <tr>
                    <th colspan=2>
                        Dashboard

                    </th>
                </tr>
                <tr>
                    <td colspan=2>
                        
                        <button>
                            <a href="add_student.php">
                                Student details
                            </a>
                        </button>
                    
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                            <button>
                            <a href="add_marks.php">
                                Add Marks
                            </a>
                        </button>
                    
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                            <button>
                            <a href="show_detail.php">
                                show detail
                            </a>
                        </button>
                    
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                            <input type="text" name="id" placeholder="Id">
                    
                    </td>
                </tr>
                
                 <tr>
                    <td>
                        Pass
                        <label><input type="radio" name="result" value="Pass"></label>
                    </td>
                    <td>
                        Fail    
                         <label><input type="radio" name="result" value="Fail"></label>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2>
                        <input type="submit" value="submit" style="text-align: center;">
                    </td>
                </tr>
                </form>
                <form action="show_student_data.php">
                     <tr>
                    <td colspan=2>
                            <input type="text" name="id" placeholder="Id">
                    
                    </td>
                </tr>
                    <tr>
                        <td colspan=2>
                        <input type="submit" value="submit" style="text-align: center;">
                        
                        </td>
                    </tr>
                </form>
            </table>
        
    </div>
    <style>
        body{
            height:100vh;
            background-image: url('background_image.jpg');

        }
        .main_container{
            margin-left:40%;
            margin-top:20%;
            /* width: 25%; */
            display:inline-block;
            /* background-color:rgba(0,0,0,0.5); */
        }
        button{
            background-color:rgba(0,0,0,0.5);
            color:white;
            display:block;
        }

        a{

            color:white;
            text-decoration:none;
        }
    </style>
    </body>
</html>