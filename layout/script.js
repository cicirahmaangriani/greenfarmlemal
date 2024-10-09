$(document).ready(function () {
  // Add smooth scrolling to all links
  $("").on("click", function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        800,
        function () {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        }
      );
    } // End if
  });
});

// Get the button
let backToTopBtn = document.getElementById("backToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

document.querySelectorAll(".smooth-scroll").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault(); // Mencegah default behavior dari href

    const targetId = this.getAttribute("data-target"); // Ambil id dari target
    const targetElement = document.getElementById(targetId); // Dapatkan elemen target

    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop, // Gulir ke bagian elemen
        behavior: "smooth", // Gulir dengan animasi halus
      });
    }
  });
});
