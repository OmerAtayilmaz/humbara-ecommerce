const play = document.querySelector(".item.play .play-icon");
const playInfo = document.querySelector(".item.play i.play");
const pause = document.querySelector(".item.play .changable");
const pauseInfo = document.querySelector(
  ".item.play .hover-effect-info-changable"
);
const video = document.querySelector("video");
const progress = document.querySelector(
  ".option__progress-bar .progress-bar .progress-bar-fill"
);
const volume = document.querySelector(".item.volume");
const volumeDisplay = document.querySelector(
  ".item.volume .hover-effect-info-volume"
);
const fullScreen = document.querySelector(".item.full-mode");
const defaultScreen = document.querySelector(".item.default-mode");
const screen = document.querySelector(".course-playing-slider");
const sidebarCloseBtn = document.querySelector(
  ".course-sidebar__header--close-btn"
);
const courseSidebar = document.querySelector("#course-sidebar");
const playbackRate = document.querySelector("#playback-rate-modal");
const playbackRateButton = document.querySelector(".item.speed button");
const progressBar = document.querySelector(
  ".option__progress-bar .progress-bar"
);
const currentTime = document.querySelector(".item.time #currentTime");
const totalTime = document.querySelector(".item.time #totalTime");
const rewindBtn = document.querySelector(".item.rewind i");
const forwardBtn = document.querySelector(".item.forward i");
const captionModal = document.querySelector(".item.sub-title #captions-modal");
const captionP = document.querySelector(".item.sub-title #captions-modal p");
const captionBtn = document.querySelector(
  ".item.sub-title #captions-modal #closed"
);
const track = document.querySelector("video track");
const tracks = document.querySelectorAll("video track");
const tracksArr = Array.from(tracks);
const sources = document.querySelectorAll("video source");
const sourcesArr = Array.from(sources);
const courseCardIcon = document.querySelector(
  ".course-content .course-card .card--options i#option-icon"
);
const courseCardModal = document.querySelector(
  ".course-content .course-card .card--options .card-option__content"
);
const qualitys = document.querySelectorAll(".item.setting .quality button");
const qualitysArr = Array.from(qualitys);
//
//IIFE
(function () {
  totalTime.innerHTML = "00:00:00";
  currentTime.innerHTML = "00:00:00";
})();
/// subtitle changing
function playFunc() {
  video.play();
  play.style.display = "none";
  pause.classList.add("active");
  pauseInfo.classList.add("active");
}
function pauseFunc() {
  video.pause();
  pause.classList.remove("active");
  pauseInfo.classList.remove("active");
  play.style.display = "block";
}
//

//playing button

play.addEventListener("click", function () {
  playFunc();
});
//pause button
pause.addEventListener("click", function () {
  pauseFunc();
});
//volume displaying operations
volumeDisplay.addEventListener("change", function (e) {
  video.volume = e.currentTarget.value / 100;
});
////
if ((progress.style.width = "100%")) {
  setTimeout(function () {
    progress.style.width = "0%";
  }, 0);
}
//progress bar
video.addEventListener("timeupdate", function () {
  var width = parseFloat((video.currentTime * 100) / video.duration);
  var value = `${width}%`;
  progress.style.width = `${value}`;
  totalTime.innerHTML = convertHMS(video.duration);
  currentTime.innerHTML = convertHMS(video.currentTime);
  // if ((progress.style.width = "100%")) {
  //   setTimeout(function () {
  //     progress.style.width = "0%";
  //   }, 2000);
  // }
});

