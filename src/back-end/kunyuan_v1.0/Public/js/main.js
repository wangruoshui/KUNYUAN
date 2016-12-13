$(function() {

  // Doamin
  var $autoCompleteDomain = $('#auto-complete-domain');
  var $autoCompleteGo = $('#auto-complete-go');

  $autoCompleteDomain.completer({
    complete: function() {
      var url = 'http://www.' + $autoCompleteDomain.val();

      $autoCompleteGo.attr('href', url);
    },
    separator: '.',
    source: ['@qq.com', 'net', 'org', 'co', 'io', 'me', 'cn', 'com.cn']
  });

});
