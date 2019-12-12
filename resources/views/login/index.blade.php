<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>

<fieldset>
    <legend>Login</legend>
    <center>
        <form method="POST" >
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="Log In">
                         </center>
                    </td>
                </tr>
                <tr>
                        <td colspan="2">
                            <center>
                                If you dont have account ! <br/>
                                <a href="{{route('registration.index')}}">Click here</a> 
                                to create an Account
                             </center>
                        </td>
                    </tr>
            </table>
            </form>
    </center>
	
</fieldset>

<div>
	{{session('msg')}}
</div>
</body>
</html>