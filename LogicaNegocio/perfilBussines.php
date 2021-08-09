<?php

require_once('../DataAccess/PerfilDAO.php');

class PerfilBusiness
{

    protected $PerfilDAO;

    function __construct($con)
    {
        $this->PerfilDAO = new PerfilDAO($con);
    }

    public function getPerfil($id_perfil)
    {

        $perfil = $this->PerfilDAO->getOne($id_perfil);
        return $perfil;
    }

    public function getPerfiles()
    {
        $users = $this->PerfilDAO->getAll();

        return $users;
    }

    public function savePerfil($datos)
    {
        $this->PerfilDAO->save($datos);
    }

    public function modifyPerfil($id, $datos)
    {
        $this->PerfilDAO->modify($id, $datos);
    }

    public function deletePerfil($id)
    {
        $this->PerfilDAO->delete($id);
    }
}
