const setData = (selector, data) => {
	// utility function to set event data
	if (document.querySelector(selector))
		document.querySelector(selector).innerHTML = data;
};

const loadListEvents = () => {
	const eventData = document.querySelectorAll(".div_topnav:nth-of-type(2) a");
	eventData.forEach((x) => console.log(x.innerHTML, x.href));

	const cluster = document.querySelector(".cluster-list");

	let clusterString = "";

	eventData.forEach((x) => {
		clusterString += `<div class="ind-cluster"><a href=${
			x.href
		}>${x.children[0].innerText.trim().toUpperCase()}</a></div>`;
	});

	clusterString += "<div></div>";

	cluster.innerHTML = clusterString;
};

const loadContent = () => {
	const clusterNameElement = document.querySelector("#injection #list-name");
	const clusterDataElement = document.querySelector("#injection #list-data");
	const eventName = clusterNameElement.innerHTML
		? clusterNameElement.innerHTML
		: "events";

	setData(".event-title", eventName);

	// if cluster data exists, we display it
	// or display all the children
	if (clusterDataElement) {
		setData(".cluster-data", clusterDataElement.innerHTML);
		document.querySelector(".cluster-list").style.display = "none";
	} else {
		loadListEvents();
	}
};

document.addEventListener("DOMContentLoaded", loadContent);
