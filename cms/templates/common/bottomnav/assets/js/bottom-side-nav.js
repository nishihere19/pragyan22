const events = ["EWITTS", "PHRONESIS", "PANDORA'S BOX", "ROBOREX", "CONCEPTION", "BYTEHOC", "CONCREATE", "MANIGMA"]

const current = "MANIGMA"
const sidenav = document.querySelector(".sidenav");
let open = false;

const change = () => {
  const blur = document.querySelector("#blur");
  const content = document.querySelector("#content");
  if(open) {
    document.querySelector("#dropup-button").classList.remove("checked");
    document.querySelectorAll(".sidenav a").forEach(x => {
      x.style.display = "none";
      sidenav.style.position = "";
    })
    sidenav.classList.remove("sidenav-open")
    sidenav.style["z-index"] = 0;
    blur.classList.remove("overlay");
    content.style.display = "none";
  } else {
    content.style.display = "flex";
    sidenav.classList.add("sidenav-open")
    sidenav.style["z-index"] = 1;
    sidenav.style.position = "fixed";
    sidenav.style.bottom = 0;
    sidenav.style.left = 0;
    document.querySelectorAll(".sidenav a").forEach(x => {
      x.style.display = "block";
    })
    document.querySelector("#dropup-button").classList.add("checked");
    blur.classList.add("overlay");
  }
  open = !open;
}

sidenav.innerHTML = `<div id="content">${(events.map(x => {
  if(x !== current)
    return `<a href='#' class='options'>${x}</a>`;
  else
    return "";
})).join("\n")}</div>`;

sidenav.innerHTML += `<div id="hello" onclick="change()"><span id="cur">${current}</span> <img id="dropup-button" style="margin-left: 10px" src="../images/right.png"></div>`
