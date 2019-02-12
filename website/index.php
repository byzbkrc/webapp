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
            <li class="right">
                <a href="./contact.html">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="center">
        <h1>
            Looking for some good books?
        </h1>
        <h2>
            Search here!
        </h2>
        <div>
            <form class="input-group half-size center-horizontal" method="get" action="./search.php">
                <input type="text" class="form-control" name="searchTerm" placeholder="Search">
                <input class="btn btn-red center-horizontal" type="submit" value="Search" >
            </form>
		</div>
        <div>
            <h4>Looking for all books?
                <a href="./books.php">click here</a>
            </h4>
        </div>
    </div>
</body>


</html>