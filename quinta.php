<?php include ('cabeza.php')?>

<div class="container">
  <div class="row py-5">
    <div class="col-12">
<h1><?php print $title;?></h1>


Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.

<h3><?php print basename ($_SERVER['PHP_SELF']);?></h3>
<img src="https://raw.githubusercontent.com/Franciscaldeh/ev2/gh-pages/img/img
<?php print (rand (1,3));?>.jpg" class="img-fluid">
</div>
</div>
</div>

<?php include ('patas.php')?>
