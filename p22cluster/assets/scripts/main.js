document.addEventListener("DOMContentLoaded", () => {
	let headerItems = document.querySelectorAll(".div_topnav:nth-of-type(2) a");
	let eventsInThisCluster = [];
	if(headerItems.length == 0){
		window.location.href = "https://pragyan.org/22/home/events";
	} else {
		window.location.href = headerItems[0].href;
	}
});
