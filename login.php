<?php session_start();

if(isset($_POST['Submit']))
    {

        $logins = array('Hany' => '12345','username1' => 'password1','username2' => 'password2');


        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';


        if (isset($logins[$Username]) && $logins[$Username] == $Password)
            {

                $_SESSION['UserData']['Username']=$logins[$Username];
                header("location:admin.php");
                exit;

            } 

            else {
                $msg="<span style='color:red'>Invalid Login Details</span>";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" name="Login_Form">
            <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
                <?php if(isset($msg)){?>
                <tr>
                    <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="2" align="left" valign="top">
                        <h3>Login</h3>
                    </td>
                </tr>
                <tr>
                    <td align="right" valign="top">Username</td>
                    <td><input name="Username" type="text" class="Input"></td>
                </tr>
                <tr>
                    <td align="right">Password</td>
                    <td><input name="Password" type="password" class="Input"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>