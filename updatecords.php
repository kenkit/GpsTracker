
<?php
header("Content-type: text/xml");


//Googles version
//echo '<markers>
//<marker name="Pan Africa Market" address="1521 1st Ave, Seattle, WA" lat="47.608940" lng="-122.340141" type="restaurant"/>
//<marker name="Buddha Thai  Bar" address="2222 2nd Ave, Seattle, WA" lat="47.613590" lng="-122.344391" type="bar"/>
//<marker name="The Melting Pot" address="14 Mercer St, Seattle, WA" lat="47.624561" lng="-122.356445" type="restaurant"/>
//<marker name="Ipanema Grill" address="1225 1st Ave, Seattle, WA" lat="47.606365" lng="-122.337654" type="restaurant"/>
//<marker name="Sake House" address="2230 1st Ave, Seattle, WA" lat="47.612823" lng="-122.345673" type="bar"/>

//<marker name="Crab Pot" address="1301 Alaskan Way, Seattle, WA" lat="47.605961" lng="-122.340363" type="restaurant"/>
//<marker name="Mamas Mexican Kitchen" address="2234 2nd Ave, Seattle, WA" lat="47.613976" lng="-122.345467" type="bar"/>
//<marker name="Wingdome" address="1416 E Olive Way, Seattle, WA" lat="47.617214" lng="-122.326584" type="bar"/>
//<marker name="Piroshky Piroshky" address="1908 Pike pl, Seattle, WA" lat="47.610126" lng="-122.342834" type="restaurant"/>
//</markers>';


//Version 1
//echo '<markers>
//<marker host="192.168.1.33" lastupdate="2012-03-12 18:02:54" lat="37.805538" lng="150.967235" active="1"/>
//<marker host="192.168.1.80" lastupdate="2012-03-09 15:02:03" lat="37.805450" lng="171.967224" active="1"/>
//<marker host="192.168.1.2" lastupdate="2055-03-12 18:03:30" lat="37.805685" lng="140.967224" active="1"/>
//<marker host="192.168.1.75" lastupdate="2012-03-12 18:05:14" lat="37.805685" lng="140.967150" active="0"/>
//<marker host="192.168.1.67" lastupdate="2012-03-12 18:07:04" lat="37.805685" lng="140.966995" active="1"/>
//</markers>';

//Version 2
echo "<users>";
echo "<user id=\"1\" name=\"John Tucker\" age=\"19\" lat=\"47.608940\" lng=\"-122.340141\" type=\"0\"/>";
echo "<user id=\"2\" name=\"Dean Jester\" age=\"21\" lat=\"51.219040\" lng=\"4.326590\" type=\"0\"/>";
echo "<user id=\"3\" name=\"Joris Nisteven\" age=\"26\" lat=\"51.203671\" lng=\"4.341480\" type=\"0\"/>";
echo "<user id=\"4\" name=\"Joske Vermeulen\" age=\"20\" lat=\"51.204155\" lng=\"4.327018\" type=\"0\"/>";
echo "<user id=\"5\" name=\"Timmy den Beir\" age=\"21\" lat=\"51.209263\" lng=\"4.339720\" type=\"0\"/>";
echo "<user id=\"6\" name=\"Ben von Duppen\" age=\"23\" lat=\"51.168308\" lng=\"4.394287\" type=\"0\"/>";
echo "</users>";

?>
