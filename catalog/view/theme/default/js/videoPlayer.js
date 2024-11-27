const video1 = document.getElementById("fridge-video1");
const video2 = document.getElementById("fridge-video2");
const video3 = document.getElementById("fridge-video3");
let stoppedAtCenter1 = false;
let stoppedAtCenter2 = false;
let stoppedAtCenter3 = false;
let userInteracted = false;
let mouseOverVideo = false;

video1.muted = true;
video2.muted = true;
video3.muted = true;

document.addEventListener("mouseover", () => {
  userInteracted = true;
});

video1.addEventListener("mouseover", () => {
  mouseOverVideo = true;
  if (stoppedAtCenter1) {
    stoppedAtCenter1 = false;
  }
  video1.play();
  video1.currentTime = 0;
});

video1.addEventListener("mouseout", () => {
  mouseOverVideo = false;
  if (stoppedAtCenter1) {
    video1.play();
  }
});

video1.addEventListener("timeupdate", () => {
  if (video1.currentTime >= video1.duration / 2 && !stoppedAtCenter1) {
    stoppedAtCenter1 = true;
    if (mouseOverVideo) {
      video1.pause();
    }
  }
});

video1.addEventListener("ended", () => {
  stoppedAtCenter1 = false;
});

video2.addEventListener("mouseover", () => {
  mouseOverVideo = true;
  if (stoppedAtCenter2) {
    stoppedAtCenter2 = false;
  }
  video2.play();
  video2.currentTime = 0;
});

video2.addEventListener("mouseout", () => {
  mouseOverVideo = false;
  if (stoppedAtCenter2) {
    video2.play();
  }
});

video2.addEventListener("timeupdate", () => {
  if (video2.currentTime >= video2.duration / 2 && !stoppedAtCenter2) {
    stoppedAtCenter2 = true;
    if (mouseOverVideo) {
      video2.pause();
    }
  }
});

video2.addEventListener("ended", () => {
  stoppedAtCenter2 = false;
});

video3.addEventListener("mouseover", () => {
  mouseOverVideo = true;
  if (stoppedAtCenter3) {
    stoppedAtCenter3 = false;
  }
  video3.play();
  video3.currentTime = 0;
});

video3.addEventListener("mouseout", () => {
  mouseOverVideo = false;
  if (stoppedAtCenter3) {
    video3.play();
  }
});

video3.addEventListener("timeupdate", () => {
  if (video3.currentTime >= video3.duration / 2 && !stoppedAtCenter3) {
    stoppedAtCenter3 = true;
    if (mouseOverVideo) {
      video3.pause();
    }
  }
});

video3.addEventListener("ended", () => {
  stoppedAtCenter3 = false;
});