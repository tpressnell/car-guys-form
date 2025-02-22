<html>
<body>

<h1></h1>

<?php

$date = htmlspecialchars($_POST["date"]);
$cgname = htmlspecialchars($_POST["cgname"]);
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
$tire_fps = htmlspecialchars($_POST["tire_fps"]);
$tire_rds = htmlspecialchars($_POST["tire_rds"]);
$tire_rps = htmlspecialchars($_POST["tire_rps"]);
$eec = htmlspecialchars($_POST["eec"]);
$notes = htmlspecialchars($_POST["notes"]);
?>

<h1>Car Report Preview</h1>
<?php 

$body = [];

$body[] = "Date: " . $date;
$body[] = "<br>";
$body[] = "Your name: " . $cgname;
$body[] = "<br>";
$body[] = "Owner's name: " . $oname;
$body[] = "<br>";
$body[] = "Owner's email: " . $oemail;
$body[] = "<br>";
$body[] = "Car Year/Make/Model: " . $carinfo;
$body[] = "<br>";
$body[] = "Owner states: " . $complaints;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "FLUIDS";
$body[] = "<br>";
$body[] = "<br>";
$body[] = "Engine Oil: " . $engineoil;
$body[] = "<br>";
$body[] = "Transmission Fluid: " . $transmissionfluid;
$body[] = "<br>";
$body[] = "Power Steering Fluid: " . $psfluid;
$body[] = "<br>";
$body[] = "Coolant: " . $coolant;
$body[] = "<br>";
$body[] = "Brake Fluid: " . $brakefluid;
$body[] = "<br>";
$body[] = "Washer Fluid Level: " . $washerfluid;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "STEERING";
$body[] = "<br>";
$body[] = "<br>";
$body[] = "Steering Rack: " . $steeringrack;
$body[] = "<br>";
$body[] = "Driver Side Tie Rod: " . $tierod_ds;
$body[] = "<br>";
$body[] = "Passenger Side Tie Rod: " . $tierod_ps;
$body[] = "<br>";
$body[] = "Sway Bar End Links: " . $swaybarendlinks;
$body[] = "<br>";
$body[] = "Driver Side Ball Joints: " . $balljoints_ds;
$body[] = "<br>";
$body[] = "Passenger Side Ball Joints: " . $balljoints_ps;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "FRONT SUSPENSION";
$body[] = "<br>";
$body[] = "<br>";
$body[] = "Driver Side Shock/Strut: " . $shock_strut_ds;
$body[] = "<br>";
$body[] = "Passenger Side Shock/Strut: " . $shock_strut_ps;
$body[] = "<br>";
$body[] = "Driver Side Coil Spring: " . $coilspring_ds;
$body[] = "<br>";
$body[] = "Passenger Side Coil Spring: " . $coilspring_ps;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "REAR SUSPENSION";
$body[] = "<br>";
$body[] = "<br>";
$body[] = "Driver Side Shock/Strut: " . $rshock_strut_ds;
$body[] = "<br>";
$body[] = "Passenger Side Shock/Strut: " . $rshock_strut_rs;
$body[] = "<br>";
$body[] = "Driver Side Coil Spring: " . $rcoilspring_ds;
$body[] = "<br>";
$body[] = "Passenger Side Coil Spring: " . $rcoilspring_ps;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "BRAKES";
$body[] = "<br>";
$body[] = "<br>";
$body[] = "Front Driver Side Rotor: " . $rotor_fds;
$body[] = "<br>";
$body[] = "Front Passenger Side Rotor: " . $rotor_fps;
$body[] = "<br>";
$body[] = "Rear Driver Side Drum/Rotor: " . $drum_rotor_rds;
$body[] = "<br>";
$body[] = "Rear Passenger Side Drum/Rotor: " . $drum_rotor_rps;
$body[] = "<br>";
$body[] = "Front Driver Side Brake Pads: " . $pads_fds;
$body[] = "<br>";
$body[] = "Front Passenger Side Brake Pads: " . $pads_fps; 
$body[] = "<br>";
$body[] = "Rear Driver Side Brake Pads/Shoes: " . $pads_shoes_rds;
$body[] = "<br>";
$body[] = "Rear Passenger Side Brake Pads/Shoes : " . $pads_shoes_rps;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "TIRES AND WHEELS";
$body[] = "<br>";
$body[] = "<br>";
$body[] = "Front Driver Side Wheel: " . $wheel_fds;
$body[] = "<br>";
$body[] = "Front Passenger Side Wheel: " . $wheel_fps;
$body[] = "<br>";
$body[] = "Rear Driver Side Wheel: " . $wheel_rds;
$body[] = "<br>";
$body[] = "Rear Passenger Side Wheel: " . $wheel_rps;
$body[] = "<br>";
$body[] = "Front Driver Side Tire: " . $tire_fds;
$body[] = "<br>";
$body[] = "Front Passenger Side Tire: " . $tire_fps;
$body[] = "<br>";
$body[] = "Rear Driver Side Tire: " . $tire_rds;
$body[] = "<br>";
$body[] = "Rear Passenger Side Tire: " . $tire_rps;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "Engine Error Codes: " . $eec;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "Notes: " . $notes;
$body[] = "<br>";
$body[] = "<br>";
$body[] = "<br>";
$body[] = "<br>";

$message = "";

foreach($body as $text){
    $message = $message . $text;
}

echo $message;

$emailsubject = "$oname $carinfo $date Report";

echo "To email this report to your friend, please click <a href=\"mailto:$oemail?subject=$emailsubject&amp;body=$message\">here</a>.";
echo "<br>";
echo "<br>";
?>


</body>
</html>