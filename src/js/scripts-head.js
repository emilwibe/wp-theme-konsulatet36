/**
 * Fades media in on load to prevent curtain load
 *
 * @param   target    References the element / img/video/audio element self
 *
 * @return  void
 */
function loadMediaOnLoad(target) {
  target.style.animationPlayState = "running";
}