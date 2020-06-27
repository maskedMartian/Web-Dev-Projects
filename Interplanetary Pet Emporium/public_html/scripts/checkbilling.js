function validate(billForm)
{
	var month = parseInt(billForm.cardMonth.options[billForm.cardMonth.selectedIndex].value); 
	var year = parseInt(billForm.cardYear.options[billForm.cardYear.selectedIndex].value);
	var expire = new Date(year, month, 1, 0, 0, 0);
	var today = new Date();	
	var errMsg = "";
	
	if (billForm.fName.value == "")
		errMsg += "\nFirst name field is blank";
	if (billForm.lName.value == "")
		errMsg += "\nLast name field is blank";
		
	if (billForm.sAddr1.value == "")
		errMsg += "\nShipping address field is blank";
	if (billForm.sCity.value == "")
		errMsg += "\nShipping city field is blank";
	if (billForm.sState.value == "")
		errMsg += "\nShipping state field is blank";
	if (billForm.sZip.value == "")
		errMsg += "\nShipping zip code field is blank";
	else if (isNaN(billForm.sZip.value))
		errMsg += "\nShipping zip code must be numeric";
	if (billForm.sCountry.value == "")
		errMsg += "\nShipping country field is blank";
		
	if (billForm.bAddr1.value == "")
		errMsg += "\nBilling address field is blank";
	if (billForm.bCity.value == "")
		errMsg += "\nBilling city field is blank";
	if (billForm.bState.value == "")
		errMsg += "\nBilling state field is blank";
	if (billForm.bZip.value == "")
		errMsg += "\nBilling zip code field is blank";
	else if (isNaN(billForm.bZip.value))
		errMsg += "\nBilling zip code must be numeric";
	if (billForm.bCountry.value == "")
		errMsg += "\nBilling country field is blank";
		
	if (billForm.cardName.value == "")
		errMsg += "\nCredit card name field is blank";
	if (billForm.cardNum.value == "")
		errMsg += "\nCredit card number field is blank";
	else if (isNaN(billForm.cardNum.value))
		errMsg += "\nCredit card number must be numeric";
	 else if (billForm.cardNum.value.length != 16)
		errMsg += "\nCredit card number must be 16 digits";
	if (billForm.ccvNum.value == "")
		errMsg += "\nCCV field is blank";
	else if (isNaN(billForm.ccvNum.value))
		errMsg += "\nCredit card CCV must be numeric";
	else if (billForm.ccvNum.value.length != 3)
		errMsg += "\nCredit card CCV must be 3 digits";
		
	if (today >= expire)
		errMsg += "\n\nCredit card is expired";
	
	if(errMsg.length > 0)
	{
		alert("The form is incomplete or there are errors:\n" + errMsg + "\n\nPlease try again.");
		return false;
	}
	else 
		return true;
}