const eventMap = {
	concreate: {
		"plan it": "planIt.png",
		"town race": "townTrace.png",
	},
	bytehoc: {
		circuitx: "circuitrix.png",
		"no contact": "noContact.png",
	},
	conception: {
		"web wars": "webWars.png",
		"code character": "codeCharacter.png",
		"code venatic": "codeVenatic.png",
		ctf: "ctf.png",
	},
};

const clusters = [
	{
		name: "EWITTS",
		url_name: "",
	},
	{
		name: "PHRONESIS",
		url_name: "",
	},
	{
		name: "PANDORA'S BOX",
		url_name: "",
	},
	{
		name: "ROBOREX",
		url_name: "roborex",
	},
	{
		name: "CONCEPTION",
		url_name: "conception",
	},
	{
		name: "BYTEHOC",
		url_name: "bytehoc",
	},
	{
		name: "CONCREATE",
		url_name: "concreate",
	},
	{
		name: "MANIGMA",
		url_name: "manigma",
	},
];

const currentlyLive = ["BYTEHOC", "CONCREATE", "CONCEPTION", "MANIGMA", "ROBOREX"];

const clusterObjs = [];

clusters.forEach((cluster) => {
	if (currentlyLive.includes(cluster.name)) {
		clusterObjs.push(cluster);
	}
});

const current = document.getElementById("cluster-name").innerHTML.toUpperCase();
const bottomnav = document.querySelector(".bottomnav");
const content = document.querySelector("#content");

function removeSlash(site) {
	return site.replace(/\/$/, "");
}

content.innerHTML += clusterObjs
	.map((x) => {
		let clusterUrl = removeSlash(window.location.href).split("/");
		clusterUrl.splice(-2);
		if (x.name !== current)
			return `<a href='${
				clusterUrl.join("/") + "/" + x.url_name
			}' class='options'>${x.name}</a>`;
		else return "";
	})
	.join("\n");

bottomnav.innerHTML = `<div id="hello" onclick="change()"><span id="cur">${current}</span> <img id="dropup-button" style="margin-left: 10px" src="${bottomnav.dataset.img}"></div>`;

let open = false;

const change = () => {
	const content = document.querySelector("#content");
	const total = document.querySelector(".total");
	const drop_btn = document.querySelector("#dropup-button");
	const menu = document.querySelector(".menu-navigation-icons");
	const content_a = document.querySelectorAll("#content a");
	if (!open) {
		content.style.display = "flex";
		drop_btn.classList.add("checked");
		total.classList.add("bottomnav-open");

		setTimeout(() => {
			content_a.forEach((x) => {
				x.style.opacity = "1";
			});
		}, 10);
		menu.classList.add("bottomnav-open");
	} else {
		content_a.forEach((x) => {
			x.style.opacity = "0";
		});
		content_a[0].addEventListener(
			"transitionend",
			() => {
				content.style.display = "none";
				total.classList.remove("bottomnav-open");
				drop_btn.classList.remove("checked");
			},
			{
				capture: false,
				once: true,
				passive: false,
			}
		);
		// menu.classList.remove("bottomnav-open");
	}
	open = !open;
};
