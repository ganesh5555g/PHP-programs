<?php
   $pname=$_GET['q'];
   $db=pg_connect("host=localhost dbname=movact user=postgres password=postgres");
   if(!$db)
   {
    die("could not connect");
   }
   $query="select * from movie where mno in(select mno from actor where aname='$pname')";
   $result=pg_query($db,"$query");
   if(!$result)
   {
   die("incorrect query");
   }
   echo "<table border=2>";
   echo "<tr><th>mno</th><th>mname</th><th>release_year</th></tr>";
   while($row=pg_fetch_row($result))
   {
   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
   }
   echo "</table>";
?>
