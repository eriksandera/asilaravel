<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>

    <body>
        TEST CRUD LARAVEL
        <a href="/"><button>Back</button></a>
        <form action="/store" method="post">
            @csrf
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><textarea name="address" id="address"></textarea></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>:</td>
                    <td><input type="text" name="city" /></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>:</td>
                    <td><input type="text" name="phone_number" /></td>
                </tr>
                <tr>
                    <td>Client Logo</td>
                    <td>:</td>
                    <td><input type="text" name="client_logo" /></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="submit" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
