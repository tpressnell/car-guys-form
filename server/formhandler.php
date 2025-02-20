<html>
<body>

<h1>My first PHP page</h1>

<?php

$cgname = htmlspecialchars($_POST["cgname"]);
$cgemail = htmlspecialchars($_POST["cgemail"]);
$oname = htmlspecialchars($_POST["oname"]);
$oemail = htmlspecialchars($_POST["oemail"]);
$carinfo = htmlspecialchars($_POST["carinfo"]);
$complaints = htmlspecialchars($_POST["complaints"]);
$engineoil = htmlspecialchars($_POST["engineoil"]);
$transmissionfluid = htmlspecialchars($_POST["transmissionfluid"]);
$psfluid = htmlspecialchars($_POST["psfluid"]);
$coolant = htmlspecialchars($_POST["coolant"]);
$brakefluid = htmlspecialchars($_POST["brakefluid"]);
$washerfluid = htmlspecialchars($_POST["washerfluid"]);
$steeringrack = htmlspecialchars($_POST["steeringrack"]);
$tierod_ds = htmlspecialchars($_POST["tierod_ds"]);
$tierod_ps = htmlspecialchars($_POST["tireod_ps"]);
$swaybarendlinks = htmlspecialchars($_POST["swaybarendlinks"]);
$balljoints_ds = htmlspecialchars($_POST["balljoints_ds"]);
$balljoints_ps = htmlspecialchars($_POST["balljoints_ps"]);
$shock_strut_ds = htmlspecialchars($_POST["shock_strut_ds"]);
$shock_strut_ps = htmlspecialchars($_POST["shock_strut_ps"]);
$coilspring_ds = htmlspecialchars($_POST["coilspring_ds"]);
$coilspring_ps = htmlspecialchars($_POST["coilspring_ps"]);
$rshock_strut_ds = htmlspecialchars($_POST["rshock_strut_ds"]);
$rshock_strut_ps = htmlspecialchars($_POST["rshock_strut_ps"]);
$rcoilspring_ds = htmlspecialchars($_POST["rcoilspring_ds"]);
$rcoilspring_ps = htmlspecialchars($_POST["rcoilspring_ps"]);
$rotor_fds = htmlspecialchars($_POST["rotor_fds"]);
$rotor_fps = htmlspecialchars($_POST["rotor_fps"]);
$drum_rotor_rds = htmlspecialchars($_POST["drum_rotor_rds"]);
$drum_rotor_rps = htmlspecialchars($_POST["drum_rotor_rps"]);
$pads_fds = htmlspecialchars($_POST["pads_fds"]);
$pads_fps = htmlspecialchars($_POST["pads_fps"]);
$pads_shoes_rds = htmlspecialchars($_POST["pads_shoes_rds"]);
$pads_shoes_rps = htmlspecialchars($_POST["pads_shoes_rps"]);
$wheel_fds = htmlspecialchars($_POST["wheel_fds"]);
$wheel_fps = htmlspecialchars($_POST["wheel_fps"]);
$wheel_rds = htmlspecialchars($_POST["wheel_rds"]);
$wheel_rps = htmlspecialchars($_POST["wheel_rps"]);
$tire_fds = htmlspecialchars($_POST["tire_fds"]);
$tire_fds = htmlspecialchars($_POST["tire_fps"]);
$tire_fds = htmlspecialchars($_POST["tire_rds"]);
$tire_fds = htmlspecialchars($_POST["tire_rps"]);
$eec = htmlspecialchars($_POST["eec"]);
$notes = htmlspecialchars($_POST["notes"]);
 
echo "Your name is: " . $cgname;
?>

<a href="mailto:tyler.pressnell86@gmail.com">Send an email</a>

</body>
</html>