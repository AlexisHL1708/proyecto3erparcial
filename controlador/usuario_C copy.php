<?php
require_once('modelo/usuario_M copy.php');

if(isset($btnAccionBan)){
    $objUsuario= new Usuario();
    switch($btnAccionBan){
        case 'Iniciar sesión':
            //recuperar los datos de la vista
            $objUsuario->setLogin($correo,$contra);
            //validar en BD
            $perfil=$objUsuario->iniciarSesion();
            switch($perfil){
                case 1: //admin
                    $vista='indexAdmin_V.php';
                break;
                case 2: //cliente
                    $vista='indexCliente_V.php';
                break;
                case 3: //empleado
                    $vista='indexEmpleado_V.php';
                default:
                    $msj="Usuario no encontrado";
                    $vista="login_V.php";
                break;
            }
        break;
        case 'Insertar':
            $vista='UsuarioInsertar_V copy.php';
        break;
        case 'Guardar':
            //recuperar datos de la vista Y llenar el obj con los datos
            
            $objUsuario->setInsertar(0,$nickname, $correo, $sucursal, $pswd, $foto, $perfil, $activo);
            //insertar datos en BDD
            $resultado=$objUsuario->insertar();
            $msj= ($resultado==true) ? "Se registro con exito.": "No se realizo el registro.";
            header('location:index.php?btnAccionBan=Listar');
        break;
         case 'Listar':
            $resultado=$objUsuario->consultarUsuarios();
            $lista='<table class="table">
            <thead>
                <tr>
                    <th>idUsuario</th>
                    <th>Foto</th>
                    <th>Cuenta</th>
                    <th>Sucursal bancaria</th>
                    <th>Contraseña</th>
                    <th>Perfil</th>
                    <th>Activo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>';
            while($row=$resultado->fetch_assoc()){
                //extraer por renglon
                $suc=($row['sucursal']==1) ? "Banco norte":"Banco sur";
                $per=($row['perfil']==1) ? "Admin":"Cliente";
                $act=($row['activo']==1) ? "Si":"No";
                $lista.=" <tr>
                                <td>".$row['pkIdUsuario']."</td>
                                <td><img width='40' height='40' src='recursos/".$row['foto']."'></td>
                                <td>".$row['nickname']."</td>
                                <td>".$suc."</td>
                                <td>".$row['contrasena']."</td>
                                <td>".$per."</td>
                                <td>".$act."</td>
                                <td>
                                    <a href='index.php?btnAccionBan=Borrar&idBan=".$row['pkIdUsuario']."'>Borrar</a>
                                </td>
                                <td>
                                    <a href='index.php?btnAccionBan=Mostrar&idBan=".$row['pkIdUsuario']."'>Actualizar</a>
                                </td>
                              </tr>";
            }
            $lista.=" </tbody>
                        </table>";
            $vista='UsuarioListar_V copy.php';
        break;
        case 'Borrar';
        $resultado=$objUsuario->borrarUsuario($idUsr);
        //$msj= ($resultado==true) ? "Se borro con exito.": "No se realizo el borrado.";
        header('location:index.php?btnAccionBan=Listar');
        break;
        case 'Mostrar';
        $resultado= $objUsuario->mostrarUsuario($idUsr);
        while($row=$resultado->fetch_assoc()){
            $idUsuario=$row['pkIdUsuario'];
            $nickname=$row['nickname'];
            $sucursal=$row['sucursal'];
            $contrasena=$row['contrasena'];
            $foto=$row['foto'];
            $activo=$row['activo'];
            $perfil=$row['perfil'];
        }
        $vista='UsuarioMostrar_V copy.php';
        break;
        case 'Actualizar';
        $objUsuario->setInsertar($pkIdUsuario ,$nickname, $correo, $sucursal, $pswd, $foto, $perfil, $activo);
            //insertar datos en BDD
            $resultado=$objUsuario->actualizarUsuario();
            $msj= ($resultado==true) ? "Se actualizo con exito.": "No se actualizo el registro.";
            header('location:index.php?btnAccionBan=Listar');
        break;
        case 'Salir':
            session_destroy();
            $vista='login_V.php';
        break;
        default: $vista='login_V.php';
        break;
    }
}
?>