<?php
    class ValorMateriais{
        private Material $materialBranco = new Material;
        private Material $materialAmadeirado = new Material;

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