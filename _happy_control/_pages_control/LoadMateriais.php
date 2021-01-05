<?php
    require_once "../_interface/conect.php";

    class LoadMateriais{
        public $materialBranco = new Material;
        public $materialAmadeirado = new Material;

        function set_materiais($typeMDF, $valorMDF, $valorFitaRolo, $valorDobradica, $valorPuxador, $valorHDF, $valorThiner, $valorEstopa, $valorCola, $valorRodinha, $valorCantoneira){
            if($typeMDF == 1){
                $this->materialBranco->setTypeMDF($typeMDF);
                $this->materialBranco->setValorMDF($valorMDF);
                $this->materialBranco->setValorFitaRolo($valorFitaRolo);
                $this->materialBranco->setValorDobradica($valorDobradica);
                $this->materialBranco->setValorPuxador($valorPuxador);
                $this->materialBranco->setValorHDF($valorHDF);
                $this->materialBranco->setValorThiner($valorThiner);
                $this->materialBranco->setValorEstopa($valorEstopa);
                $this->materialBranco->setValorCola($valorCola);
                $this->materialBranco->setValorRodinha($valorRodinha);
                $this->materialBranco->setValorCantoneira($valorCantoneira);
            }

            else{
                $this->materialAmadeirado->setTypeMDF($typeMDF);
                $this->materialAmadeirado->setValorMDF($valorMDF);
                $this->materialAmadeirado->setValorFitaRolo($valorFitaRolo);
                $this->materialAmadeirado->setValorDobradica($valorDobradica);
                $this->materialAmadeirado->setValorPuxador($valorPuxador);
                $this->materialAmadeirado->setValorHDF($valorHDF);
                $this->materialAmadeirado->setValorThiner($valorThiner);
                $this->materialAmadeirado->setValorEstopa($valorEstopa);
                $this->materialAmadeirado->setValorCola($valorCola);
                $this->materialAmadeirado->setValorRodinha($valorRodinha);
                $this->materialAmadeirado->setValorCantoneira($valorCantoneira);
            }
        }
    }

?>