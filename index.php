<html>
&quot;Hello AWS World – running on Linux – on port 80&quot;
<pre>
<?php
$result=shell_exec("/sbin/ifconfig");
echo "<pre>".$result."</pre>";
?>
</pre>
</html>
