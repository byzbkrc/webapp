<html>

<head>
    <title>Cijfer berekenen</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2> Het gemiddelde van vier vakken berekenen</h2>
                <h4> Voer je cijfers van de vier vakken in.</h4><br />
                <form action="index.php" method="post" class="container">
                    <div class="row">
                        <label>Cijfer1:</label>
                        <input type="text" name="cijfer1">
                    </div>
                    <div class="row">
                        <label>Cijfer2:</label>
                        <input type="text" name="cijfer2">
                    </div>
                    <div class="row">
                        <label>Cijfer3:</label>
                        <input type="text" name="cijfer3">
                    </div>
                    <div class="row">
                        <label>Cijfer4:</label>
                        <input type="text" name="cijfer4">
                    </div>
                    <div class="row">
                        <input type="submit" name="verzend" value="Bereken">
                    </div>
                </form>
                <p id="average">
                Het gemiddelde is: 
                <?php
                if (isset($_POST["verzend"])) {
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
                if (isset($_POST["achtergrond"])) {
                    $backgroundColor = $_POST['colorlist'];
                    echo '<body style="background-color:', $backgroundColor, '">';
                }
                ?>
                </p>
            </div>
            <div class="col-6">
                <h2>Wachtwoord veilig encrypten</h2>
                <form action="index.php" method="post" class="container">
                    <div class="row">
                        <label>Wachtwoord:</label>
                        <input type="password" name="wachtwoord">   
                    </div>
                    <div class="row">
                        <input type="submit" name="encrypt" value="encrypt">
                    </div>
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
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <h2>Verander achtergrond</h2>
            </div>
            <div class="col-6">
                <form action="index.php" method="post" class="container">
                    <div class="row">
                        <select name="colorlist">
                            <option value="green">Groen</option>
                            <option value="red">Rood</option>
                            <option value="blue">Blauw</option>
                            <option value="yellow">Geel</option>
                        </select>
                    </div>
                    <div class="row">
                        <input type="submit" name="achtergrond" value="Verander">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>