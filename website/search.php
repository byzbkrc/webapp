<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BBooks - The books you need!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li class="left">
                <a href="./index.php">
                    <img src="images/Home.png" height="25" width="25">
                </a>
            </li>
            <li class="right">
                <a href="./contact.html">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div>
            <?php
            $images = array(
                "images/TheHateUGive.jpg",
                "images/EverythingEverything.jpg",
                "images/TheSunIsAlsoaStar.jpg",
                "images/ToKillaMockingbird.jpg",
                "images/RedQueen.jpg",
                "images/GlassSword.jpg",
                "images/1984.jpg",
                "images/ELIC.jpg",
                "images/TheGirlOnTheTrain.jpg",
                "images/Twilight.jpg",
                "images/NewMoon.jpg",
                "images/Eclipse.jpg",
                "images/BreakingDawn.jpg",
                "images/PaperTowns.jpg",
                "images/TFIOS.jpg",
                "images/mebeforeyou.jpg"
            );
            $titles = array(
                "The Hate U give",
                "Everything, Everything",
                "The sun is also a star",
                "To Kill a Mockingbird",
                "Red Queen",
                "Glass Sword",
                "Nineteen-Eightyfour",
                "Extremely Loud and Incredibly Close",
                "The Girl on the Train",
                "Twilight",
                "New Moon",
                "Eclipse",
                "Breaking Dawn",
                "Paper Towns",
                "The Fault in Our Stars",
                "Me Before You"
            );
            $authors = array(
                "Angie Thomas",
                "Nicola Yoon",
                "Nicola Yoon",
                "Harper Lee",
                "Victoria Aveyard",
                "Victoria Aveyard",
                "George Orwell",
                "Jonathan Safran Foer",
                "Paula Hawkins",
                "Stephenie Meyer",
                "Stephenie Meyer",
                "Stephenie Meyer",
                "Stephenie Meyer",
                "John Green",
                "John Green",
                "Jojo Moyes"
            );
            $searchTerm = $_GET['searchTerm'];
            $indexKey = array_search(strtolower($searchTerm), array_map('strtolower', $titles));
            if ($indexKey !== false) {
                echo 
                '<h1>Book Found!</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <nav>
                                    <a href="./bookdetails.php?title='.$titles[$indexKey].'">
                                        <img src="'.$images[$indexKey].'" height="280" width="160">
                                    </a>
                                </nav>
                            </td>
                            <td>'.$titles[$indexKey].'</td>
                            <td>'.$authors[$indexKey].'</td>
                        </tr>
                    </tbody>
                </table>';
            } else {
                echo
                '<h1>
                    Ooops!?
                </h1>
                <h2>
                    I couldn’t find the book in my bookshelf
                </h2>
                <h3>
                    <a onclick="goBack()" class="goBack">Go Back</a>
                </h3>';
            }
            ?>
        </div>
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>