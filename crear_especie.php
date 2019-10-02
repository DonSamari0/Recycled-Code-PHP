<?php
    require 'conn.php';
    require 'cabecera.php'
?>

<h4>Creacion de especies</h4>
    <div class="row">
    <form action="" method="post">
            <div class="form-group">
                <label for="">Informacion del avistamiento</label>
                
                <input type="text" name="latitud" id="" class="form-control" placeholder="Latitud" aria-describedby="helpId">
                <input type="text" name="longitud" id="" class="form-control" placeholder="Longitud" aria-describedby="helpId">
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <button type="submit" class="btn btn-primary" valor="submit">Registrar</button>
            </div>
        </form>
    </div>
    <hr>
    <div class="row">
    
        <div class="col-sm">
            <div class="form-group">
                <a name="" id="" class="btn btn-primary" href="index.php" role="button">Inicio</a>
                <a name="" id="" class="btn btn-primary" href="consultar.php" role="button">Consultar</a>
            </div>   
        </div>
        
        <div class="col-sm">
        
        <div class="form-group">
                <div class="form-group">
                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Digite el nombre o alias de la especie a consultar">
                  <a name="" id="" class="btn btn-primary" href="busqueda.php" role="Buscar">Buscar</a>  
                </div>
                
            </div>
        </div> 
    </div>
</div>
    
</body>
</html>