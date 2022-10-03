<html>
<head>
    <title> PAI </title>
</head>
<body>

	<form action="./ae.php" method="POST">
        Login <input type="text" Login="login" name="login" />  <br><br>
		Hasło <input type="text" Hasło="haslo" name="haslo"/> <br><br>
        <p><input type="checkbox" name="zapam" value="zapam" /> Hasło Zapamiętać?</p>
		<input type="submit" />
	</form>
<?php
/*
 $products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            echo $products['paper'] ['laser']," <br>";
			echo $products['pens'] ['ball']," <br>";
			echo $products['misc'] ['glue']," <br>";
			
			foreach($products as $section => $items)
                foreach($items as $key => $value)
                    echo "$section: \t $key \t ($value)<br>";
            echo "</pre>";   

	
$chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
	$chessboard[6][3] = " ";
	$chessboard[4][3] = "p";
    echo "<pre>";

	
	
    foreach($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece ";
        echo "<br>";
    }
    echo "</pre>";
*/

		$login=$_POST['login'];
		$haslo=$_POST['haslo'];
		
		echo $login;
		echo sha1($haslo);
		
		if(isset($_POST['zapam'])){
			echo "</br>Haslo zapamietane";
        }


	
?>

</body>
</html>