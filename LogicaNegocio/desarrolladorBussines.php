<?php

    include_once('../DataAccess/DesarrolladorDAO.php');
  

    class desarrolladorBussines {

        protected $DesarrolladorDao;

        function __construct($con) {

            $this->DesarrolladorDao = new DesarrolladorDAO($con);

        }

        public function getDesarrollador() {

            $desarrollador = $this->DesarrolladorDao->getAll();
           /* echo '<pre>'; var_dump($desarrollador);echo '</pre>'; */
            return $desarrollador;

        }

        public function getDesarrolladores() {

            $product = $this->DesarrolladorDao->getAll();
           /* echo '<pre>'; var_dump($productos);echo '</pre>'; */
            return $product;

        }

        public function saveDesarrollador($datos)
        {
            $this->PlataformaDao->save($datos);
        }
    
        public function modifyDesarrollador($id, $datos)
        {
            $this->PlataformaDao->modify($id, $datos);
        }
    
        public function deleteDesarrollador($id)
        {
            $this->PlataformaDao->delete($id);
        }

    }
