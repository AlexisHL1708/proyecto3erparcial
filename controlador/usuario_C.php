<?php
require_once('modelo/usuario_M.php');

if(isset($btnAccionUsr)){
    $objUsuario= new Usuario();
    switch($btnAccionUsr){

        case 'Movimientos':
            $vista='UsuarioInsertar_V.php';
        break;
        case 'Guardar':
            //recuperar datos de la vista Y llenar el obj con los datos
            
            $objUsuario->setInsertar(0,$tipomov, $monto, $desti, $remi);
            //insertar datos en BDD
            $resultado=$objUsuario->insertar();
            $msj= ($resultado==true) ? "Se registro con exito.": "No se realizo el registro.";
            header('location:index.php?btnAccionUsr=Listar');
        break;
         case 'Ver':
            $resultado=$objUsuario->consultarUsuarios();
            $lista='<table class="table">
            <thead>
                <tr>
                    <th>No. Movimiento</th>
                    <th>Tipo de movimiento</th>
                    <th>Destinatario</th>
                    <th>Remitente</th>
                    <th>Monto</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>';
            while($row=$resultado->fetch_assoc()){
                //extraer por renglon
                //$per=($row['perfil']==1) ? "Admin":"Cliente";
                $tip=($row['tipomov']==1) ? "Depósito":"Retiro";
                $lista.=" <tr>
                                <td>".$row['pkIdmovimiento']."</td>
                                <td>".$tip."</td>
                                <td>".$row['desti']."</td>
                                <td>".$row['remi']."</td>
                                <td>".$row['monto']."</td>
                                <td>
                                    <a href='index.php?btnAccionUsr=Borrar&idUsr=".$row['pkIdmovimiento']."'>Borrar</a>
                                </td>
                                <td>
                                    <a href='index.php?btnAccionUsr=Mostrar&idUsr=".$row['pkIdmovimiento']."'>Actualizar</a>
                                </td>
                              </tr>";
            }
            $lista.=" </tbody>
                        </table>";
            $vista='UsuarioListar_V.php';
        break;
        case 'Borrar';
        $resultado=$objUsuario->borrarUsuario($idUsr);
        //$msj= ($resultado==true) ? "Se borro con exito.": "No se realizo el borrado.";
        header('location:index.php?btnAccionUsr=Listar');
        break;

        case 'Mostrar';
        $resultado= $objUsuario->mostrarUsuario($idUsr);
        while($row=$resultado->fetch_assoc()){
            $idmovimiento=$row['pkIdmovimiento'];
            $tipomov=$row['tipomov'];
            $desti=$row['desti'];
            $remi=$row['remi'];
            $monto=$row['monto'];
            
        }
        $vista='UsuarioMostrar_V.php';
        break;
        case 'Actualizar';
        $objUsuario->setInsertar($pkIdmovimiento ,$tipomov, $monto, $desti, $remi);
            //insertar datos en BDD
            $resultado=$objUsuario->actualizarUsuario();
            $msj= ($resultado==true) ? "Se actualizo con exito.": "No se actualizo el registro.";
            header('location:index.php?btnAccionUsr=Listar');
        break;

    }
}
?>