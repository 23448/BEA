<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="scripting GD">
    <meta name="author" content="Ma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP String handler</title>
</head>

<body>
    <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
			 }
		  ?>
        <div class="wrapper">
            <form method="GET" action="stringhandler_basis.php">
                <fieldset>
                    <legend>Zet hier jouw naam + klas</legend>
                    <input type="text" name="input1" placeholder="Naam">
                    <br>
                    <input type="text" name="input2" placeholder="Klas">
                    <input type="submit" id="submit" name="submit" value="submit">
                </fieldset>
            </form>
            <hr>
            <?php

			?>
                <ul>
                    <li>Ingevoerde string 1:
                        <?php  echo $input1;  ?>
                    </li>
                    <li>Ingevoerde string 2:
                        <?php  echo $input2; ?>
                    </li>
                    <li>String 1 getrimd trim():
                        <?php  echo ltrim($input1 ," ");     ?>
                    </li>
                    <li>String 2 getrimd trim():
                        <?php echo ltrim($input2 , " ");      ?>
                    </li>
                    <li>String 3 is de concatenation van string 1 en string 2:
                        <?php  echo $input1 . "" . $input2; ?>
                    </li>
                    <li>De lengte van string 3 is:
                        <?php echo str_word_count($input1 . "" . $input2); ?>
                    </li>
                    <li>Zoeken naar spaties. Er zit een spatie op positie:
                        <?php echo strpos($input1 . "" . $input2 , " ");  ?>
                    </li>
                    <li>Zoeken naar @. Er zit een @ op positie:
                        <?php echo strpos ($input1 . "" . $input2 , "@");  ?>
                    </li>
                    <li>Zoeken naar "." . Er zit een "." op positie:
                        <?php echo strpos($input1 . "" . $input2 , ".");   ?>
                    </li>
                    <li>Zoek naar woord "html" vervang dit door "PHP":
                        <?php echo str_replace("html", "PHP", $input1 . "" . $input2);   ?>
                    </li>
                    <li>Wijzig de eerste letter van string 3 naar hoofdletter:
                        <?php echo ucfirst($input1 . "" . $input2);  ?>
                    </li>
                    <li>Alles in hoofdletters:
                        <?php echo strtoupper($input1 . "" . $input2);   ?>
                    </li>
                </ul>
                <hr>
                <h4>Bonus opdracht: maak code waarmee jij controleert of een input een geldig e-mail adres is</h4>
                <h4>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP</h4>
        </div>
</body>

</html>