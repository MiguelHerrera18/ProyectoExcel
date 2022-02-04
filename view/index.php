<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo"class="btn">NUEVO</a>
<table>
  <tr>      
   <td>referencia</td>
   <td>nombre referencia</td>
   <td>laboratorio</td>
   <td>fecha vencimiento</td>
   <td>cantidad</td>
   <td>fecha ingreso</td>
  </tr>
  <tbody>
    <?php
    if(!empty($dato)):
     foreach ($dato as $key => $value)
     foreach ($value as $v):?>
      <tr>
       <td><?php echo $v['referencia'] ?></td>
       <td><?php echo $v['nombrereferencia'] ?></td>
       <td><?php echo $v['laboratorio'] ?></td>
       <td><?php echo $v['fechavencimiento'] ?></td>
       <td><?php echo $v['cantidad'] ?></td>
       <td><?php echo $v['fechaingreso'] ?></td>
       <td>
         <a class="btn" href="/index.php?m=ingresar&id=<?php echo $v['referencia']?>">INGRESAR</a>
         <a class="btn" href="/index.php?m=actualizar&id=<?php echo $v['referencia']?>">ACTUALIZAR</a>
         <a class="btn" href="/index.php?m=buscar&id=<?php echo $v['referencia']?>">BUSCAR</a>
       </td>
      </tr>
     <?php endforeach; ?>
     <?php else: ?>
      <tr>
        <td colspan="3">NO HAY REGISTROS</td>
      </tr>
     <?php endif?>
  </tbody>
</table>
<?php
 require_once("layouts/footer.php");
?>

