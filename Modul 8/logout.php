<?php
session_start();
session_destroy();
?>
<script language script="JavaScript">
alert('anda telah logout');
document.location='login.php';
</script>