//fullscreen mode
fullScreen.addEventListener("click", function () {
  video.requestFullscreen();
});
/// rewind
rewindBtn.addEventListener("click", function () {
  video.currentTime -= 5;
});
/// forward
forwardBtn.addEventListener("click", function () {
  video.currentTime += 5;
});
//progressbar function
progressBar.addEventListener("click", function (e) {
  var value = parseFloat(
    ((e.clientX - this.offsetLeft) / this.offsetWidth) * 100
  ); // tıkladığımız yerin yüzdesi
  video.currentTime = video.duration * value * 0.01;
  progress.style.width = `${value}%`;
});
// when click on video play/pause
function playPause() {
  if (video.paused) playFunc();
  else pauseFunc();
}
// time showing
function convertHMS(value) {
  const sec = parseInt(value, 10); // convert value to number if it's string
  let hours = Math.floor(sec / 3600); // get hours
  let minutes = Math.floor((sec - hours * 3600) / 60); // get minutes
  let seconds = sec - hours * 3600 - minutes * 60; //  get seconds
  // add 0 if value < 10; Example: 2 => 02
  if (hours < 10) {
    hours = "0" + hours;
  }
  if (minutes < 10) {
    minutes = "0" + minutes;
  }
  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  return hours + ":" + minutes + ":" + seconds; // Return is HH : MM : SS
}
//captions
if (video.contains(track)) {
  tracksArr.forEach((mytrack) => {
    var element = document.createElement("button");
    var icon = document.createElement("i");
    var buttonId = mytrack.id;
    icon.classList.add("fa-solid");
    icon.classList.add("fa-square");
    element.innerHTML = mytrack.label;
    element.setAttribute("id", buttonId);
    element.appendChild(icon);
    captionModal.appendChild(element);
  });
  const captionButton = document.querySelectorAll("#captions-modal button");
  const captionButtonArr = Array.from(captionButton);
  captionButtonArr.forEach((myButton) => {
    myButton.addEventListener("click", function () {
      if (myButton.id === "video-track-tr") {
        tracksArr[0].setAttribute(
          "src",
          "./assets/images/[tr] Unbroken - Motivational Video.mp4 (1).vtt"
        );
      } else if (myButton.id === "video-track-en") {
        tracksArr[0].setAttribute(
          "src",
          "./assets/images/Unbroken - Motivational Video.mp4.vtt"
        );
      } else {
        tracksArr[0].setAttribute("src", "...");
      }
    });
  });
} else {
  captionBtn.style.display = "none";
  captionP.style.display = "block";
}
// quality selection
qualitysArr.forEach((myquality) => {
  myquality.addEventListener("click", function () {
    video.pause(); //Get Current Time of Video //videoDOM.currentTime
    if (myquality.id === "1") {
      sourcesArr[0].setAttribute(
        "src",
        "./assets/images/x2mate.com-Unbroken - Motivational Video-(1080p).mp4"
      );
      video.play();
    } else if (myquality.id === "2") {
      sourcesArr[0].setAttribute(
        "src",
        "./assets/images/Unbroken - Motivational Video-720px.mp4"
      );
    } else if (myquality.id === "3") {
      sourcesArr[0].setAttribute(
        "src",
        "./assets/images/Unbroken - Motivational Video-360px.mp4"
      );
    } else {
      sourcesArr[0].setAttribute(
        "src",
        "./assets/images/x2mate.com-Unbroken - Motivational Video-(144p).mp4"
      );
    }
  });
});

//

$(document).ready(function () {
  //valume hover effect settings
  $(".item.volume").click(function () {
    $(".item.volume .hover-effect-info-volume").toggleClass("active");
  });
  //playback-rate
  $(".item.speed").click(function () {
    $(".item.speed #playback-rate-modal").toggleClass("active");
  });
  //caption toogle btn
  $(".item.sub-title").click(function () {
    $(".item.sub-title #captions-modal").toggleClass("active");
  });
  //setting toogle modal
  $(".item.setting").click(function () {
    $(".item.setting #setting-modal").toggleClass("active");
  });
  // when clicklin button sidebar will closed
  $(".course-sidebar__header--close-btn").click(function () {
    $(".course-sidebar--toggle-btn").addClass("active");
    $("#course-sidebar").addClass("active");
    $(".course-main-content-part").addClass("fullMode");
  });
  $(".course-sidebar--toggle-btn").click(function () {
    $(".course-sidebar--toggle-btn").removeClass("active");
    $("#course-sidebar").removeClass("active");
    $(".course-main-content-part").removeClass("fullMode");
  });
  $("#course-playing-share-btn").click(function () {
    $("#share-button-modal").toggleClass("active");
    $("body").toggleClass("active");
  });

  // select quality
  // $(".quality button").change(function () {
  //   //Have several videos in file, so have to navigate directly
  //   video = document.querySelector("video");

  //   //Need access to DOM element for some functionality
  //   // videoDOM = video.get(0);
  //   curtime = video.currentTime; //Get Current Time of Video //videoDOM.currentTime
  //   source = video.find("source[label=" + $(this).textContent + "]"); //Copy Source

  //   source.remove(); //Remove the source from select
  //   video.prepend(source); //Prepend source on top of options
  //   video.load(); //Reload Video
  //   videoDOM.currentTime = curtime; //Continue from video's stop
  //   videoDOM.play(); //Resume video
  // });
  ///
});
