<?php
$data = file_get_contents('https://currate.ru/api/?get=rates&pairs=USDRUB,RUBUSD&key=3f4ea34c62663e17476dc71c4a748341'); 
$courses=json_decode($data, true);
echo '<pre><b>USDRUB:</b>' .$courses['data']['USDRUB']. '</pre>';
echo '<pre><b>RUBUSD:</b>' .$courses['data']['RUBUSD']. '</pre>';
/*foreach ($courses as $course){
   if($course ['data']=='USDRUB'){
    $course_curr=$course['data']['USDRUB']};
    break;
    
   
}https://currate.ru/api/?get=rates&pairs=USDRUB&key=
*/
?>