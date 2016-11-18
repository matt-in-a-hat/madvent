'use strict'

$(document).on('ready', function () {
  $('.door-list li').on('click', function () {
    $.get('open?door=' + $(this).data('door')).done(function (response) {
      if (response) {
        window.alert(response)
      } else {
        window.alert('This door appears to be locked')
      }
    }).fail(function () {
      window.alert('This door appears to be locked')
    })
  })
})
