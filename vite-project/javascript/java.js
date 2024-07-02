const slider = document.querySelector('.slider');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const slides = Array.from(slider.querySelectorAll('img'));
const slideCount = slides.length;
let slideIndex = 0;

// Set event listeners for prev and next buttons
prevButton.addEventListener('click', showPreviousSlide);
nextButton.addEventListener('click', showNextSlide);

// Function to show previous slide
function showPreviousSlide() {
  slideIndex = (slideIndex - 4 + slideCount) % slideCount; // Display 4 previous slides
  updateSlider();
}

// Function to show next slide
function showNextSlide() {
  slideIndex = (slideIndex + 4) % slideCount; // Display 4 next slides
  updateSlider();
}


function updateSlider() {
  slides.forEach((slide, index) => {
    if (index >= slideIndex && index < slideIndex + 4) {
      slide.style.display = 'block';
    } else {
      slide.style.display = 'none';
    }
  });
}

// Initialize slider
updateSlider();

document.getElementById('dostavka').addEventListener('change', function() {
  var modal = document.getElementById('myModal');
  var modalone = document.getElementById('myModalONE');
  modal.style.display = this.checked ? 'block' : 'none';
  modalone.style.display = 'none'; // Закрыть второе модальное окно при открытии первого
});

document.getElementById('pickup').addEventListener('change', function() {
  var modal = document.getElementById('myModal');
  var modalone = document.getElementById('myModalONE');
  modalone.style.display = this.checked ? 'block' : 'none';
  modal.style.display = 'none'; // Закрыть первое модальное окно при открытии второго
});

document.querySelector('#myModal .close').addEventListener('click', function() {
  document.getElementById('myModal').style.display = 'none';
});

document.querySelector('#myModalONE .close').addEventListener('click', function() {
  document.getElementById('myModalONE').style.display = 'none';
});

var modalLink = document.getElementById("modal-link");
var modal = document.getElementById("modal");
var closeButton = document.getElementsByClassName("close")[0];

modalLink.addEventListener("click", function() {
  modal.style.display = "block";
});

closeButton.addEventListener("click", function() {
  modal.style.display = "none";
});
function toggleMenu() {
  var x = document.querySelector('.menu-nav');
  x.classList.toggle('active'); // Toggle the 'active' class to show/hide the menu
}

