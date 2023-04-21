<?php
include 'end.php';
 $dbhost = "a+1gXAhvYieGZmFReQBc8u3DBBy9bbuDivPBBvdtUtTVkQl2yhVSI3EFca0VePhpDPtAU0O5yNCIVtq03TRbPDWAvwhBYIvCDrrIZawouFPvacTGiMvlZZ+nYB6eadyD";
 $dbuser = "sBRvzB69epOu6t0STxneDNdJBpY5n1I0M7kzJQMbFgYvAgDg5lcP9osFIMaXL885giYmURSLdeFs0gFoK9JC9GY4cXMqG91bR21FAcCcBAFviqQg06uS0uihT/nMkg4p";
 $dbpass = "QPTVcy4TYYwZN0uGS9BIeEL3hRBHkvKMVzfmtLf0BZ5rO1SJjcv+tOWChYqpJ+SXc1R+6mEVQiN/LkGWDHGaBzXLOzAwyuXTlcVEmQftZdLMqes99LCVj5L8haSrmmuhYgZjtB/6FiYsg/y4AN42cg==";


function OpenCon(){
$conn = new mysqli(de($dbhost), de($dbuser), de($dbpass)) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

function ClientCon($dbuser,$dbpass){
 $conn = new mysqli(de($dbhost), de($dbuser), de($dbpass));
 return $conn;
 }


function DBCon($dbuser,$dbpass, $dbname){
 $conn = new mysqli(de($dbhost), de($dbuser), de($dbpass), de($dbname));
 return $conn;
 }


function CloseCon($conn){
 $conn -> close();
 }

?>