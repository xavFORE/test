<p style="color: green;"></p>
<?php
if ($_POST) {
    $nom = $_POST["nom"];
    print("ton nom: " . $nom . "<br>");

    $mail = $_POST["mail"];
    /* Validation d'adresses email avec filter_var () */
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: green;'>L'adresse email '$mail' est valide.</p><br>";
    } else {
        echo "<p style='color: red;'>L'adresse email '$mail' est invalide.</p><br>";
    }
    //exit();

    $pw = $_POST["pw"];

    print("mdp : " . $pw . "<br>");
    //exit();

    $age = $_POST["age"];
    print("tu as : " . $age . " ans<br>");
    //exit();
}

?>




<form action="#" method="post">

    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <input type="text" name="mail" placeholder="ton mail">
    <br>
    <input type="text" name="pw" placeholder="ton mot de passe">
    <br>
    <input type="text" name="age" placeholder="ton age">
    <br>
    <button type="submit">OK</button>

</form>