'use strict'

var locked = $('<div><p>This door appears to be locked</p></div>')
locked.append($('<img width="350" src="assets/locked-door.jpeg">'))

$(document).on('ready', function () {
  $('.door-list li').on('click', function () {
    $.get('open.php?door=' + $(this).data('door')).done(function (response) {
      if (response) {
        $.fancybox($('<div>').html(response))
      } else {
        $.fancybox(locked)
      }
    }).fail(function () {
      $.fancybox(locked)
    })
  })
})
