<?php
if(isset($_POST['btn'])){
    $a=$_post['n1'];
    $b=$_post['n2'];
    echo "{$a} <br> $b";
}else{
    echo"you didn't submit button";
}