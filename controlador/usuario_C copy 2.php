<?php
require_once('modelo/usuario_M copy 2.php');

if(isset($btnAccionEmp)){
    $objUsuario= new Usuario();
    switch($btnAccionEmp){
        case 'Agregar cliente':
            $vista='UsuarioInsertar_V copy 2.php';
        break;
        case 'Guardar':
            //recuperar datos de la vista Y llenar el obj con los datos
            
            $objUsuario->setInsertar(0,$clact, $numcn, $nomb, $suc);
            //insertar datos en BDD
            $resultado=$objUsuario->insertar();
            $msj= ($resultado==true) ? "Se registro con exito.": "No se realizo el registro.";
            header('location:index.php?btnAccionEmp=Listar');
        break;
         case 'Cartera':
            $resultado=$objUsuario->consultarUsuarios();
            $lista='<table class="table">
            <thead>
                <tr>
                    <th>No. Cliente</th>
                    <th>Estado del cliente</th>
                    <th>No. de cuenta del cliente</th>
                    <th>Nombre</th>
                    <th>Sucursal</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>';
            while($row=$resultado->fetch_assoc()){
                //extraer por renglon
                $scl=($row['suc']==1) ? "Banco Norte":"Banco Sur";
                $act=($row['clact']==1) ? "Activo":"Suspendido";
                $lista.=" <tr>
                                <td>".$row['pkIdclien']."</td>
                                <td>".$act."</td>
                                <td>".$row['numcn']."</td>
                                <td>".$row['nomb']."</td>
                                <td>".$scl."</td>
                                <td>
                                    <a href='index.php?btnAccionEmp=Borrar&idUsr=".$row['pkIdclien']."'>Borrar</a>
                                </td>
                                <td>
                                    <a href='index.php?btnAccionEmp=Mostrar&idUsr=".$row['pkIdclien']."'>Actualizar</a>
                                </td>
                              </tr>";
            }
            $lista.=" </tbody>
                        </table>";
            $vista='UsuarioListar_V copy 2.php';
        break;
        case 'Borrar';
        $resultado=$objUsuario->borrarUsuario($idUsr);
        //$msj= ($resultado==true) ? "Se borro con exito.": "No se realizo el borrado.";
        header('location:index.php?btnAccionEmp=Listar');
        break;
        case 'Mostrar';
        $resultado= $objUsuario->mostrarUsuario($idUsr);
        while($row=$resultado->fetch_assoc()){
            $idclien=$row['pkIdclien'];
            $clact=$row['clact'];
            $numcn=$row['numcn'];
            $nomb=$row['nomb'];
            $suc=$row['suc'];
            
        }
        $vista='UsuarioMostrar_V copy 2.php';
        break;
        case 'Actualizar';
        $objUsuario->setInsertar($pkIdclien ,$clact, $numcn, $nomb, $suc);
            //insertar datos en BDD
            $resultado=$objUsuario->actualizarUsuario();
            $msj= ($resultado==true) ? "Se actualizo con exito.": "No se actualizo el registro.";
            header('location:index.php?btnAccionEmp=Listar');
        break;

    }
}
?>