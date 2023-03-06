<?php 
use Libs\MySQL;
use Libs\Num_price;

$select = new Num_price(new MySQL);
$selections = $select->select();

?>