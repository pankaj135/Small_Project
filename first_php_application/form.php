<html>
    <body>
        <nav>
    

        </nav>
        <div class="form_container">
            <div>
                <form action="db.php">
                    <table>
                        <tr>
                            <td>
                                <font>
                                    Id
                                </font>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="id">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <font>
                                    Name
                                </font>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="name">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <font>
                                    Email
                                </font>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="email">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <font>
                                    Phone Number
                                </font>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="phone_no">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <input type="submit" value="store">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <style>
            
            
            body{
                height:100vh;
                background-color: rgba(112, 200, 255,0.2);
            }

            nav{
                width: 100%;
                height:5%;
                background: skyblue;
                margin:5px;
                border-radius: 5px;
           
            }
            table tr:hover{
                background-color: rgba(112, 200, 255,0.6);
            }
            td div{
                padding:5px
            }
            .form_container{
                left: 30%;
                top: 20%;
                width: 40%;
                background-color: wheat;
            }
        </style>
    </body>
</html>