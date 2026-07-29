<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <nav>
            <center>
                <h1>Welcome to the Registrtation Page</h1>
            </center>
        </nav>
        <div class="container">
                <form action="register_db.php">

                    <table>
                        <tr>
                            <th>
                              <font>
                                Registrtation
                              </font>

                            </th>
                            
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Id" name="id">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Name" name="name">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="Number" placeholder="Moblie No." name="phone_no">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="password" placeholder="Password" name="password">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center; " class="submit_row">
                                <input type="submit" value="Register">
                            </td>
                        </tr>
                    </table>
                </form>
        </div>
    </body>
</html>