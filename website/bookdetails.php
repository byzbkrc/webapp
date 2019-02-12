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
    <?php
    $titles = array(
        "The Hate U Give",
        "Everything, Everything",
        "The sun is also a star"
    );
    $title1Description = "Sixteen-year-old Starr Carter moves between two worlds: the poor neighborhood where she lives and the fancy suburban prep school she attends. The uneasy balance between these worlds is shattered when Starr witnesses the fatal shooting of her childhood best friend Khalil at the hands of a police officer. Khalil was unarmed. 
        Soon afterward, his death is a national headline. Some are calling him a thug, maybe even a drugdealer and a gangbanger. Protesters are taking to the streets in Khalil’s name. Some cops and the local drug lord try to intimidate Starr and her family. What everyone wants to know is: what really went down that night? And the only person alive who can answer that is Starr. 
        But what Starr does—or does not—say could upend her community. It could also endanger her life.";

    $title2Description = "My disease is as rare as it is famous. Basically, I’m allergic to the world.
        I don’t leave my house, have not left my house in seventeen years. The only people I ever see are my mom and my nurse, Carla.But then one day, a moving truck arrives next door.
        I look out my window, and I see him. He’s tall, lean and wearing all black—black T-shirt, black jeans, black sneakers, and a black knit cap that covers his hair completely. He catches me looking and stares at me.
        I stare right back. His name is Olly. Maybe we can’t predict the future, but we can predict some things. For example, I am certainly going to fall in love with Olly.
        It’s almost certainly going to be a disaster. ";

    $title3Description = "Natasha: I’m a girl who believes in science and facts. Not fate. Not destiny. Or dreams that will never come true. I’m definitely not the kind of girl who meets a cute boy on a crowded New York City street and falls in love with him. Not when my family is twelve hours away from being deported to Jamaica. Falling in love with him won’t be my story. 
    Daniel: I’ve always been the good son, the good student, living up to my parents’ high expectations. Never the poet. Or the dreamer. But when I see her, I forget about all that. Something about Natasha makes me think that fate has something much more extraordinary in store—for both of us. 
    The Universe: Every moment in our lives has brought us to this single moment. A million futures lie before us. Which one will come true? ";

    $descriptions = array($title1Description, $title2Description, $title3Description);
    $images = array(
        "images/TheHateUGive.jpg",
        "images/EverythingEverything.jpg",
        "images/TheSunIsAlsoaStar.jpg"
    );
    $bookDescription = $_GET['title'];
    $indexKey = array_search(strtolower($bookDescription), array_map('strtolower', $titles));
    if ($indexKey !== false) {
        echo '
        <h1>' . $titles[$indexKey] . '</h1>
        <div class="row">
            <div class="column">
                <img src="' . $images[$indexKey] . '" height="280" width="160">
            </div>
            <div class="column">
                <p>
                ' . $descriptions[$indexKey] . '
                </p>
            </div>
        </div>
        <h3>
            <a onclick="goBack()" class="goBack">Go Back</a>
        </h3>
        ';
    } else {
        echo '
        <h1>
            Ooops!?
        </h1>
        <h2>
            The details are not filled in for this book.
        </h2>
        <h3>
            <a onclick="goBack()" class="goBack">Go Back</a>
        </h3>';
    }
    ?>
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>