<?php
    class Striker {
        public function score($goals){
            echo "Scored " . $goals . " goals!<br>";
        }
    }

    class Ronaldo extends Striker {
        public function score($goals) {
            parent::score($goals);
            echo "Ronaldo is a legend!<br>";
        }
    }




?>