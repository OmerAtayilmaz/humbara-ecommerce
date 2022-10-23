$(document).ready(function () {
  $(".course-content .course-card .card--options i#option-icon").click(
    function () {
      var enyakin = $(".course-card .card--options").closest(
        ".card-option__content"
      );
      console.log(enyakin[0]);
    }
  );
  $(".courses-list .course-card .link ").click(function () {
    window.location.assign("_course_playing.html");
  });
});
