<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">ACTUALIZAR</h1>
<form action="" method="get">
<?php
 foreach ($dato as $key => $value):
 foreach ($value as $v):?>
 <input type="text" value="<?php echo $v['cantidad']?>" name="cantidad"><br>
 <input type="text" value="<?php echo $v['fechavencimiento'] ?>" name="fechavencimiento"><br>
 <input type="hidden" value="<?php echo $v['referencia']?>" name="referencia"><br>
 <input type="submit" class="btn" name="btn" value="ACTUALIZAR"><br>
 <input type="hidden" name="m" value="guardar">
</form>
<?php
 endforeach;
 endforeach;
?>