window.addEventListener("load", () => {
  const fundingReviewEle = document.querySelector(".funding_review ul");

  const mainResizeMo = () => {
    fundingReviewEle.classList.add("scroll-trans");
  };

  const mainResizePc = () => {
    fundingReviewEle.classList.remove("scroll-trans");
    let i = 3;
    fundingReviewEle.querySelectorAll("li").forEach((item, ind) => {
      item.classList.add(`scroll-trans-delay-${i++}00`, "scroll-trans");
    });
  };

  if (window.innerWidth < 969) {
    mainResizeMo();
  } else {
    mainResizePc();
  }

  window.addEventListener("resize", () => {
    if (window.innerWidth < 969) {
      mainResizeMo();
    } else {
      mainResizePc();
    }
  });

  const scrollTrans = document.querySelectorAll(".scroll-trans");
  for (let i = 0; i < scrollTrans.length; i++) {
    const clientRectY = window.pageYOffset + scrollTrans[i].getBoundingClientRect().top;
    const windowHt = window.innerHeight - 50;
    const resultTrans = clientRectY - windowHt;
    window.addEventListener("scroll", () => {
      const scr = window.scrollY;
      if (resultTrans < scr) {
        scrollTrans[i].classList.add("on");
      }
    });
  }
});
