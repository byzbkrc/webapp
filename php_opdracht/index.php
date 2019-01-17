<html>

<head>
    <title>Cijfer berekenen</title>
</head>

<body>
    <h2> Het gemiddelde van vier vakken berekenen</h2>
    <h4> Voer je cijfers van de vier vakken in.</h4><br />

    <form action="index.php" method="post">
        Cijfer1: <input type="text" name="cijfer1"><br>
        Cijfer2: <input type="text" name="cijfer2"><br>
        Cijfer3: <input type="text" name="cijfer3"><br>
        Cijfer4: <input type="text" name="cijfer4"><br>
        <select name="colorlist">
            <option value="green">Groen</option>
            <option value="red">Rood</option>
            <option value="blue">Blauw</option>
            <option value="yellow">Geel</option>
        </select>
        <input type="submit" name="verzend" value="Bereken">
    </form>
    <p id="average">
    Het gemiddelde is: 
    <?php
    if (isset($_POST["verzend"])) {
        $backgroundColor = $_POST['colorlist'];
        echo '<body style="background-color:', $backgroundColor, '">';
        $cijfer1 = $_POST["cijfer1"];
        $cijfer2 = $_POST["cijfer2"];
        $cijfer3 = $_POST["cijfer3"];
        $cijfer4 = $_POST["cijfer4"];
        $totaal = ($cijfer1 + $cijfer2 + $cijfer3 + $cijfer4);
        $gemiddelde = $totaal / 4;
        $voorEen7 = (35 - $totaal);
        echo $gemiddelde;
        if ($voorEen7 < 1) {
            echo '<p>Ik sta sowieso al een 7!!!! &#x1F389;</p>';
        } else if ($voorEen7 <= 10) {
            echo '<p>Voor een 7 moet ik een: '.$voorEen7. ' halen! &#x1F4AA;</p>';
        } else {
            echo '<p>Ik kan helaas geen 7 meer staan ('.$voorEen7.') &#x1F62D;</p>';
        }
    }
    ?>
</p>
    <form action="index.php" method="post">
        <p>Wachtwoord:</p> <input type="password" name="wachtwoord">
        <input type="submit" name="encrypt">
    </form>
    <p>
    Encrypted wachtwoord: 
        <?php
            if (isset($_POST["encrypt"])) {
                $password = $_POST["wachtwoord"];
                $password = md5($password);
                echo $password;
            }
        ?>
    </p>

</body>

</html>