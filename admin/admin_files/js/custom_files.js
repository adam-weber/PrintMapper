$(document).ready(function() {
  $(".section-hidden").hide();
  $("#buttons").hide()
  $(".details").click(function() {
    var section = $(this).next("section");
    if(section.is(':visible')) {
    	section.hide(); 
    } else {
  		section.show();
    }
  })
  $(".btn-cancel").click(function(){
    pageRefresh(1)
  })
});

$(".files-input").on('input', function(e){
  $("#buttons").show()
})

function pageRefresh(time){
  setTimeout(function(){
   window.location.reload(1)
  }, time)
}

var vis = (function(){
  var stateKey, eventKey, keys = {
    hidden: "visibilitychange",
    webkitHidden: "webkitvisibilitychange",
    mozHidden: "mozvisibilitychange",
    msHidden: "msvisibilitychange"
  };
  for (stateKey in keys) {
    if (stateKey in document) {
      eventKey = keys[stateKey];
      break;
    }
  }
  return function(c) {
    if (c) document.addEventListener(eventKey, c);
    return !document[stateKey];
  }
})();

vis(function(){
  if(vis()){
    $('#favicon').attr('href', "../admin_files/images/favicon_active.ico")
  }else {
    $('#favicon').attr('href', "../admin_files/images/favicon_inactive.ico")
  };
});
