$(document).ready(function(){
    $('.fig-gallery').magnificPopup({
        type:'image',
        gallery: {
          enabled: true
        },
        callbacks: {
        elementParse: function(item) {
          item.src = item.el.data('img-src');
        }
      }
    });
});