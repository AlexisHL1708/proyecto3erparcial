<?php
class Conexion{
    //atributos
    private $_objConectar;
    
    //conectar
    public function __construct()
        {
            try{
                $this->_objConectar = new mysqli(SERVIDOR,USUARIO,CONTRASENA,BASE_DATOS);
            }
            catch(Exception $e){echo "Error en la conexion".$e->getMessage().'<br>';
            }
        }
    //ejecutar Qry
    public function ejecutarConsulta($consulta)
    {
        $resultado = $this->_objConectar->query($consulta);
        return $resultado;
    }
    //cerrar conexion
    public function cerrarConexion()
    {
        $this->_objConectar->close();
    }
}
?>