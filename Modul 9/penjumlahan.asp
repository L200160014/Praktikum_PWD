<html>
	<head>
		<title>Program Penjumlahan Angka</title>
	</head>
	<body>
		<form action="penjumlahan.asp" action="get">
			Nilai A adalah <input type="text" name="A">
			<br>
			Nilai B adalah <input type="text" name="B">
			<br>
			<input type="submit" name="submit" value="Jumlahkan">
		</form>
		<%
			dim A
			A = Request.QueryString("A")

			dim B
			B = Request.QueryString("B")

			dim hasil
			hasil = Cint(A) + Cint(B)

			if A <> "" and B <> "" then
				response.write("Nilai A adalah " & A & "<br>")
				response.write("Nilai B adalah " & B & "<br>")
				response.write("Jadi Nilai A ditambah Nilai B adalah " & hasil)
			end if
		%>
	</body>
</html>