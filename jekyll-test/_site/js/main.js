(function() {
  window.leadpagesUX || (window.leadpagesUX = {});

  leadpagesUX.gatherScripts = function() {
    return [].forEach.call(window.leadscripts, function(script) {
      return leadpagesUX[script].init();
    });
  };

  leadpagesUX.home = {
    init: function() {}
  };

}).call(this);
