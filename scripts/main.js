// Form validation
const form = document.getElementById("submitForm");
if (form) {
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    resetErrors();

    let hasError = false;

    let name = document.getElementById("name-input").value;
    let errorName = document.getElementById("error__name");

    if (name.trim() === "") {
      hasError = true;
      document.getElementById("name-input").style.borderColor = "#be123c";
      showError(errorName, "Please type your name.");
    } else if (/[^a-zA-Z\s]/.test(name)) {
      hasError = true;
      document.getElementById("name-input").style.borderColor = "#be123c";
      showError(errorName, " Number is not allowed.");
    }

    let email = document.getElementById("email-input").value;
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!email.match(emailPattern)) {
      hasError = true;
      document.getElementById("email-input").style.borderColor = "#be123c";
      let errorEmail = document.getElementById("error__email");
      showError(errorEmail, "Please enter a valid email address.");
    }

    let query = document.getElementById("query").value;
    if (query.trim() === "") {
      hasError = true;
      let errorQuery = document.getElementById("error__query");
      showError(errorQuery, "Please type your query.");
    }

    if (hasError) {
      return;
    }

    showSuccess("Your query is successfully submitted to us.");
  });
}

function showError(errorElement, message) {
  errorElement.style.display = "inline-block";
  errorElement.querySelector("span").textContent = message;
}

function resetErrors() {
  document.querySelectorAll(".fieldinput p").forEach(function (errorElement) {
    errorElement.style.display = "none";
  });

  document
    .querySelectorAll(".fieldinput input, .fieldinput textarea")
    .forEach(function (inputElement) {
      inputElement.style.borderColor = "";
    });
}

function showSuccess(message) {
  let successMessage = document.querySelector(".response-msg");
  successMessage.style.display = "inline";
  successMessage.querySelector("span").textContent = message;

  AOS.refresh();

  document
    .querySelectorAll(".fieldinput input, .fieldinput textarea")
    .forEach(function (inputElement) {
      if (inputElement.type === "radio") {
        inputElement.checked = false;
      } else {
        inputElement.value = "";
      }
    });
}

// Embla settings
const OPTIONS = { loop: true, slidesToScroll: "auto" };

const emblaNode = document.querySelector(".embla");
const viewportNode = emblaNode.querySelector(".embla__viewport");
const prevBtnNode = emblaNode.querySelector(".embla__button--prev");
const nextBtnNode = emblaNode.querySelector(".embla__button--next");

const emblaApi = EmblaCarousel(viewportNode, OPTIONS);

const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
  emblaApi,
  prevBtnNode,
  nextBtnNode
);

emblaApi.on("destroy", removePrevNextBtnsClickHandlers);

function addTogglePrevNextBtnsActive(emblaApi, prevBtn, nextBtn) {
  const togglePrevNextBtnsState = () => {
    if (emblaApi.canScrollPrev()) prevBtn.removeAttribute("disabled");
    else prevBtn.setAttribute("disabled", "disabled");

    if (emblaApi.canScrollNext()) nextBtn.removeAttribute("disabled");
    else nextBtn.setAttribute("disabled", "disabled");
  };

  emblaApi
    .on("select", togglePrevNextBtnsState)
    .on("init", togglePrevNextBtnsState)
    .on("reInit", togglePrevNextBtnsState);

  return () => {
    prevBtn.removeAttribute("disabled");
    nextBtn.removeAttribute("disabled");
  };
}

function addPrevNextBtnsClickHandlers(emblaApi, prevBtn, nextBtn) {
  const scrollPrev = () => {
    emblaApi.scrollPrev();
  };
  const scrollNext = () => {
    emblaApi.scrollNext();
  };
  prevBtn.addEventListener("click", scrollPrev, false);
  nextBtn.addEventListener("click", scrollNext, false);

  const removeTogglePrevNextBtnsActive = addTogglePrevNextBtnsActive(
    emblaApi,
    prevBtn,
    nextBtn
  );

  return () => {
    removeTogglePrevNextBtnsActive();
    prevBtn.removeEventListener("click", scrollPrev, false);
    nextBtn.removeEventListener("click", scrollNext, false);
  };
}

// Our Products Hover Navbar
const productsLink = document.getElementById("products-link");
const expandedDiv = document.querySelector(".our-products-expanded");

productsLink.addEventListener("click", function (e) {
  e.preventDefault();

  if (expandedDiv.style.display === "block") {
    expandedDiv.style.display = "none";
  } else {
    expandedDiv.style.display = "block";
  }
});

function hideExtended() {
  expandedDiv.style.display = "none";
}

// Side Menu
const navHamburger = document.getElementById("nav-burger");
const sideMenu = document.querySelector(".side-menu");

const crossSideMenu = document.getElementById("cross-side-menu");

navHamburger.addEventListener("click", () => {
  sideMenu.classList.toggle("active");

  if (sideMenu.classList.contains("active")) {
    document.body.style.overflow = "hidden";
  } else {
    document.body.style.overflow = "";
  }
});
crossSideMenu.addEventListener("click", () => {
  sideMenu.classList.toggle("active");
  document.body.style.overflow = "";
});







const modal = document.getElementById("product-modal");
const closeModal = document.getElementById("close-modal");

const viewButtons = document.querySelectorAll(".view-card");

viewButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const card = button.closest("#product-card");
    const imageSrc = card.querySelector("img").getAttribute("src");
    const title = card.querySelector(".card-title").innerText;
    const price = card.querySelector(".card-price").innerText;

    document.getElementById(
      "modal-image"
    ).innerHTML = `<img src="${imageSrc}" alt="${title}">`;
    document.getElementById("modal-title").innerText = title;
    document.getElementById("modal-price").innerText = price;

    modal.style.display = "block";
  });
});

closeModal.addEventListener("click", function () {
  modal.style.display = "none";
});

window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
