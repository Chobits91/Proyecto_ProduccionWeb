<?php

    include_once('../DataAccess/PlataformaDAO.php');
  

    class plataformaBussines {

        protected $PlataformaDao;

        function __construct($con) {

            $this->PlataformaDao = new PlataformaDAO($con);

        }

        
        public function getPlataforma($id_plataforma) {

            $plataforma = $this->PlataformaDao->getOne($id_plataforma);
            return $plataforma;
        }
        
        public function getPlataformas() {

            $plataformas = $this->PlataformaDao->getAll();
            return $plataformas;

        }

        public function savePlataforma($datos)
        {
            $this->PlataformaDao->save($datos);
        }
    
        public function modifyPlataforma($id, $datos)
        {
            $this->PlataformaDao->modify($id, $datos);
        }
    
        public function deletePlataforma($id)
        {
            $this->PlataformaDao->delete($id);
        }

    }
