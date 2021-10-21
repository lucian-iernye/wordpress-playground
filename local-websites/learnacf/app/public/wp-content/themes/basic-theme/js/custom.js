jQuery(".gallery").magnificPopup({
  delegate: "a", // child items selector, by clicking on it popup will open
  type: "image",
  // other options
  gallery: {
    enabled: true,
    preload: [0, 2],
    navigateByImgClick: true,
  },
  image: {
    titleSrc: "title",
  },
});
