<?php
if(isset($_POST['btnProceso'])){
    $num=$_POST['txtNumero'];
    $k=1;
    $resultado;
    for($k = 1; $k <= 10; $k++){
        $resultado= $num * $k;
     echo $num." * ". $k. " = ". $resultado. "<br>";


    }
} 

?>


<h1>EJERCICIO TABLA DE MULTIPLICAR</h1>
<hr>
<div>
    <form method="post">
        <label>INGRESE NUMERO : </label>
        <input type="text" name="txtNumero" placeholder="un valor entero" value="<?php if (isset($num))echo $num; ?>" >
        <button type="sumbit" name="btnProceso">Proceso</button>

    </form>

</div>