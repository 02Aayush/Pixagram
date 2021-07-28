<html>
<link href=project.css type=text/css rel=stylesheet />
<script>
function checkdata()
	{
	if(document.frm.pwd.value!=document.frm.confirm.value)
		{
		alert("Password not matching with confirm...");
		document.frm.pwd.value="";
		document.frm.confirm.value="";
		}
	}
</script>
<body class=page >
<h1 class=heading >Album Management System</h1>
<center>
<form action=reg.php method=post enctype="multipart/form-data" name=frm >
<table cellspacing=15px class=borderbox >
<tr><td colspan=2 ><img src=images/regheader.jpg height=70px ></td></tr>
<tr><td>Name</td><td><input type=text name=name size=50 required ></td></tr>
<tr><td>Address</td><td><input type=text name=address size=50 required ></td></tr>
<tr><td>ContactNo</td><td><input type=text name=contactno size=50 required pattern="[0-9]{10}" ></td></tr>
<tr><td>EmailID</td><td><input type=email name=emailid size=50 required ></td></tr>
<tr><td>Photo</td><td><input type=file name=photo size=50 required ></td></tr>
<tr><td>Password</td><td><input type=password name=pwd size=10 required ></td></tr>
<tr><td>Confirm</td><td><input type=password name=confirm size=10 required onblur=checkdata() ></td></tr>
<tr><td><a href=index.php ><img src=images/home.png height=30px ></a></td><td><input type=submit value=Register ></td></tr>
</table>
</form>
</center>
</body>
</html>