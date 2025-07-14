{
  // particles.js
  /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
  particlesJS.load("particles-js", ew_template_dir_uri + "/assets/data/particles-config.json", function () {
    console.log("callback - particles.js config loaded");
  });
}
{
  // Video on front page
  let indexVideo = document.querySelector(".index-video");

  if(indexVideo) {
    indexVideo.playbackRate = 0.8;
  }
}