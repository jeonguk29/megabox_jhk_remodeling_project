let images = [
  "https://img.megabox.co.kr/SharedImg/event/2022/12/16/GMSJZ0SLrWcoboJqg8HuZMgoVEcBerqT.jpg",
  "https://img.megabox.co.kr/SharedImg/event/2022/05/31/IImG2HpprzSLLFbXwDuGt1Knb4B2Ljc7.jpg",
  "https://img.megabox.co.kr/SharedImg/event/2022/12/20/ZLpapKTdIjVkha24KyF1c7GSFKXOmGEF.jpg",
  "https://img.megabox.co.kr/SharedImg/event/2022/10/24/T5YqXqWTssWD85CKz2eINznOG2gD1jqh.jpg",
  "https://img.megabox.co.kr/SharedImg/event/2022/12/05/5ciyDvsEhc7HC4S1aZBIj5hGZ1HxyEa1.jpg",
];

function imageSlider(parent, images) {
  let currentImage = 0;
  let slider = {
    parent: parent,
    images: parent.querySelector(".images"),
    thumbnails: parent.querySelector(".thumbnails"),
    backBtn: parent.querySelector(".back-btn"),
    nextBtn: parent.querySelector(".next-btn"),
  };

  slider.images.innerHTML = images
    .map(function (image) {
      return `<img src="${image}"/>`;
    })
    .join("");

  let imageNodes = slider.images.querySelectorAll("img");
  imageNodes[currentImage].classList.add("active");

  slider.thumbnails.innerHTML = slider.images.innerHTML;

  let thumbnailNodes = slider.thumbnails.querySelectorAll("img");
  thumbnailNodes[currentImage].classList.add("active");
  for (let i = 0; i < thumbnailNodes.length; i++) {
    thumbnailNodes[i].addEventListener("click", function () {
      slider.thumbnails.querySelector("img.active").classList.remove("active");
      thumbnailNodes[i].classList.add("active");
      imageNodes[currentImage].classList.remove("active");
      currentImage = i;
      imageNodes[currentImage].classList.add("active");
    });
  }

  slider.backBtn.addEventListener("click", function () {
    imageNodes[currentImage].classList.remove("active");
    currentImage--;
    if (currentImage < 0) {
      currentImage = images.length - 1;
    }
    imageNodes[currentImage].classList.add("active");
    slider.thumbnails.querySelector("img.active").classList.remove("active");
    thumbnailNodes[currentImage].classList.add("active");
  });

  slider.nextBtn.addEventListener("click", function () {
    imageNodes[currentImage].classList.remove("active");
    currentImage = (currentImage + 1) % images.length;
    imageNodes[currentImage].classList.add("active");
    slider.thumbnails.querySelector("img.active").classList.remove("active");
    thumbnailNodes[currentImage].classList.add("active");
  });
}

imageSlider(document.querySelector(".image-slider"), images);
