<h1>Dice Roller</h1>
<h3>Made By <a href="http://ciaran.cicisoft.net">Ciaran Flanagan</a></h3>
<p>
	Dice Roller just simulates a fair die being thrown. It also counts and displays the amount of one's, two's, etc.<br/>
	If you enjoyed I'd appreciate a quick follow on <a href="http://twitter.com/ciaranpflanagan">twitter</a>. Thanks<br/><br/>
	<hr/><br/><br/>

</p>
<form action="index.php" method="post">
	<input type="text" name="times" placeholder="Amount of rolls">
	<input type="submit" value="Roll">
</form>
<?php
echo "<i><b>NOTE: Default amount of rolls is 10</b></i><br/><br/><br/>";
// Checking for how many times the dice wants to be rolled
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Getting input
	$times = intval(trim($_POST['times']));
} else {
	$times = 10;
}

// Setting the variables
$one = 0;
$two = 0;
$three = 0;
$four = 0;
$five = 0;
$six = 0;

// Running for loop ( e.g. rolling the dice )
for ($i=0; $i < $times; $i++) { 
	$number = rand(1, 6);
	echo $number . "<br/>";
	
	// Checking what number is shown and incrementing the corresponding variable
	if ($number == 1) {
		$one++;
	}
	elseif ($number == 2) {
		$two++;
	}
	elseif ($number == 3) {
		$three++;
	}
	elseif ($number == 4) {
		$four++;
	}
	elseif ($number == 5) {
		$five++;
	}
	elseif ($number == 6) {
		$six++;
	}
}

// Echoing the amount of one's and two's and so on
echo "One's: " . $one . "<br/>";
echo "Two's: " . $two . "<br/>";
echo "Three's: " . $three . "<br/>";
echo "Four's: " . $four . "<br/>";
echo "Five's: " . $five . "<br/>";
echo "Six's: " . $six . "<br/>";

?>