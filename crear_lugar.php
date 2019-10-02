<?php
    require 'cabecera.php'
?>

<h4>Creacion de lugares</h4>
    <div class="row">
    <form action="" method="post">
            <div class="form-group">
                <label for="">Informacion del lugar</label>
                <input type="text" name="lugar_nombre" id="" class="form-control" placeholder="Nombre del lugar" aria-describedby="helpId">
                <input type="text" name="lugar_alias" id="" class="form-control" placeholder="Alias del lugar" aria-describedby="helpId">
                <label for="">Seleccione un departamento</label>
                
                <?php
                    $server = 'localhost';
                    $username = 'siraem';
                    $password = 'siraem';
                    $database = 'siraem_database';
                    try {
                      $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
                    } catch (PDOException $e) {
                      die('Connection Failed: ' . $e->getMessage('Falla en conexion'));
                    }
                    if ($conn){
                        $sql = "SELECT * FROM pais";
                        $result = $conn->prepare($sql);
                        $result -> execute();
                        $arr = $result->fetchAll(PDO::FETCH_ASSOC);
                        echo('<select class="form-control" name="select_pais" id="">');
                        foreach ($arr as $row) {
                            echo ("<option>". $row['pais_nombre']."</option>");
                        }
                        echo('</select>');
                ?>
                
                <?php
                        //segundo select
                        $sql2 = "SELECT * FROM dpto";
                        $result2 = $conn->prepare($sql2);
                        $result2 -> execute();
                        $arr2 = $result2->fetchAll(PDO::FETCH_ASSOC);
                        echo('<select class="form-control" name="select_dpto" id="">');
                        foreach ($arr2 as $row2) {
                            echo ("<option>". $row2['dpto_nombre']."</option>");
                        }
                        echo('</select>');
                        
                        //$conn = null;
                    }


                ?>
                
                </select>
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