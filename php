<?php
class hc{
 public $link='';
 function __construct($distance){
  $this->connect();
  $this->storeInDB($distance);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'minor') or die('Cannot select the DB');
 }
 
 function storeInDB($distance){
  $query = "insert into distance set module1='".$distance."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['distance'] != ''){
 $hc=new hc($_GET['distance']);
}
?>
