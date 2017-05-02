<html>
	<head>
		<meta name="viewport" content="width=device-width" />
		<title>PESProject</title>
	</head>
    <body>
        Relay Control:
        <form method="get" action="gpio.php">
                <input type="submit" value="ON" name="on">
                <input type="submit" value="OFF" name="off">
        </form>
        <?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
		if(isset($_GET['on'])){
			$gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
			echo "Relay is on";
        }
        else if(isset($_GET['off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
                echo "Relay is off";
        }
        ?>
        </body>
</html>