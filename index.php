<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	

<script src="funciones.js">
		
</script>
</head>
<body>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      	Vectores
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      	Datos
      	<input type="text" id="dato"> <button onclick="crear();">Enviar</button>
      	<div id="vec"></div>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
       	Matrices
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      	Datos
      	<input type="text" id="datosm1"> 
		<input type="text" id="datosm2">
      	<button onclick="crearMatriz();">Enviar</button>
      	<div id="mac"></div>

      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Listas
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Dato:
        <input type="text" id="datolista">
        <button onclick="listas();">Ingresar</button>
      <div id="datoslista">
        
      </div>
      </div>
    </div>
  </div>

    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapseOne">
        Pilas
      </button>
    </h2>
    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Dato:
        <input type="text" id="datoPila">
        <button onclick="pilas();">Ingresar</button>
      <div id="datosPila">
        
      </div>

      </div>
    </div>
  </div>

      <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapseOne">
        Colas
      </button>
    </h2>
    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Dato:
        <input type="text" id="datoCola">
        <button onclick="colass();">Ingresar</button>
      <div id="datosCola">
        
      </div>
      </div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapseOne">
        Archivos
      </button>
    </h2>
    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div id="leerTxt">
        <?php  
			$txt_file = fopen('texto.txt','r');
			$line = fgets($txt_file);
			 echo $line;
			fclose($txt_file);
        ?>
      </div>      </div>
    </div>
  </div>


    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapseOne">
        Datos del alumno
      </button>
    </h2>
    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <input type="text" name="" id="nombre" placeholder="Nombre alumno">
        <input type="text" name="" id="noControl" placeholder="No.Control">
    <button type="submit" class="btn btn-primary mb-3" onclick="datos()">Enviar</button>
      <div id="dat"></div>
      </div>
    </div>
  </div>



    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapseOne">
        Salir
      </button>
    </h2>
    <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
    <button type="submit" class="btn btn-primary mb-3" onclick="salir()">Salir</button>
      </div>
    </div>
  </div>



</div>
</body>
</html>