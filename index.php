<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PedraPapelTesoura</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
        
            $jogadas=$_POST["options"];
            $opçoes=array("Tesoura","Pedra","Papel");
            $escolha=rand(0,2);
            $ComputerTurn=$opçoes[$escolha];
    

        }
    ?>
    <p>
        Jogo PedraPapelTesoura PHP Version     //////   Criado em aula
    </p>
    <hr>
    <p></p>
    <p></p>
    <form action="index.php" method="POST">
    <hr>
    <select name="options">
    <option value="Tesoura">Tesoura</option>
    <option value="Papel">Papel</option>
    <option value="Pedra">Pedra</option>
    </select>
    <input type="submit" name="submit" value="Jogar"/>

    </form>

    <p>
        Resultado:
        <p>
        <?php
        echo "O jogador escolheu: ".$jogadas;
        ?>
        <hr>
        <br>
         <?php
        echo "O computador escolheu: ".$ComputerTurn;
        ?>
        <hr>
        
        Conclusão:
        
        <?php
        if($jogadas==$ComputerTurn){
            echo "Empate";
        }
        elseif($jogadas=="Tesoura" || $ComputerTurn=="Papel"){
            echo " O jogador ganha ";
        }
        elseif($jogadas=="Pedra" || $ComputerTurn=="Tesoura"){
            echo " O jogador ganha ";
        }
        elseif($jogadas=="Papel" || $ComputerTurn=="Pedra"){
            echo "O jogador ganha";
        }
        if($jogadas=="Pedra" || $ComputerTurn=="Papel"){
            echo "Perdeste";
        }
        
        elseif($jogadas=="Tesoura" || $ComputerTurn=="Pedra"){
            echo "Perdeste";
        }
        elseif($jogadas=="Papel" || $ComputerTurn=="Tesoura"){
            echo "Perdeste";
        }
       
        
        ?>
    </p>
</body>
</html>