"use strict";

!function (l) {
  "use strict";

  l("#sidebarToggle, #sidebarToggleTop").on("click", function (e) {
    l("body").toggleClass("sidebar-toggled"), l(".sidebar").toggleClass("toggled"), l(".sidebar").hasClass("toggled") && l(".sidebar .collapse").collapse("hide");
  }), l(window).resize(function () {
    l(window).width() < 768 && l(".sidebar .collapse").collapse("hide"), l(window).width() < 480 && !l(".sidebar").hasClass("toggled") && (l("body").addClass("sidebar-toggled"), l(".sidebar").addClass("toggled"), l(".sidebar .collapse").collapse("hide"));
  }), l("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel", function (e) {
    var o;
    768 < l(window).width() && (o = (o = e.originalEvent).wheelDelta || -o.detail, this.scrollTop += 30 * (o < 0 ? 1 : -1), e.preventDefault());
  }), l(document).on("scroll", function () {
    100 < l(this).scrollTop() ? l(".scroll-to-top").fadeIn() : l(".scroll-to-top").fadeOut();
  }), l(document).on("click", "a.scroll-to-top", function (e) {
    var o = l(this);
    l("html, body").stop().animate({
      scrollTop: l(o.attr("href")).offset().top
    }, 1e3, "easeInOutExpo"), e.preventDefault();
  });
  window.addEventListener('load', function () {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation'); // Loop over them and prevent submission

    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated');
      }, false);
    });
  }, false);
  var actualBtn = document.getElementById('actual-btn');
  var namaFile = document.getElementById('nama-file');
  actualBtn.addEventListener('change', function () {
    namaFile.textContent = this.files[0].name;
  }); // const optionMenu = document.getElementById(".select-menu");
  // const selectBtn = optionMenu.getElementById(".select-Btn");
  // const options = optionMenu.getElementById(".option");
  // const btn_text = optionMenu.getElementById(".btn-text");
  // options.forEach(option => {
  //     console.log(option)
  // })
}(jQuery);