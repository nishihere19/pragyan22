// get all with class of material-icons
let headings = document.querySelectorAll(".details-body-item-head");
const change_events = [
	"Town Trace",
	"How Stuff Works",
	"Plan It",
	"Bounty Quest",
	"Marketing Hub",
	"The Ultimate Manager",
];

// addEventListener to all icons
headings.forEach((heading) => {
	heading.addEventListener("click", (e) => {
		let body = e.target.nextElementSibling;
		let icon = e.target;
		if (icon.classList.contains("material-icons")) icon = e.target;
		else icon = e.target.firstChild.nextElementSibling;
		if (!body) body = e.target.parentElement.nextElementSibling;
		if (body.classList.contains("hidden")) {
			body.dataset.height = body.scrollHeight;
			body.style.height = body.scrollHeight + "px";
			body.classList.remove("hidden");
			icon.innerHTML = "keyboard_arrow_down";
		} else {
			body.dataset.height = 0;
			body.style.height = "0px";
			body.classList.add("hidden");
			icon.innerHTML = "keyboard_arrow_right";
		}
	});
});

// We can get this json from the a hidden div which will be getting the content from cms
let eventData = {
	cluster: "Manigma's",
	startName: "Dalal",
	endName: "Street",
	description: `Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis sed autem id asperiores voluptatem, enim cumque at libero odio iste molestias, quae quis pariatur perferendis suscipit aliquid illo facere reiciendis?`,
	format: `Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim laudantium ex, est, saepe placeat soluta magnam nesciunt similique eveniet explicabo tenetur repudiandae animi illum ab? Fuga recusandae in nobis ipsa deleniti aliquam iste! Quae, voluptatem? Reiciendis vel doloribus id qui.`,
	rules: `Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem asperiores aliquid tempora cumque quaerat. Harum qui, fugiat perspiciatis soluta quos architecto aperiam at debitis esse aspernatur necessitatibus quod quaerat cupiditate aliquid blanditiis maxime error! Sunt inventore dolor ut repudiandae perspiciatis!`,
	resources: `Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores fugit aliquam laborum nemo modi quae, veritatis error numquam earum nihil commodi, saepe qui natus harum esse dolorum cupiditate veniam consequuntur quam rerum voluptatibus ab corrupti? Dolore obcaecati sed corrupti ipsum.`,
};

const loadEventData = () => {
	const cluster = document.getElementById("cluster-name")?.innerHTML || "";
	const startName = document.getElementById("event-name")?.innerHTML || "";
	const endName = document.getElementById("event-bold")?.innerHTML || "";
	const img = document.getElementById("event-img")?.innerHTML || "";
	const description = document.getElementById("event-descp")?.innerHTML || "";
	const rules = document.getElementById("event-rules")?.innerHTML || "";
	const format = document.getElementById("event-format")?.innerHTML || "";
	const resources = document.getElementById("event-resources")?.innerHTML || "";
	var registration = document.querySelector(".tabContent");

	if (registration != null) {
		registration = registration.innerHTML;
	} else {
		registration =
			'You must be logged in to fill this form. <a href="./+login">Click here</a> to login.';
	}

	eventData = {
		cluster,
		startName,
		endName,
		description,
		format,
		rules,
		resources,
		registration,
	};

	// setting margin to accomodate stuff
	// if (innerWidth > 768) {
	// 	if (endName === "" || startName === "") {
	// 		document.querySelector(".details-container").style.marginTop = "8%";
	// 	} else {
	// 		document.querySelector(".details-container").style.marginTop = "4%";
	// 	}
	// }

	let name = eventData.startName;
	if (eventData.endName !== "")
		name += (name === "" ? "" : " ") + eventData.endName;
	document.querySelector(
		".details-wrapper"
	).style.background = `url(assets/images/events/${name}.jpeg)`;
	console.log("name", name);
	if (change_events.includes(name)) {
		const r = document.querySelector(":root");
		r.style.setProperty("--text-color", "#000000");
		document.querySelector(".menu-icon").classList.add("black");
		const nav_logo = document.querySelector("#nav_logo_image");
		if (nav_logo) nav_logo.classList.add("black");
		document.querySelector(".details-wrapper").classList.add("black");
		document
			.querySelector(".menu-items.menu-navigation-icons")
			.classList.add("black");
	}
	for (let key in eventData) {
		let body = document.getElementById(`${key}-content`);
		body.innerHTML = eventData[key];
		const size = innerWidth > 768 ? "desktop" : "mobile";
		const x = `${
			location.origin + document.getElementById("asset-path").innerHTML.trim()
		}${size + "/background/" + img}`;
		document.body.style.background = `url("${x}")`;
	}
};

const makeBottomNav = () => {
	let name = eventData.startName.trim();
	if (eventData.endName !== "")
		name += (name === "" ? "" : " ") + eventData.endName.trim();
	let headerItems = document.querySelectorAll(".div_topnav:nth-of-type(1) a");
	let eventsInThisCluster = [];
	headerItems.forEach((element) => {
		let curEventName = element.children[0].innerText.trim().toLowerCase();
		let eventObj = {
			link: element.href,
			name: curEventName,
			isCurrent: name.toLowerCase() === curEventName,
		};
		if (eventObj.isCurrent) {
			eventsInThisCluster.unshift(eventObj);
		} else {
			eventsInThisCluster.push(eventObj);
		}
	});
	let bNav = document.querySelector(".menu-items.menu-navigation-icons");
	bNav.innerHTML = "";
	eventsInThisCluster.forEach((event) => {
		bNav.innerHTML += `
			<a href="${event.link}" class="${event.isCurrent ? "zoom" : ""}" ><span>${
			event.name
		}</span></a>
		`;
	});
	const imgTag = `${
		location.origin + document.getElementById("asset-path").innerHTML.trim()
	}${
		"desktop/thumbnail/" + document.getElementById("event-img")?.innerHTML ||
		"-"
	}`;
	document.querySelector(".zoom").style.background = `url("${imgTag}")`;
};

const setTopNavData = () => {
	if (document.getElementById("pragyan_logo"))
		document.getElementById("pragyan_logo").src =
			document.getElementById("asset-path").innerHTML.trim() +
			"/common/logo.png";
};

document.addEventListener("DOMContentLoaded", () => {
	loadEventData();
	makeBottomNav();
	setTopNavData();
});
