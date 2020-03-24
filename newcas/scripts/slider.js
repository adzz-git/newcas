jQuery(document).ready(function() {
  var toIndex = 0,
    fromIndex = 0,
    items = jQuery('.slider-container > div, .doctors-slider-container > div'),
    itemAmt = items.length - 1;

  function toNext() {

    var item = items.eq(toIndex);
    item.css({
      'transition': 'transform 0.4s ease',
      'transform': 'translateX(0%)',
      'z-index': '1'
    });

    if (toIndex == 0) {
      fromIndex = itemAmt;
    } else {
      fromIndex = toIndex - 1;
    }

    var fromItem = items.eq(fromIndex);
    fromItem.css({
      'transition': 'transform 0.4s ease',
      'transform': 'translateX(-100%)',
      'z-index': '-1'
    });

  }

  function toPrev() {
    if (toIndex == itemAmt) {
      fromIndex = 0;
    } else {
      fromIndex = toIndex + 1;
    }

    var fromItem = items.eq(fromIndex);
    fromItem.css({
      'transition': 'transform 0.4s ease',
      'transform': 'translateX(-100%)',
      'z-index': '-1'
    });

    var item = items.eq(toIndex);
    item.css({
      'transition': 'transform 0.4s ease',
      'transform': 'translateX(0%)',
      'z-index': '1'
    });
  }

  var autoSlide = setInterval(function() {
    toIndex += 1;
    if (toIndex > itemAmt) {
      toIndex = 0;
    }
    toNext();
  }, 6000);

  function nextClick() {
    clearInterval(autoSlide);
    toIndex += 1;
    if (toIndex > itemAmt) {
      toIndex = 0;
    }
    toNext();
  }

  function prevClick() {
    clearInterval(autoSlide);
    toIndex -= 1;
    if (toIndex < 0) {
      toIndex = itemAmt;
    }
    toPrev();
  }

  jQuery('.next').click(nextClick);
  jQuery('.doctor-next').click(nextClick);

  jQuery('.prev').click(prevClick);
  jQuery('.doctor-prev').click(prevClick);

  jQuery('.slider-container div').on('swiperight', nextClick);
  jQuery('.slider-container div').on('swipeleft', prevClick);
});
