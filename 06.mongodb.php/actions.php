<?php
$m = new MongoClient( 'mongodb://localhost:15000');
$cursor = $m->tem->users->find( array( 'name' => 'nakata'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>
