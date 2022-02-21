const events = [
	"EWITTS",
	"PHRONESIS",
	"PANDORA'S BOX",
	"ROBOREX",
	"CONCEPTION",
	"BYTEHOC",
	"CONCREATE",
	"MANIGMA",
];

const current = document.getElementById("current").innerHTML.toUpperCase();
const sidenav = document.querySelector(".sidenav");
const content = document.querySelector("#content");

content.innerHTML += events
	.map((x) => {
		if (x !== current) return `<a href='#' class='options'>${x}</a>`;
		else return "";
	})
	.join("\n");

sidenav.innerHTML = `<div id="hello" onclick="change()"><span id="cur">${current}</span> <img id="dropup-button" style="margin-left: 10px" src="${sidenav.dataset.img}"></div>`;

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
		total.classList.add("sidenav-open");

		setTimeout(() => {
			content_a.forEach((x) => {
				x.style.opacity = "1";
			});
		}, 10);
		menu.classList.add("sidenav-open");
	} else {
		content_a.forEach((x) => {
			x.style.opacity = "0";
		});
		content_a[0].addEventListener(
			"transitionend",
			() => {
				content.style.display = "none";
				total.classList.remove("sidenav-open");
				drop_btn.classList.remove("checked");
			},
			{
				capture: false,
				once: true,
				passive: false,
			}
		);
		// menu.classList.remove("sidenav-open");
	}
	open = !open;
};
