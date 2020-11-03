<?php

class Utenti {
    public $name;
    public $lastname;
    public $age;
    public $email;
    public $password;
    public $over60 = "no";

    // Funzione per cambiare $over60 in "sì", in base all'$age inserita
    public function isOver60() {
        if($this->age > 60) {
            $this->over60 = "sì";
        }
    }

    // Funzione che rende obbligatorio dichiarare un new Utente con i parametri nome e cognome
    public function __construct($_nome, $_cognome) {
        $this->name = $_nome;
        $this->lastname = $_cognome;
    }
}

$utente1 = new Utenti("Margherita", "Testi");
$utente1->age = 34;
$utente1->email = "margherita@fiore.it";
$utente1->password = "marghe1";
$utente1->isOVer60();

$utente2 = new Utenti("Haythem", "Romdhane");
$utente2->age = 35;
$utente2->email = "pinco@pallino.it";
$utente2->password = "hay1704";
$utente2->isOVer60();

$utente3 = new Utenti("Mattia", "Gardenghi");
$utente3->age = 9;
$utente3->email = "met@gmail.com";
$utente3->password = "met2012";
$utente3->isOVer60();

$arrayUtenti = [$utente1, $utente2, $utente3];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Object Oriented Programming</title>
        <style>
            table th {
                padding: 10px;
                border: 5px solid grey;
            }

            table td {
                padding: 10px;
                border: 5px solid lightgrey;
            }
        </style>
    </head>
    <body>
        <h1>Utenti</h1>
        <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Età</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Over-60</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arrayUtenti as $utente): ?>
                <tr>
                <td><?php echo $utente->name ; ?></td>
                <td><?php echo $utente->lastname ; ?></td>
                <td><?php echo $utente->age ; ?></td>
                <td><?php echo $utente->email ; ?></td>
                <td><?php echo $utente->password ; ?></td>
                <td><?php echo $utente->over60 ; ?></td>
                </tr>
            <?php endforeach;  ?>
        </tbody>
        </table>
    </body>
</html>
