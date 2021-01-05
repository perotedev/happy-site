<?php
    class Material{
        private $typeMDF;
        private $valorMDF;
        private $valorFitaRolo;
        private $valorDobradica;
        private $valorPuxador;
        private $valorHDF;
        private $valorThiner;
        private $valorEstopa;
        private $valorCola;
        private $valorRodinha;
        private $valorCantoneira;

        // constructor
        function Material($typeMDF, $valorMDF, $valorFitaRolo, $valorDobradica, $valorPuxador, $valorHDF, $valorThiner, $valorEstopa, $valorCola, $valorRodinha, $valorCantoneira){
            $this->typeMDF = $typeMDF;
            $this->valorMDF = $valorMDF;
            $this->valorFitaRolo = $valorFitaRolo;
            $this->valorDobradica = $valorDobradica;
            $this->valorPuxador = $valorPuxador;
            $this->valorHDF = $valorHDF;
            $this->valorThiner = $valorThiner;
            $this->valorEstopa = $valorEstopa;
            $this->valorCola = $valorCola;
            $this->valorRodinha = $valorRodinha;
            $this->valorCantoneira = $valorCantoneira;
        }

        // setters
        public function setTypeMDF($typeMDF){
            $this->typeMDF = $typeMDF;
        }

        public function setValorMDF($valorMDF){
            $this->valorMDF = $valorMDF;
        }

        public function setValorFitaRolo($valorFitaRolo){
            $this->valorFitaRolo = $valorFitaRolo;
        }

        public function setValorDobradica($valorDobradica){
            $this->valorDobradica = $valorDobradica;
        }

        public function setValorPuxador($valorPuxador){
            $this->valorPuxador = $valorPuxador;
        }

        public function setValorHDF($valorHDF){
            $this->valorHDF = $valorHDF;
        }

        public function setValorThiner($valorThiner){
            $this->valorThiner = $valorThiner;
        }

        public function setValorEstopa($valorEstopa){
            $this->valorEstopa = $valorEstopa;
        }

        public function setValorCola($valorCola){
            $this->valorCola = $valorCola;
        }

        public function setValorRodinha($valorRodinha){
            $this->valorRodinha = $valorRodinha;
        }

        public function setValorCantoneira($valorCantoneira){
            $this->valorCantoneira = $valorCantoneira;
        }

        // getters
        public function getTypeMDF(){
            return $this->typeMDF;
        }

        public function getValorMDF(){
            return $this->valorMDF;
        }

        public function getValorFitaRolo(){
            return $this->valorFitaRolo;
        }

        public function getValorDobradica(){
            return $this->valorDobradica;
        }

        public function getValorPuxador(){
            return $this->valorPuxador;
        }

        public function getValorHDF(){
            return $this->valorHDF;
        }

        public function getValorThiner(){
            return $this->valorThiner;
        }

        public function getValorEstopa(){
            return $this->valorEstopa;
        }

        public function getValorCola(){
            return $this->valorCola;
        }

        public function getValorRodinha(){
            return $this->valorRodinha;
        }

        public function getValorCantoneira(){
            return $this->valorCantoneira;
        }
    }
?>