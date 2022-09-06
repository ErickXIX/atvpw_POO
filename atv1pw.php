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
            class Invoice{
                private $numeroFatura;
                private $desItem;
                private $qtdItem;
                private $preco;

                    public function __construct($par1, $par2, $par3, $par4){
                        $this-> numeroFatura = $par1;
                        $this-> desItem = $par2;
                            if($par3 <= 0 ){
                                $this->qtdItem = 0;
                            }

                            else{
                                $this->qtdItem = $par3;
                            }

                            if($par4 <= 0 ){
                                $this->preco = 0.0;
                            }

                            else{
                                $this->preco = $par4;
                            }
                    }

                    public function __set($atributo, $value){
                        $this->$atributo = $value;
                    }
                    
                    public function __get($atributo){
                        return $this->$atributo;
                    }

                    public function getInvoiceAmount() {
                        return ($this->preco * $this->qtdItem);
                    }
            }
        ?>
    </body>
</html>