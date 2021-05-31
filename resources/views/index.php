<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php  include 'person.inc.php';

    //Define a new class
    // $person1 = new Person("Chris", "Blue", 26);
    
    // //Print specific data from classes
    // echo $person1->name;
    // echo $person1->eyeColor;
    // echo $person1->age;

    // //Use function setName
    // $person1->setName("Willy");

    // //Use function getName
    // echo $person1->getName();

    $gehakt = new Boodschappen("Gehakt", 5.50);
    $rodekool = new Boodschappen("Rode Kool", 2.00);
    $wittebonen = new Boodschappen("Witte Bonen", 1.50);
    $andijvie = new Boodschappen('Andijvie', 2.00);

    echo var_dump($gehakt);
    echo "<br>";
    echo var_dump($rodekool);
    echo "<br>";
    echo var_dump($wittebonen);
    
    ?>
    
</body>
</html>