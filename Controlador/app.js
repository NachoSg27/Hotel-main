
(function () {
  'use strict';

  /*
    Muestra elementos cuando entran en pantalla.
    Esto usa IntersectionObserver
  */
  var revealItems = document.querySelectorAll('[data-reveal]');
  if (revealItems.length > 0 && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(
      function (entries, currentObserver) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            currentObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12 }
    );

    revealItems.forEach(function (item) {
      observer.observe(item);
    });
  } else {

    revealItems.forEach(function (item) {
      item.classList.add('is-visible');
    });
  }

  var filterButtons = document.querySelectorAll('[data-filter]');
  var roomCards = document.querySelectorAll('[data-room-type]');
  if (filterButtons.length > 0 && roomCards.length > 0) {
    filterButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        filterButtons.forEach(function (btn) {
          btn.classList.remove('active');
        });
        button.classList.add('active');

        var selected = button.getAttribute('data-filter');
        roomCards.forEach(function (card) {
          var type = card.getAttribute('data-room-type');
          var show = selected === 'all' || selected === type;
          card.style.display = show ? '' : 'none';
        });
      });
    });
  }


  var inputCheckin = document.getElementById('checkinDate');
  var inputCheckout = document.getElementById('checkoutDate');
  if (inputCheckin && inputCheckout) {
    var now = new Date();
    var year = now.getFullYear();
    var month = String(now.getMonth() + 1).padStart(2, '0');
    var day = String(now.getDate()).padStart(2, '0');
    var minDate = year + '-' + month + '-' + day;

    inputCheckin.setAttribute('min', minDate);
    inputCheckout.setAttribute('min', minDate);

    inputCheckin.addEventListener('change', function () {
      var checkinValue = inputCheckin.value || minDate;
      inputCheckout.setAttribute('min', checkinValue);
      if (inputCheckout.value && inputCheckout.value < checkinValue) {
        inputCheckout.value = checkinValue;
      }
    });
  }
})();


