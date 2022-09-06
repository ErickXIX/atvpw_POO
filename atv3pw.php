<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>atw1pw</title>
    </head>
    <body style="background-color:#404040;">
        <?php
            class Círculo{
                private $x;
                private $y;
                private $raio;

                    public function circulo($raio, $x = 0, $y = 0 ){
                        $this->x = $x;
                        $this->y = $y;
                        $this->setRaio($raio);
                    }

                    public function area(){
                        return pi() * ($this->raio * 2);
                    }

                    public function move($point){
                        $this->x = $point->getX();
                        $this->y = $point->getY();
                    }

                    public function increase($value){
                        $this->setRaio($this->raio + $value);
                    }

                    public function decrease($value){
                        $this->setRaio($this->raio - $value);
                    }

                    public function getX(){
                        return $this->x;
                    }

                    public function setX($x){
                        $this->x = $x;
                    }

                    public function getY(){
                        return $this->y;
                    }

                    public function setY($x){
                        $this->y = $y;
                    }

                    public function getRaio(){
                        return $this->raio;
                    }

                    public function setRaio($raio){
                        $this->raio = $raio < 0 ? 0 : $raio;
                    }
            }
        ?>
    </body>
</html>