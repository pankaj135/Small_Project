<html>
    <body>
        
    <div class="main_container">
        <form action="add_student_db.php">


            <table border="1">
                <tr>
                    <th colspan=2>
                        Add student

                    </th>
                </tr>
                <tr>
                    <td>
                        Roll No 
                    </td>
                    <td>
                        <input type="Number" name ="id">
                    </td>
                </tr>
                <tr>    
                    <td>
                        name 
                    </td>
                    <td>
                        <input type="text" name ="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile No.
                    </td>
                    <td>
                        <input type="text" name ="phone_no">
                    </td>
                </tr>
                <tr>    
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="text" name ="email">
                    </td>
                </tr>
                <tr>    
                    <td>
                        Branch
                    </td>
                    <td>
                        <input type="text" name ="branch">
                    </td>
                </tr>
                <tr>
                    <td>
                        Sem
                    </td>
                    <td>
                        <input type="Number" name ="sem">
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input type="submit" value="submit" style="text-align: center;">
                    </td>
                </tr>
            </table>
        </form>
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
    </style>
    </body>
</html>