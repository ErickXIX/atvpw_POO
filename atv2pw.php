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
            class Empregado{
                private $nome;
                private $sobrenome;
                private $salario;
            
                    public function empregado($salario, $nome = "Sem Nome", $sobrenome = "Sem Sobrenome"){
                        $this->setNome($nome);
                        $this->setSobrenome($sobrenome);
                        $this->salario($salario);
                    }

                    public function salarioIncrease(){
                        $this->salario += $this->salario * 10 / 100; 
                    }
                
                    public function getNome(){
                        return $this->nome; 
                    }
                
                    public function setNome($nome){
                        $this->nome = $nome;
                    }
                
                    public function getSobrenome(){
                        return $this->sobrenome;
                    }
                
                    public function setSobrenome($sobrenome){
                        $this->sobrenome = $sobrenome;
                    }
                
                    public function getSalario(){
                        return $salario;
                    }
                
                    public function setSalario($salario){
                        $this->salario = $salario < 0 ? 0 : $salario;
                    }
            }
        ?>
    </body>
</html>