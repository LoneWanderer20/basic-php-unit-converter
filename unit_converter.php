 <?php

$lengthArray = array();
$lengthArray[] = "Metres (m)";
$lengthArray[] = "Kilometres (km)";
$lengthArray[] = "Centimetres (cm)";
$lengthArray[] = "Miles (mi)";
$lengthArray[] = "Yards (yd)";
$lengthArray[] = "Feet (ft)";
$lengthArray[] = "Inches (in)";

$volumeArray = array();
$volumeArray[] = "Litres (l)";
$volumeArray[] = "Millilitres (ml)";
$volumeArray[] = "Gallons (gal)";
$volumeArray[] = "Quarts (qt)";
$volumeArray[] = "Pints (pt)";

$weightArray = array();
$weightArray[] = "Kilograms (Kg)";
$weightArray[] = "Grams (g)";
$weightArray[] = "Stones (st)";
$weightArray[] = "Pounds (lbs)";
$weightArray[] = "Ounces (oz)";

$temperatureArray = array();
$temperatureArray[] = "Kelvin (K)";
$temperatureArray[] = "Celsius (C)";
$temperatureArray[] = "Fahrenheit (F)";

$pressureArray = array();
$pressureArray[] = "Pascals (Pa)";
$pressureArray[] = "Kilopascals (kPa)";
$pressureArray[] = "Bar (bar)";
$pressureArray[] = "Psi (psi)";
$pressureArray[] = "Atmospheres (atm)";

$energyArray = array();
$energyArray[] = "Joules (J)";
$energyArray[] = "Kilojoules (KJ)";
$energyArray[] = "Kilowatt-hour (kW*h)";
$energyArray[] = "Watt-hour (W*h)";
$energyArray[] = "Calories (cal)";


   
$q = $_REQUEST["q"];

$unitArray;

$output = "default";

$subStringQ;
	
$numSubString;
	
$toUnit;
	
$unitString;

function createUnitArray($array, $num) {
	$index = $num - 1;
	unset($array[$index]);
	return array_values($array);
}
	
