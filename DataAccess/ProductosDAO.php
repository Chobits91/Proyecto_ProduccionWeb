<?php

require_once('DAO.php');
require_once('DesarrolladorDAO.php');
require_once('PlataformaDAO.php');
require_once('CategoriaDAO.php');
require_once('../Modelos/ProductosEntity.php');

class ProductosDAO extends DAO {

    protected $DesarrolladorDao;
    protected $PlataformaDao;
    protected $CategoriaDao;

    function __construct($con) 
    {
        parent::__construct($con);
        $this->table = 'productos';
        $this->DesarrolladorDao = new DesarrolladorDAO($con);
        $this->PlataformaDao = new PlataformaDAO($con);
        $this->CategoriaDao = new CategoriaDAO($con);
    }

    public function getOne($id) {
        
        $sql = "SELECT id_producto, id_desarrollador, id_plataforma, id_categoria, nombre, descripcion, precio, stock, destacado, calificacion, fechadelanzamiento FROM $this->table WHERE id_producto = $id";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ProductosEntity')->fetch();

        $resultado->setIDDesarrollador($this->DesarrolladorDao->getOne($resultado->getIDDesarrollador())); 
        $resultado->setIDPlataforma($this->PlataformaDao->getOne($resultado->getIDPlataforma())); 
        $resultado->setIDCategoria($this->CategoriaDao->getOne($resultado->getIDCategoria())); 

        return $resultado;

    }

    public function getAll($where = array()) {

        $sql = "SELECT id_producto, id_desarrollador, id_plataforma, id_categoria, nombre, descripcion, precio, stock, destacado, calificacion, fechadelanzamiento FROM $this->table where 1=1";
        
        if(!empty($where['plataformas'])){
            $sql.= ' and id_plataforma='.$where['plataformas'];
        }
        if(!empty($where['generos'])){
            $sql.= ' and id_categoria='.$where['generos'];
        }
        
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'ProductosEntity')->fetchAll();

        foreach($resultado as $index=>$res){
            $resultado[$index]->setIDDesarrollador($this->DesarrolladorDao->getOne($res->getIDDesarrollador()));
            $resultado[$index]->setIDPlataforma($this->PlataformaDao->getOne($res->getIDPlataforma()));
            $resultado[$index]->setIDCategoria($this->CategoriaDao->getOne($res->getIDCategoria()));
        }
        
    return $resultado;

    }
//Agregar producto
    public function save($datos = array()) 
        {   
            $categoria = $datos['perfiles'];
            unset($datos['perfiles']);

            $save = parent::save($datos); 
           
            $id = $this->con->lastInsertId();

            $sql = '';
            foreach($perfiles as $perfil) 
            {
                $sql .= 'INSERT INTO usuario_perfil VALUES('.$id.','.$perfil.');';
            }

            $this->con->exec($sql);
            
            return $save;

        }

//Modificar producto
        public function modify($id, $datos = array()) 
        {
            $perfiles = $datos['perfiles'];
            unset($datos['perfiles']);
            $modify = parent::modify($id, $datos);
        
            $sql = 'DELETE FROM usuario_perfil WHERE id_usuario = '.$id.';';
            foreach($perfiles as $perfil) 
            {
                $sql .= 'INSERT INTO usuario_perfil VALUES('.$id.','.$perfil.');';
            }

            $this->con->exec($sql);

            return $modify;
        }
//Eliminar producto
        public function delete($id){
        
            $sql = 'DELETE FROM usuario_perfil WHERE id_usuario = '.$id.';';
            $this->con->exec($sql);
            return parent::delete($id);
        }

}
