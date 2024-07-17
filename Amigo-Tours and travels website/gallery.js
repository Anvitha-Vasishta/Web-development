const image = document.querySelectorAll(".image img");
const modal = document.querySelector(".modal");
const closeButton = document.querySelector(".close");
const content = document.querySelector(".content");



image.forEach((item) => {
  item.addEventListener("click", function () {
    modal.style.display = "flex";
    content.style.display = "flex";

    let image = this.getAttribute("src");
    renderImage(image);
  });
});

closeButton.addEventListener("click", function () {
  modal.style.display = "none";
  content.style.display = "none";
  content.innerHTML = "";
});

modal.addEventListener("click", function () {
  modal.style.display = "none";
  content.style.display = "none";
  content.innerHTML = "";
});

const renderImage = (image) => {
  let postImage = document.createElement("img");
  postImage.setAttribute("src", image);
  postImage.setAttribute("class", "img-responsive");
  content.appendChild(postImage);
};
