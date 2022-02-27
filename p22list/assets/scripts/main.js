const eventData = document.querySelectorAll(".div_topnav:nth-of-type(2) a");
eventData.forEach(x => console.log(x.innerHTML, x.href));

const cluster = document.querySelector(".cluster-list");

let clusterString = "";

eventData.forEach(x => {
  clusterString += `<div class="ind-cluster"><a href=${x.href}>${x.children[0].innerText.trim().toUpperCase()}</a></div>`
})

clusterString += "<div></div>"

cluster.innerHTML = clusterString;
