//navigation js

const bars = document.querySelector(".navigation-group .fa-bars");
const nav = document.querySelector(".nav-list .menu");

bars.addEventListener("click", () => {
  nav.classList.toggle("toggle");
  bars.classList.toggle("disappear");
});

//buttons js
const show = document.querySelector(".hide");
const show2 = document.querySelector(".hide2");
const showBtn = document.querySelector(".moreBtn");
const dotsHide = document.querySelector(".dots");
const navbar = document.querySelector(" .navigation-group");

//navbar js
window.addEventListener("scroll", () => {
  navbar.classList.toggle("change", scrollY > 0);
});
//all navigation js
const navs = document.querySelectorAll(".menu-item .list-item");

navs.forEach((item) => {
  item.addEventListener("click", () => {
    nav.classList.toggle("toggle");
  });
});
//inner-text function

function changeText() {
  show.classList.toggle("show");
  show2.classList.toggle("show2");

  dotsHide.classList.toggle("out");
}
showBtn.addEventListener("click", (e) => {
  changeText();
  e.target.classList.toggle("add");
  e.target.innerText = e.target.classList.contains("add")
    ? "Show Less"
    : "Read On";
});

//footer
const skillBtn = document.querySelector(".skillBtn");
const skillShow = document.querySelector(".skillhide");

skillBtn.addEventListener("click", () => {
  skillShow.classList.toggle("skillshow");
  if (skillBtn.innerText == "SEE MORE") {
    skillBtn.innerText = "SEE LESS";
  }
});

const shrink = document.querySelector(".shrink");
const shrink1 = document.querySelector(".shrink1");
const shrink2 = document.querySelector(".shrink2");
const show1 = document.querySelector(".shrinkBtn");

show1.addEventListener("click", () => {
  shrink.classList.toggle("show");
});
show1.addEventListener("click", () => {
  shrink1.classList.toggle("show");
});
show1.addEventListener("click", () => {
  shrink2.classList.toggle("show");
});

//filter
var items = [
  { category: "portfolio", url: "./pics/web.jpg" },
  { category: "e-commerce", url: "./pics/techimg.jpeg" },
  { category: "portfolio", url: "./pics/tech2.jpeg" },
  { category: "e-commerce", url: "./pics/hosting.jpeg" },

  { category: "portfolio", url: "./pics/dataimg.jpg" },

  { category: "e-commerce", url: "./pics/design.jpeg" },

  { category: "e-commerce", url: "./pics/hostlaptop.jpg" },
];
var filtered = items;
window.addEventListener("DOMContentLoaded", () => (filtered = items));
let btn = ["all", ...new Set(items.map((item) => item.category))];

let filter = document.querySelector(".filter");
btn.forEach((item) => {
  filter.innerHTML += ` <button class="button" >${item}</button>
`;
});
const buttons = document.querySelectorAll(".button");
buttons.forEach((button) =>
  button.addEventListener("click", (e) => {
    let v = e.currentTarget.innerText.toLowerCase();
    filtered = filterItems(v, items);
  })
);
console.log(filtered);
const filterItems = (c, items) => {
  let i;
  if (c == "all") i = [...items];
  i = items.filter((item) => item.category == c);
  filtered = i;
  console.log(filtered);
};
document.querySelector(".portfolio--container").innerHTML = filtered.map(
  (item) => {
    return `<div class="portfolio-item">
<img src=${item.url} class="img" alt="">
</div>
`;
  }
);
