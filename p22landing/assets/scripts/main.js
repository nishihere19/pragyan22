const world = Globe()(document.getElementById("globe"))
  .backgroundColor("rgba(0,0,0,0)")
  .showGlobe(false)
  .showGraticules(true)
  .showAtmosphere(true)
  .atmosphereColor("#000000")
  .atmosphereAltitude("0.5");	

if (window.innerHeight > window.innerWidth) {
  world.width(window.innerWidth);
} else {
  world.height(window.innerHeight);
}

fetch("//unpkg.com/world-atlas/land-110m.json")
  .then((res) => res.json())
  .then((landTopo) => {
    world
      .polygonsData(topojson.feature(landTopo, landTopo.objects.land).features)
      .polygonCapMaterial(
        // make a blueish transperent material
        new THREE.MeshPhongMaterial({
          color: "#1B3C59",
          transparent: true,
          opacity: 0.4,
          side: THREE.DoubleSide,
        })
      )
      .polygonSideColor(() => "rgba(0,0,0,0)")
      .polygonStrokeColor(() => "#397DC9")
      .onPolygonHover((polygon) => {});
  });

let socialLinks = {
  facebook: "https://www.facebook.com/",
  twitter: "https://twitter.com/",
  instagram: "https://www.instagram.com/",
  youtube: "https://www.youtube.com/",
  medium: "https://medium.com/",
  linkedin: "https://www.linkedin.com/",
};

let isSocialOpen = 1;
let isMenuOpen = 0;
const animationDuration = 0.5;
let fabIcon = document.querySelector(".fab-icon");
let menuIcon = document.querySelector(".landing-right-menu-icon");
const handleSocialToggle = () => {
  let nav = document.querySelector(".fab-nav");
  let iconsWrapper = document.querySelector(".fab-nav-icons-wrapper");
  if (isSocialOpen == -1) return;
  if (isSocialOpen) {
    isSocialOpen = -1;
    let templateBrowserPath = document.getElementById("template-browser-path").innerHTML.trim();
    fabIcon.innerHTML = `<img src="${templateBrowserPath}/assets/images/fab-logo.png" id="fab-img-icon" alt="fab-icon">`;
    nav.style.width = 0;
    nav.style.paddingRight = 0;
    iconsWrapper.style.display = "none";
    setTimeout(() => {
      isSocialOpen = 0;
    }, animationDuration * 1000);
  } else {
    isSocialOpen = -1;
    nav.style.width = "80%";
    fabIcon.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
    nav.style.paddingRight = "2em";
    setTimeout(() => {
      iconsWrapper.style.display = "flex";
      isSocialOpen = 1;
    }, animationDuration * 1000);
  }
};

const handleMenuToggle = () => {
  let menuList = document.querySelector(".landing-right-menu-list");
  if (isMenuOpen == -1) return;
  let xIcon = menuIcon.querySelector("i");
  if (isMenuOpen) {
    isMenuOpen = -1;
    menuIcon.style.backgroundColor = "transparent";
    xIcon.style.transform = "none";
    menuList.style.height = 0;
    menuList.style.padding = 0;
    setTimeout(() => {
      isMenuOpen = 0;
    }, animationDuration * 1000);
  } else {
    isMenuOpen = -1;
    menuIcon.style.backgroundColor = "#959695";
    xIcon.style.transform = "rotate(-45deg)";
    menuList.style.height = "20vh";
    menuList.style.padding = "1.5em";
    setTimeout(() => {
      isMenuOpen = 1;
    }, animationDuration * 1000);
  }
};

document.addEventListener("DOMContentLoaded", () => {
  let icons = document.querySelectorAll(".fab-nav-icon");
  icons.forEach((icon) => {
    icon.addEventListener("click", () => {
      let iconName = icon.getAttribute("data-icon");
      window.open(socialLinks[iconName], "_blank");
    });
  });
  fabIcon.addEventListener("click", handleSocialToggle);
  menuIcon.addEventListener("click", handleMenuToggle);
});