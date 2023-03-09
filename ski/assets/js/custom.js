jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 100) {
    jQuery(".main-header").addClass("sticky");
  } else {
    jQuery(".main-header").removeClass("sticky");
  }
});

jQuery(document).on("click", ".homeburger-manu", function () {
  if (jQuery(".listing-box").css("display") == "none") {
    jQuery(".listing-box").slideDown();
  } else {
    jQuery(".listing-box").slideUp();
  }
});

jQuery("#latest-slider").owlCarousel({
  rewind: true /* use rewind if you don't want loop */,
  margin: 20,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },

    600: {
      items: 1,
    },

    1024: {
      items: 1,
    },

    1366: {
      items: 1,
    },
  },
});

$(".feq-btn-box").on("click", function () {
  $(this).find(".arrow").toggleClass("active");
});

// user login validation //
// $("#login").validate({
//   rules: {
//     email: {
//       required: true,
//       email: true,
//     },
//     password: {
//       required: true,
//       minlength: 6,
//     },
//   },
//   messages: {
//     email: {
//       required: "Please enter your email",
//       email: "Please enter valid email",
//     },
//     password: {
//       required: "Please enter your password",
//       minlength: "Your password must be at least 6 characters long",
//     },
//   },
//   submitHandler: function (form) {
//     $("#loader").show();
//     $("#login button:submit").addClass("disabledAnchor");
//     var formData = new FormData(form);
//     $.ajax({
//       method: "POST",
//       processData: false,
//       contentType: false,
//       cache: false,
//       data: formData,
//       url: "/login",
//       headers: {
//         "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content"),
//       },
//       success: function (result) {
//         $("#login button:submit").removeClass("disabledAnchor");
//         if (result.status == "true") {
//           $(".login_message")
//             .php('<p class="alert alert-success">' + result.msg + "</p>")
//             .slideDown(1000);
//           setTimeout(function () {
//             $(".login_message").slideUp(1000);
//             $("#loader").hide();
//             window.location.href = "/dashboard";
//           }, 4000);
//         } else {
//           $(".login_message")
//             .php('<p class="alert alert-danger">' + result.msg + "</p>")
//             .slideDown(1000);
//           $("#loader").hide();
//           setTimeout(function () {
//             $(".login_message").slideUp(1000);
//           }, 4000);
//         }
//       },
//     });
//   },
// });
