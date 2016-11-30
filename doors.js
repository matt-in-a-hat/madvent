'use strict'

var locked = $('<div><p>This door appears to be locked</p></div>')
locked.append($('<img width="350" src="assets/locked-door.jpeg">'))

$(document).on('ready', function () {
  $('.door-list li').on('click', function () {
    $.get('open?door=' + $(this).data('door')).done(function (response) {
      if (response) {
        $.fancybox(response)
      } else {
        $.fancybox(locked)
      }
    }).fail(function () {
      $.fancybox(locked)
    })
  })
})