if($q !== "") {
	
	$subStringQ = substr($q, 0, 6);
	
	$numSubString = substr($q, 6, 1);
	
	$toUnit = substr($q, 7, 8);
	
	$unitString = substr($q, 15, (strlen($q) - 15));
		
	if($subStringQ === "lValue") {
		switch($numSubString) {
			case 1:
				$unitArray = createUnitArray($lengthArray, 1);
			   
	                switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.001;;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 100;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.0006215;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 1.09361;
		        	        break;
	                    case "newUnit5":
		    	            $output = $unitString * 3.28;
		                    break;
		                case "newUnit6":
		                    $output = $unitString * 39.37;
			                break;
	                }
	            
				break;
			case 2:
				$unitArray = createUnitArray($lengthArray, 2);
				
	                switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 1000;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 100000;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.621371;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 1.09361;
		        	        break;
	                    case "newUnit5":
		    	            $output = $unitString * 3280.84;
		                    break;
		                case "newUnit6":
		                    $output = $unitString * 39370;
			                break;
	                }
  
				break;
			case 3:
				$unitArray = createUnitArray($lengthArray, 3);
				
	                switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.001;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 100000;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.0154;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.0109361;
		        	        break;
	                    case "newUnit5":
		    	            $output = $unitString * 0.0328084;
		                    break;
		                case "newUnit6":
		                    $output = $unitString * 0.393701;
			                break;
	                }
				          
				break;
			case 4:
				$unitArray = createUnitArray($lengthArray, 4);
				
	                switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 1609.34;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 1.60934;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 160934;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 1760;
		        	        break;
	                    case "newUnit5":
		    	            $output =  $unitString * 5280;
		                    break;
		                case "newUnit6":
		                    $output = $unitString * 63360;
			                break;
	                }
	           
				break;
			case 5:
				$unitArray = createUnitArray($lengthArray, 5);
				
	                switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.9144;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.0009144;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 91.44;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.0000568182;
		        	        break;
	                    case "newUnit5":
		    	            $output = $unitString * 3;
		                    break;
		                case "newUnit6":
		                    $output = $unitString * 36;
			                break;
	                }
	            
				break;
			case 6:
				$unitArray = createUnitArray($lengthArray, 6);
				
	                switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.3048;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.0003048;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 30.48;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.000189394;
		        	        break;
	                    case "newUnit5":
		    	            $output = $unitString * 0.3333;
		                    break;
		                case "newUnit6":
		                    $output = $unitString * 12;
			                break;
	                }
	          
				break;
			case 7:
				$unitArray = createUnitArray($lengthArray, 7);
				
	                switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.0254;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.0000254;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 2.54;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.0000157828;
		        	        break;
	                    case "newUnit5":
		    	            $output = $unitString * 0.0277778;
		                    break;
		                case "newUnit6":
		                    $output = $unitString * 0.083333;
			                break;
	                }
	
				break;
			}	
     }
     if($subStringQ === "vValue") {
		switch($numSubString) {
			case 1:
				$unitArray = createUnitArray($volumeArray, 1);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 1000;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.219969;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.879877;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 1.75975;
		        	        break;
	                }
				break;
			case 2:
				$unitArray = createUnitArray($volumeArray, 2);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.001;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.000219969;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.000879877;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.00175975;
		        	        break;
	                }
				break;
			case 3:
				$unitArray = createUnitArray($volumeArray, 3);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 4.54609;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 4546.09;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 4;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 8;
		        	        break;
	                }
				break;
			case 4:
				$unitArray = createUnitArray($volumeArray, 4);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 1.13652;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 1136.52;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.25;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 2;
		        	        break;
	                }
				break;
			case 5:
				$unitArray = createUnitArray($volumeArray, 5);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.568261;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 568.261;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.125;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.5;
		        	        break;
	                }
				break;
		}
	 }
	 if($subStringQ === "wValue") {
		switch($numSubString) {
			case 1:
				$unitArray = createUnitArray($weightArray, 1);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 1000;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.157473;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 2.20462;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 35.274;
		        	        break;
	                }
				break;
			case 2:
				$unitArray = createUnitArray($weightArray, 2);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.001;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.000157473;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.00220462;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.035274;
		        	        break;
	                }
				break;
			case 3:
				$unitArray = createUnitArray($weightArray, 3);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 6.35029;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 6350.29;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 14;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 224;
		        	        break;
	                }
				break;
			case 4:
				$unitArray = createUnitArray($weightArray, 4);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.453592;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 453.592;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.0714286;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 16;
		        	        break;
	                }
				break;
			case 5:
				$unitArray = createUnitArray($weightArray, 5);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.0283495;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 28.3495;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.00446429;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.0625;
		        	        break;
	                }
				break;
		}
	 }
	 if($subStringQ === "tValue") {
		switch($numSubString) {
			case 1:
				$unitArray = createUnitArray($temperatureArray, 1);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString - 273.15;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * (9/5) - 459.67;
		                    break;	               
	                }
				break;
			case 2:
				$unitArray = createUnitArray($temperatureArray, 2);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString + 273.15;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * (9/5) + 32;
		                    break;
	                }
				break;
			case 3:
				$unitArray = createUnitArray($temperatureArray, 3);
				   switch($toUnit) {
	    	            case "newUnit1":
		                    $output = ($unitString + 459.67) * (5/9);
		    	            break;
	                    case "newUnit2":
		                    $output = ($unitString - 32) * (5/9);
		                    break;
	                }
				break;
		}
	 }
	 if($subStringQ === "pValue") {
		switch($numSubString) {
			case 1:
				$unitArray = createUnitArray($pressureArray, 1);
				     switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.001;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.00001;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.000145038;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.00000986923267;
		        	        break;
	                }
				break;
			case 2:
				$unitArray = createUnitArray($pressureArray, 2);
				     switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 1000;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.01;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.145038;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.00986923;
		        	        break;
	                }
				break;
			case 3:
				$unitArray = createUnitArray($pressureArray, 3);
				     switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 100000;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 100;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 14.5038;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.986923;
		        	        break;
	                }
				break;
			case 4:
				$unitArray = createUnitArray($pressureArray, 4);
				     switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 6894.76;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 6.89476;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.0689476;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.068046;
		        	        break;
	                }
				break;
			case 5:
				$unitArray = createUnitArray($pressureArray, 5);
				     switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 101325;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 101.325;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 1.01325;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 14.6959;
		        	        break;
	                }
				break;
		}			
	 }
	 if($subStringQ === "eValue") {
		switch($numSubString) {
			case 1:
				$unitArray = createUnitArray($energyArray, 1);
					switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 0.001;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.00000027777;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.00027777;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.000239006;
		        	        break;
	                }
				break;
			case 2:
				$unitArray = createUnitArray($energyArray, 2);
					switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 1000;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 0.00027777;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.27777;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.239006;
		        	        break;
	                }
				break;
			case 3:
				$unitArray = createUnitArray($energyArray, 3);
					switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 3600000;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 3600;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 1000;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 860.421;
		        	        break;
	                }
				break;
			case 4:
				$unitArray = createUnitArray($energyArray, 4);
					switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 3600;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 3.6;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.001;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 0.860421;
		        	        break;
	                }
				break;
			case 5:
				$unitArray = createUnitArray($energyArray, 5);
					switch($toUnit) {
	    	            case "newUnit1":
		                    $output = $unitString * 4184;
		    	            break;
	                    case "newUnit2":
		                    $output = $unitString * 4.184;
		                    break;
	                    case "newUnit3":
		                    $output = $unitString * 0.00116222;
		                    break;
		                case "newUnit4":
		                    $output = $unitString * 1.16222;
		        	        break;
	                }
				break;
		}
	}	
}
 
$jsonArray = array();
$jsonArray['unitArray'] = $unitArray;	
$jsonArray['output'] = round($output, 3);


$unitJson = json_encode($jsonArray);

echo $unitJson;


?>