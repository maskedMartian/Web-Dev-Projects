//Same billing address as shipping address check box script

var sameAddrBox = document.getElementById("sameAddress");
var sAddr1 = document.getElementById("shipAddr1");
var sAddr2 = document.getElementById("shipAddr2");
var sCity = document.getElementById("shipCity");
var sState = document.getElementById("shipState");
var sZip = document.getElementById("shipZip");
var sCountry = document.getElementById("shipCountry");
var bAddr1 = document.getElementById("billAddr1");
var bAddr2 = document.getElementById("billAddr2");
var bCity = document.getElementById("billCity");
var bState = document.getElementById("billState");
var bZip = document.getElementById("billZip");
var bCountry = document.getElementById("billCountry");

//Fills in billing address text boxes
sameAddrBox.addEventListener("click", function() 
{
	if (sameAddrBox.checked) 
	{
		billAddr1.value = shipAddr1.value;
		billAddr1.disable = true;
		billAddr2.value = shipAddr2.value;
		billAddr2.disable = true;
		billCity.value = shipCity.value;
		billCity.disable = true;
		billState.value = shipState.value;
		billState.disable = true;
		billZip.value = shipZip.value;
		billZip.disable = true;
		billCountry.value = shipCountry.value;
		billCountry.disable = true;
	}
});
