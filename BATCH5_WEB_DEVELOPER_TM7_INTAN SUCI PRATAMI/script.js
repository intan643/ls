// Navigation Bar
$(document).ready(function() {
  $('#menu-btn').click(function() {
      $('nav .navigation ul').addClass('active');
  });
  $('#menu-close').click(function() {
      $('nav .navigation ul').removeClass('active');
  });
});

// Validasi masuk
// function validateForm() {
//   const username = document.forms["loginForm"]["username"].value;
//   const password = document.forms["loginForm"]["password"].value;

//   if (username === "") {
//       alert("Username harus diisi.");
//       return false;
//   }

//   if (password === "") {
//       alert("Password harus diisi.");
//       return false;
//   }

//   return true; // Allow the form to submit
// }

//   Validasi Daftar
// function validateRegisterForm() {
//   const fullName = document.forms["registerForm"]["fullname"].value;
//   const email = document.forms["registerForm"]["email"].value;
//   const password = document.forms["registerForm"]["password"].value;
//   const confirmPassword = document.forms["registerForm"]["confirmPassword"].value;

//   // Validate full name
//   if (fullName === "") {
//       alert("Nama lengkap harus diisi.");
//       return false;
//   }

//   // Validate email
//   if (email === "") {
//       alert("Email harus diisi.");
//       return false;
//   }

//   // Validate password
//   if (password === "") {
//       alert("Password harus diisi.");
//       return false;
//   }

//   // Validate confirm password
//   if (confirmPassword === "") {
//       alert("Konfirmasi password harus diisi.");
//       return false;
//   }

//   // Validate that password and confirm password match
//   if (password !== confirmPassword) {
//       alert("Password dan konfirmasi password harus sama.");
//       return false;
//   }

//   return true; // Allow the form to submit
// }


  // slideshow
let slideIndex = 0;
showSlides();

function showSlides() {
    const slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Ganti slide setiap 5 detik
}

function plusSlides(n) {
    slideIndex += n;
    const slides = document.getElementsByClassName("slide");
    if (slideIndex > slides.length) {
        slideIndex = 1;
    } 
    if (slideIndex < 1) {
        slideIndex = slides.length;
    }
    showSlidesManually(slideIndex);
}

function showSlidesManually(index) {
    const slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[index - 1].style.display = "block";
}

//about
    $(document).ready(function() {
        $('#category-select').on('change', function() {
            var selectedCategory = $(this).val();
            $('.post').each(function() {
                var postCategory = $(this).data('category');

                if (selectedCategory === 'all' || postCategory === selectedCategory) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });


