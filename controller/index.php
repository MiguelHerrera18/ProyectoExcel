<?php
 require_once("model/index.php");
 
 class modeloController{
  private $model;
  private $reference;
  private $namereference; 
	function __construct(){
        $this->model=new Modelo();
    }
    // MOSTRAR
  static function index(){
    	$product 	=	new Modelo();
		$dato=$product->mostrar("medical_products","1");
		require_once("view/index.php");
    }
    //nuevo
    static function nuevo(){
		require_once("view/nuevo.php");
    }
    //guardar
    static function guardar(){
    $reference = $_request['referencia'];
    $namereference = $_request['nombrereferencia']; 
    $data = "'".$reference."',".$namereference;
    $product = new Modelo();
    $dato = $product->insert("medical_products",$data);
    header("location:".urlsite);
    }

    //editar
    static function editar(){
      $reference = $_request['referencia'];
      $product = new Modelo();
      $dato = $prodcut->mostrar("medical_products","referencia=".$reference);
      require_once("view/editar.php");
    }
    //actualizar
    static function actualizar(){
      $reference = $_request['referencia'];
      $cant = $_request['cantidad']; 
      $expirationdate = $_request['fechavencimiento']; 
      $data = "cantidad='".$cant."',fecha vencimiento=".$expirationdate;
      $product = new Modelo();
      $dato = $product->update("medical_products",$data,"referencia=".$reference);
      header("location:".urlsite);
    }
}
?>