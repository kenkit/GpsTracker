<?php
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<markers>";
echo "<marker host=\"192.168.1.1\" lastupdate=\"2012-03-12 18:02:54\" lat=\"44.805538\" lng=\"150.967235\" active=\"1\"/>";
echo "<marker host=\"192.168.1.80\" lastupdate=\"2012-03-09 15:02:03\" lat=\"37.805450\" lng=\"140.967224\" active=\"0\"/>";
echo "<marker host=\"192.168.1.2\" lastupdate=\"2012-03-12 18:03:30\" lat=\"37.805685\" lng=\"140.967224\" active=\"1\"/>";
echo "<marker host=\"192.168.1.75\" lastupdate=\"2012-03-12 18:05:14\" lat=\"37.805685\" lng=\"140.967150\" active=\"0\"/>";
echo "<marker host=\"192.168.1.67\" lastupdate=\"2012-03-12 18:07:04\" lat=\"37.805685\" lng=\"140.966995\" active=\"1\"/>";
echo "</markers>";
?>
