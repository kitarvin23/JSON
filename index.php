<?php
$json = file_get_contents('https://kitarvin23.herokuapp.com/json.php');

$data = json_decode($json,true);
$list = $data['gadget'];
?>
<h1> Gadgets </h1>
<?php
foreach($list as $value){
    ?>
    <ul>
        <h2><?php echo $value['brand'];?></h2>
        <li>cost: <?php echo $value['cost'];?></li>
        <li>year: <?php echo $value['year'];?></li>
        <li>color: <?php echo $value['color'];?></li>
    </ul>
 
<?php
}
?>
