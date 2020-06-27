//Estimate delivery dates script

var oneDay = 86400000;
var today = new Date();
var day2 = new Date(today.getTime() + oneDay * 2);
var day3 = new Date(today.getTime() + oneDay * 3);
var week2 = new Date(today.getTime() + oneDay * 14);
var week3 = new Date(today.getTime() + oneDay * 21);
var month2 = new Date(today.getTime() + oneDay * 60);
var month3 = new Date(today.getTime() + oneDay * 90);
var months = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];

//Display
document.getElementById("superDate").innerHTML = " --Your new pet will arrive between " + months[day2.getMonth()] 
		+ " " + day2.getDate() + " and " + months[day3.getMonth()] + " " + day3.getDate();
document.getElementById("expressDate").innerHTML = " --Your new pet will arrive between " + months[week2.getMonth()] 
		+ " " + week2.getDate() + " and " + months[week3.getMonth()] + " " + week3.getDate();
document.getElementById("standardDate").innerHTML = " --Your new pet will arrive between " + months[month2.getMonth()] 
		+ " " + month2.getDate() + " and " + months[month3.getMonth()] + " " + month3.getDate();
document.getElementById("freeDate").innerHTML = " --It will get there when it gets there";