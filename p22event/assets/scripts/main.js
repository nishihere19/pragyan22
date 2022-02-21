let eventData = {}
let currentHeader = ""
const heading_regex = /^[a-zA-Z0-9/s]+:$/

for(const node of document.querySelectorAll("#injection p")) {
  const val = node.innerHTML.trim();
  if(val.match(heading_regex)) {
    const heading = val.slice(0, -1);
    eventData[heading] = [];
    if(currentHeader != "")
      eventData[currentHeader] = eventData[currentHeader].join("\n");
    currentHeader = heading;
  } else {
    if(currentHeader != "") {
      eventData[currentHeader].push(val)
    }
  }
}

eventData[currentHeader] = eventData[currentHeader].join("\n");

document.querySelector("body").innerHTML += `<div id='current' style="display:none">${eventData.cluster}</div>`


const headings = document.querySelectorAll(".details-body-item-head");

headings.forEach((heading) => {
  heading.addEventListener("click", (e) => {
    let body = e.target.nextElementSibling;
    let icon = e.target;
    if (icon.classList.contains("material-icons")) icon = e.target;
    else icon = e.target.firstChild.nextElementSibling;
    if (!body) body = e.target.parentElement.nextElementSibling;
    if (body.classList.contains("hidden")) {
      body.classList.remove("hidden");
      icon.innerHTML = "keyboard_arrow_down";
    } else {
      body.classList.add("hidden");
      icon.innerHTML = "keyboard_arrow_right";
    }
  });
});

const loadEventData = () => {
  let name = eventData.startName + " " + eventData.endName;
  document.querySelector(
    ".details-wrapper"
  ).style.background = `url(assets/images/events/${name}.jpeg)`;
  for (let key in eventData) {
    const event = document.getElementById(`${key}-content`);
    if(event)
      event.innerHTML = eventData[key];
  }
};

const setBackground = () => {
  const path = document.querySelector("#path").innerHTML.trim();
  console.log(path);
  document.querySelector(".details-wrapper").style.background = `url(${path}/assets/images/${eventData.image})`;
  console.log("set");
}

loadEventData();
setBackground();
