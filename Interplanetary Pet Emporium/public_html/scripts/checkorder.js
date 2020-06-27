
//validates whether qualities have been input and only numerical values used
function validate(orderForm)
{
	var validOrder = false;  //the order is assumed invalid until a quantity is entered
	var validInput = true;  //the quantities ordered are assumed valid unless n0n-numeric input is entered
	
	for (var c = 0; c < orderForm.length; c++)  //loops through all elements in the form
		if (orderForm.elements[c].type == "text")  //only checks text box elements of form
			if (orderForm.elements[c].value != "0" && orderForm.elements[c].value != "")  //checks for input
				if (isNaN(orderForm.elements[c].value))  //checks for numeric input
					validInput = false;
				else
					validOrder = true;
	if (!validInput)
		alert("Only numeric input is allowed.\nPlease try again.");
	else if (!validOrder)
		alert("You must choose at least one item.\nPlease try again.");
	return validOrder && validInput;
}



























/*
//check if text box is empty
function isZero(textBox)
{
	if 
		return true;
	else
		return false;
}

//check if input is numeric
function notNumeric(textBox)
{
	if(notZero(textBox.value))
		if (isNaN(textBox.value))
			return true;
		else
			return false;
}
	
//validate order form	
function validate(orderForm)
{
	var noOrder = true;
	//var badInput = false;
	//for (var c = 0; c < orderForm.length; c++) 
		/*if(orderForm.elements[c].type == "text")
			if (orderForm.elements[c].value != "0")
			{
				noOrder = false;
				alert(c);
			}
		//{
		//	noOrder = false;
			//if (notNumeric(orderForm.elements[c]))
				//badInput = true;
		//}
	}
	//if (badInput)
		//alert("Only numeric input is allowed.\nPlease try again.");
	//else
	if (noOrder)
		alert("You must choose at least one item.\nPlease try again.");
	return (false);
} 
*/