<?php include ('cabeza.php')?>

<div class="container">
  <div class="row py-5">
    <div class="col-12">
<h1><?php print $title;?></h1>
<h3><?php print basename ($_SERVER['PHP_SELF']);?></h3>

<form action="quinta.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p><input type="submit" /></p>
</form>


<img src="https://raw.githubusercontent.com/Franciscaldeh/ev2/gh-pages/img/img
<?php print (rand (1,3));?>.jpg" class="img-fluid">
</div>
</div>
</div>

<?php include ('patas.php')?>
