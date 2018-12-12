<html>
<body>
	Tanggal dan Waktu sekarang adalah : <%response.write(date())%>
	<br />
	Waktu di server lokal adalah : <%response.write(time())%>
	Contoh Format tanggal dan waktu :
	<%
	response.write(FormatDateTime(date(),vbgeneraldate))
	response.write("<br />")
	response.write(FormatDateTime(date(),vblongdate))
	response.write("<br />")
	response.write(FormatDateTime(date(),vbshortdate))
	response.write("<br />")
	response.write(FormatDateTime(now(),vblongtime))
	response.write("<br />")
	response.write(FormatDateTime(now(),vbshorttime))
	%>
	Hari ini
	<%response.write(MonthName(month(date)))%>
	<br />
	dan bulan ini
	<%response.write(MonthName(month(date)))%>
</body>
</html>