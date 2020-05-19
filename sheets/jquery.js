$(document).ready(function () {
  $('.btn').click(function (event) {
    var email = $('#email').val();

    var statusElm = $('#result');
    statusElm.empty();

    if (email.length > 5 && email.includes('@') && email.includes('.')) {
      event.preventDefault();
      statusElm.append(
        '<div>Thanks for signing up</div> <div><img src="content/img/player-heart.png"></div>'
      );
      statusElm.css('color', 'green');
    } else {
      event.preventDefault();
      statusElm.append(
        '<div>The Email can not be registered</div> <div><img src="content/img/creeper-head.png"></div>'
      );
      statusElm.css('color', 'red');
    }
  });
});
