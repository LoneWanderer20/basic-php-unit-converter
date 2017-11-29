// JavaScript Document

var fromUnit;
var unitObj;
var sourceURL;
var toUnit;

var fetchUnitAjax = function() {
	"use strict";
	
	var fromSelect = document.getElementById("fromSelect");
	resetInputOutput();
	toUnit = "newUnit1";
	
	fromUnit = fromSelect.options[fromSelect.selectedIndex].value;
	sourceURL = 'unit_converter.php?q=' + fromUnit + toUnit;
	
	var request = new XMLHttpRequest();
	request.onreadystatechange = function() {
		if(request.status !== 200) {
			return;
		}
		if(request.readyState === 4) {
			var parsedData = JSON.parse(request.responseText);
			unitObj = parsedData.unitArray;
			createSelectOptions();
		}
	};
	request.open('GET', sourceURL, this);
	request.send('');
};
window.onload = fetchUnitAjax;
document.getElementById("fromSelect").onchange = fetchUnitAjax;

var createSelectOptions = function() {
	"use strict";
	var toSelect = document.getElementById("toSelect");
	clearToSelect();
	
	for(var i = 0; i < unitObj.length; i++) {
	    var newOption = document.createElement('option');
	    newOption.innerHTML = unitObj[i];
	    toSelect.appendChild(newOption);
    }
};

var clearToSelect = function() {
	"use strict";
	var toSelect = document.getElementById("toSelect");
	
	for(var j = toSelect.options.length - 1; j >= 0; j--) {
		toSelect.remove(j);
	}
};

/***********************************************/

var getToSelectChildNumber = function() {
	"use strict";
	var toSelect = document.getElementById("toSelect");
	resetInputOutput();
	
	var newNum = toSelect.options[toSelect.selectedIndex].index + 1;
	toUnit = "newUnit" + newNum;	
};
document.getElementById("toSelect").onchange = getToSelectChildNumber;


var unitInput = document.getElementById("unitInput");
var unitOutput = document.getElementById("unitOutput");
var unitString = "";

var convertUnitsAjax = function() {
    "use strict";
		
	sourceURL = 'unit_converter.php?q=' + fromUnit + toUnit + unitString;
	
	if(unitString.length === 0) {
	    unitOutput.innerHTML = "";
		return;
	} else {
		var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if(request.readyState === 4 && request.status === 200) {
			    var unitOutputValue = JSON.parse(request.responseText);
				unitOutput.value = unitOutputValue.output;
			}
		};
		request.open('GET', sourceURL, true);
		request.send();
	}
};
	
var onUnitType = function() {
	"use strict";
	unitString = unitInput.value;
		
	if(unitInput.value === "") {
		unitOutput.value = "";
	}
};
	
var inputOnChangeFunc = function() {
	"use strict";
	onUnitType();
	convertUnitsAjax();
};
unitInput.onkeyup = inputOnChangeFunc;

var resetInputOutput = function() {
	"use strict";
	unitInput.value = "";
	unitOutput.value = "";
	unitString = "";
};



		