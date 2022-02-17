// get all with class of material-icons
let headings = document.querySelectorAll(".details-body-item-head");

// addEventListener to all icons
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

// We can get this json from the a hidden div which will be getting the content from cms
const eventData = {
  cluster: "Manigma's",
  startName: "Dalal",
  endName: "Street",
  description: `Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis sed autem id asperiores voluptatem, enim cumque at libero odio iste molestias, quae quis pariatur perferendis suscipit aliquid illo facere reiciendis?`,
  format: `Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim laudantium ex, est, saepe placeat soluta magnam nesciunt similique eveniet explicabo tenetur repudiandae animi illum ab? Fuga recusandae in nobis ipsa deleniti aliquam iste! Quae, voluptatem? Reiciendis vel doloribus id qui.`,
  rules: `Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem asperiores aliquid tempora cumque quaerat. Harum qui, fugiat perspiciatis soluta quos architecto aperiam at debitis esse aspernatur necessitatibus quod quaerat cupiditate aliquid blanditiis maxime error! Sunt inventore dolor ut repudiandae perspiciatis!`,
  resources: `Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores fugit aliquam laborum nemo modi quae, veritatis error numquam earum nihil commodi, saepe qui natus harum esse dolorum cupiditate veniam consequuntur quam rerum voluptatibus ab corrupti? Dolore obcaecati sed corrupti ipsum.`,
};

const loadEventData = () => {
  let name = eventData.startName + " " + eventData.endName;
  document.querySelector(
    ".details-wrapper"
  ).style.background = `url(assets/images/events/${name}.jpeg)`;
  for (let key in eventData) {
    let body = document.getElementById(`${key}-content`);
    body.innerHTML = eventData[key];
  }
};

document.addEventListener("DOMContentLoaded", () => {
  loadEventData();
});
