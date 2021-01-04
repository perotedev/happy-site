<?php
    require "./Material.php";

    class ValorMateriais{
        private $materialBranco = new Material;
        private $materialAmadeirado = new Material;

        // setters
        public function setMaterialBranco($materialBranco){
            $this->materialBranco = $materialBranco;
        }

        public function setMaterialAmadeirado($materialAmadeirado){
            $this->materialAmadeirado = $materialAmadeirado;
        }

        // getters
        public function getMaterialAmadeirado(){
            return $this->materialAmadeirado;
        }

        public function getMaterialBranco(){
            return $this->materialBranco;
        }

    }

?>