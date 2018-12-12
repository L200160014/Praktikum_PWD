<html>
<body>
	<form action="form.asp" method="get">
		Nama kamu : <input type="text" name="fname" size="20" />
		Pilih Mobil favorit kamu :
		<input type="radio" name="cars">
		<%if cars="BMW" then Response.Write("Checked")%> 
		value="BMW">BMW</input>
		<br />
		<input type="radio" name="cars"
		<%if cars="Timor" then Response.Write("checked)%>
		value="Timor">Timor</input>
		<input type="submit" value="submit" />
	</form>
	<%
	dim fname
	fname=Request.QueryString("fname")
	dim cars
	cars=Request.Form("cars")
	if fname<>"" then
		Response.Write("Hallo " & fname & "!<br />")
		Response.Write("Bagaimana kabar kamu?")
	End If
	if cars<>"" then
		Response.Write("<p>Mobil favorit kamu adalah: " & cars & "</p>")
	end if 
	%>
</body>
</html>