<?php
require_once ('modelo/conexion.php');

class Usuario {
    private $pkIdUsuario;
    private $nickname;
    private $correo;
    private $sucursal;
    private $contrasena;
    private $foto;
    private $perfil;
    private $activo;

    public function __construct(){
        $this->pkIdUsuario=0;
        $this->nickname='';
        $this->correo='';
        $this->sucursal='';
        $this->contrasena='';
        $this->foto='';
        $this->perfil=0;
        $this->activo=0;
    }

    public function setLogin($correo, $contra){
        $this->contrasena=$contra;
        $this->correo=$correo;
    }

    public function iniciarSesion(){
        try{
            $sql="SELECT * FROM usuarios WHERE correo='$this->correo' AND contrasena='".sha1($this->contrasena)."' AND activo=1";
            //echo $sql;
            $resultado=$this->aplicarQry($sql);
            while($row=mysqli_fetch_assoc($resultado)){
                $this->pkIdUsuario=$row['pkIdUsuario'];
                $this->activo=$row['activo'];
                $this->perfil=$row['perfil'];
                $_SESSION['nickname']=$row['nickname'];
                $_SESSION['foto']=$row['foto'];
            }
            return $this->perfil;
        }
        catch(Exception $e){
            echo "Error: ".$e->getMessage()."<br>";
        }
    }

    //RECUPERAR LOS  DATOS DE LA VISTA
    public function setInsertar($pkIdUsuario,$nickname,$correo,$sucursal,$contrasena,$foto,$perfil,$activo){
        $this->pkIdUsuario=$pkIdUsuario;
        $this->nickname=$nickname;
        $this->correo=$correo;
        $this->sucursal=$sucursal;
        $this->contrasena=$contrasena;
        $this->foto=$this->cargaImagen($foto);
        $this->perfil=$perfil;
        $this->activo=$activo;
    }

    //GENERAR UNA COPIA EN LA IMAGEN
    public function cargaImagen($img){
        $ext=array('image/jpeg','image/jpg','image/gif','image/png','image/bpm');//agregar formato imagen
        foreach($_FILES as $archivo){
            $attachtmp= $archivo['tmp_name'];
            $attachtype= $archivo['type'];
            $attachname= $archivo['name'];
            if(file_exists($attachtmp)){
                if(is_uploaded_file($attachtmp)){
                    if(in_array($attachtype,$ext)){
                        $ruta=move_uploaded_file($attachtmp, "recursos/$attachname");
                    }
                }
            }
        }
        return $attachname;
    }

    //inserta
    public function insertar(){
        try{
            $sql="insert into usuarios(nickname,correo,sucursal, contrasena, foto, perfil,activo) VALUES ('$this->nickname','$this->correo','$this->sucursal','".sha1($this->contrasena)."','$this->foto',$this->perfil,$this->activo)";
            //echo $sql;
            $resultado=$this->aplicarQry($sql);
            return $resultado;
        }catch(Exception $e){
            echo "Error: ".$e->getMessage()."<br>";
        }
    }

    public function aplicarQry($sql){
        $objConectar= new Conexion();
        $resultado=$objConectar->ejecutarConsulta($sql);
        $objConectar->cerrarConexion();
        return $resultado;
    }
    
    //actualizar
    public function actualizarUsuario(){
        try{
            if($this->foto=='')
            $sql="UPDATE usuarios SET nickname='$this->nickname',correo='$this->correo',sucursal='$this->sucursal',contrasena='$this->contrasena',perfil='$this->perfil',activo='$this->activo' WHERE pkIdUsuario=$this->pkIdUsuario";
            else
            $sql="UPDATE usuarios SET nickname='$this->nickname',correo='$this->correo',contrasena='$this->contrasena',foto='$this->foto',perfil='$this->perfil',activo='$this->activo' WHERE pkIdUsuario=$this->pkIdUsuario";
            echo $sql;
            $resultado=$this->aplicarQry($sql);
            return $resultado;
        }catch(Exception $e){
            echo "Error: ".$e->getMessage()."<br>";
        }
    }
    //borrar
    public function borrarUsuario($id){
        try{
            $sql="DELETE FROM usuarios WHERE pkIdUsuario=$id";
            //echo $sql;
            $resultado=$this->aplicarQry($sql);
            return $resultado;
        }catch(Exception $e){
            echo "Error: ".$e->getMessage()."<br>";
        }
    }
    //consultar-listar
    public function consultarUsuarios(){
        try{
            $sql="SELECT * FROM usuarios";
            //echo $sql;
            $resultado=$this->aplicarQry($sql);
            return $resultado;
        }catch(Exception $e){
            echo "Error: ".$e->getMessage()."<br>";
        }
    }
    //consultar un usuario
    public function mostrarUsuario($usr){
        try{
            $sql="SELECT * FROM usuarios WHERE pkIdUsuario=$usr";
            //echo $sql;
            $resultado=$this->aplicarQry($sql);
            return $resultado;
        }catch(Exception $e){
            echo "Error: ".$e->getMessage()."<br>";
        }
    }
}
?>