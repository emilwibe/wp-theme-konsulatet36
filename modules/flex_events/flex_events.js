{
    if (document.querySelectorAll(".splide-events").length) {
    let splide = new Splide(".splide-events", {
      type: "loop",
      perPage: 4,
      perMove: 1,
      gap: 20,
      arrows: false,
      pagination: true,
      breakpoints: {
        768: {
          perPage: 3,
        },
        480: {
            arrows: false,
            pagination: false,
            perPage: 1,
        }
      },
    });
    splide.mount();
  }
}