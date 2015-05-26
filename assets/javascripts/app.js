// код для просмотра картинки загружаемой на странице конструктора
$('#choose_image').change(function() {
  var input = $(this)[0];
  if ( input.files && input.files[0] ) {
    if ( input.files[0].type.match('image.*') ) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#preview_image').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    } else console.log('is not image mime type');
  } else console.log('not isset files data or files API not supordet');
});

// событие выбора елемента type="radio" на странице конструктора
$('input:radio[name="wyw"]').on('change', function () {
  if ($(this).attr('role') === 'fade-opt-list') {
    $("[data-opt-list-container]").css({'opacity' : '0.2'});
  } else $("[data-opt-list-container]").css({'opacity' : '1'});
});