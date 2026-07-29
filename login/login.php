<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <nav>
            <center>
                <h1>Welcome to the Login Page</h1>
            </center>
        </nav>
        <div class="container">
                <form action="dashboard.php">

                    <table>
                        <tr>
                            <th>
                              <font>
                                Login   
                              </font>

                            </th>
                            
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Username" name="username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" placeholder="Password" name="password">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center; " class="submit_row">
                                <input type="submit" value="Login">
                            </td>
                    </table>
                </form>
        </div>
    </body>
</html>