<a href="task92.php?category=sport" id = "1">Sport news</a> | <a href="task92.php?category=politics" id = "2">Politic news</a><br/><br/>
<a href="task92.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task92.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$catFromReq = $_REQUEST["category"];
if (isset($_REQUEST['format'])) {
    echo json_encode($news[$catFromReq]);
}
else {
  echo $news[$catFromReq][0] , '<br/>'; 
     echo $news[$catFromReq][1];
}
?>