<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<style>
    table {
        background-color: pink
    }
</style>
<body>

<h2 align="center">Registration Form</h2>

<form action="send.php" method="post">
    <table border="6" align="center" cellpadding="10" >
        
        <tr>
            <td>Full Name:</td>
            <td><input type="text" name="fullname" ></td>
        </tr>

        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" ></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" ></td>
        </tr>

        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender"> Male
                <input type="radio" name="gender"> Female
            </td>
        </tr>
        <tr>
            <td>Age:</td>
            <td>
                <input type="number" min="18" max="45"><br>
            </td>
        </tr>
        

        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Register">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td colspan="2">
               <h5><mark>contact us: 9716980915, 9813446784</mark></h5>

            </td>
        </tr>

    </table>
</form>

</body>
</html>