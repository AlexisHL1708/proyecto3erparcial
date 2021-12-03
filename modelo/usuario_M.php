<?php
require_once('modelo/conexion.php');

class Usuario
{
    private $pkIdmovimiento;
    private $tipomov;
    private $monto;
    private $desti;
    private $remi;

    public function __construct()
    {
        $this->pkIdmovimiento = 0;
        $this->tipomov = 0;
        $this->monto = '';
        $this->desti = '';
        $this->remi = '';
    }



    //RECUPERAR LOS  DATOS DE LA VISTA
    public function setInsertar($pkIdmovimiento, $tipomov, $monto, $desti, $remi)
    {
        $this->pkIdmovimiento = $pkIdmovimiento;
        $this->tipomov = $tipomov;
        $this->monto = $monto;
        $this->desti = $desti;
        $this->remi = $remi;
        
    }

    //GENERAR UNA COPIA EN LA IMAGEN
    public function cargarImagen($img)
    {
        $ext = array('image/jpeg', 'image/gif', 'image/png', 'image/bmp'); //Puedes agregar más extenciones
        foreach ($_FILES as $archivo) {
            $attachtmp = $archivo['tmp_name'];
            $attachtype = $archivo['type'];
            $attachname = $archivo['name'];
            if (file_exists($attachtmp)) {
                if (is_uploaded_file($attachtmp)) {
                    if (in_array($attachtype, $ext)) {
                        $ruta = move_uploaded_file($attachtmp, "recursos/$attachname");
                    }
                }
            }
        }



        return $attachname;
    }


    //inserta
    public function insertar()
    {
        try {
            $sql = "insert into cliente(tipomov, monto, desti, remi) VALUES ('$this->tipomov','$this->monto','$this->desti','$this->remi')";
            echo $sql;
            $resultado = $this->aplicarQry($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "<br>";
        }
    }

    public function aplicarQry($sql)
    {
        $objConectar = new Conexion();
        $resultado = $objConectar->ejecutarConsulta($sql);
        $objConectar->cerrarConexion();
        return $resultado;
    }

    //actualizar
    public function actualizarUsuario()
    {
        try {
            if ($this->foto == '')
                $sql = "UPDATE cliente SET tipomov='$this->tipomov',monto='$this->monto',desti='$this->desti',remi='$this->remi' WHERE pkIdmovimiento=$this->pkIdmovimiento";
            else
                $sql = "UPDATE cliente SET tipomov='$this->tipomov',monto='$this->monto',desti='$this->desti',remi='$this->remi' WHERE pkIdmovimiento=$this->pkIdmovimiento";
            echo $sql;
            $resultado = $this->aplicarQry($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "<br>";
        }
    }
    //borrar
    public function borrarUsuario($id)
    {
        try {
            $sql = "DELETE FROM cliente WHERE pkIdmovimiento=$id";
            //echo $sql;
            $resultado = $this->aplicarQry($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "<br>";
        }
    }
    //consultar-listar
    public function consultarUsuarios()
    {
        try {
            $sql = "SELECT * FROM cliente";
            //echo $sql;
            $resultado = $this->aplicarQry($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "<br>";
        }
    }
    //consultar un usuario
    public function mostrarUsuario($usr)
    {
        try {
            $sql = "SELECT * FROM cliente WHERE pkIdmovimiento=$usr";
            //echo $sql;
            $resultado = $this->aplicarQry($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "<br>";
        }
    }
}
?>