    <?php
        function conectar_PostgreSQL( $usuario, $pass, $host, $bd )
        {
             $conexion = pg_connect( "user=".$usuario."fearzlx3 ".
                                    "password=".$pass."borish1234 ".
                                    "host=".$host."5432 ".
                                    "dbname=".$fase3
                                   ) or die( "Error al conectar: ".pg_last_error() );
            return $conexion;
        }
    ?>
    
