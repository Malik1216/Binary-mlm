<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>

function chk_field( field , error )
{
        var val  = field.val();
        if (val=='')
        {
            error.html("Required *");
            return false;
        }
        else
        {
            error.html("");
            return true;
        }
}
function login() {
     chk_field( $("#name") , $("#name_error")  );
     chk_field( $("#pass") , $("#pass_error")  );
     if ( chk_field( $("#name") , $("#name_error")  ) && chk_field( $("#pass") , $("#pass_error")  )  )
     {
           var name = $("#name").val();
           var pass = $("#pass").val();
        	$.ajax({
        	type: "POST",
        	url: "helper/login.php",
        	data:{ uname: name, pass: pass} ,
        	success: function(data){
        	        console.log(data);
                    if (data=='true')
                    {
                        window.location.href = "dashboard";
                        
                    }
                    else
                    {
                	  $("#Login_error").html("Incorrect username or password");
                    }
        	   }
        	});
     }
}

  </script>
<style>
  .error {
      color: red;
    
   }
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 5px 0 5px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;

  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}

.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background: #76b852; 

  font-family: "Roboto", sans-serif;
     
}
</style>

</head>
<body>



<div class="login-page">
  <div class="form">
  
    <form>
    <h3 style ="margin-bottom:20px;" > Administration Login </h3>
    <label style ="color:red" id = "Login_error" > </label>
        <input type="text" name="name" id='name' placeholder="User Name" />
        <label style ="color:red" id = "name_error" ></label>
        <input type="password" name="pass" id='pass' placeholder="Password" />
        <label style ="color:red" id = "pass_error" ></label>
    </form>
    <button onclick="login()" >login</button>
  </div>
</div>




</body>
</html>

