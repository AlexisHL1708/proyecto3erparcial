<?php
require_once('modelo/conexion.php');

class Usuario
{
    private $pkIdclien;
    private $clact;
    private $numcn;
    private $nomb;
    private $suc;

    public function __construct()
    {
        $this->pkIdclien = 0;
        $this->clact = 0;
        $this->numcn = '';
        $this->nomb = '';
        $this->suc = 0;
    }

    //RECUPERAR LOS  DATOS DE LA VISTA
    public function setInsertar($pkIdclien, $clact, $numcn, $nomb, $suc)
    {
        $this->pkIdclien = $pkIdclien;
        $this->clact = $clact;
        $this->numcn = $numcn;
        $this->nomb = $nomb;
        $this->suc = $suc;
        
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
            $sql = "insert into emple(clact, numcn, nomb, suc) VALUES ('$this->clact','$this->numcn','$this->nomb','$this->suc')";
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
                $sql = "UPDATE emple SET clact='$this->clact',numcn='$this->numcn',nomb='$this->nomb',suc='$this->suc' WHERE pkIdclien=$this->pkIdclien";
            else
                $sql = "UPDATE emple SET clact='$this->clact',numcn='$this->numcn',nomb='$this->nomb',suc='$this->suc' WHERE pkIdclien=$this->pkIdclien";
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
            $sql = "DELETE FROM emple WHERE pkIdclien=$id";
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
            $sql = "SELECT * FROM emple";
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
            $sql = "SELECT * FROM emple WHERE pkIdclien=$usr";
            //echo $sql;
            $resultado = $this->aplicarQry($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "<br>";
        }
    }
}
?>