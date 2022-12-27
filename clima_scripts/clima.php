<?php
    class clima {
        private $temp;
        private $temp_min;
        private $temp_max;
        private $feelss_like;
        private $description;
        private $icon;
        private $humidity;
        private $pesure;
        private $marca;

        //sets e gets -> modificadores de acesso
        public function __get($atr) {
            return $this->$atr;
        }

        public function __set($atr, $value) {
            $this->$atr = $value;
        }
    }
?>