// Blog Nikita Lebedev , nazz.me/simple-jquery-popup
(function($) {
  $.fn.simplePopup = function() {
  var simplePopup = {
      // handlers
      initialize: function(self) {

        var popup = $(".js__popup");
        var body = $(".js__p_body");
        var close = $(".js__p_close");
        var hash = "#popup";

        var string = self[0].className;
        var name = string.replace("js__p_", "");

        // Redefine the variables if there is an additional popup
        if ( !(name === "start") ) {
          name = name.replace("_start", "_popup");
          popup = $(".js__" + name);
          name = name.replace("_", "-");
          hash = "#" + name;
        };

        // ВCall when you
        self.on("click", function() {
         simplePopup.show(popup, body, hash);
          return false;
        });
        $(document).ready(function(){
           simplePopup.show(popup, body, hash);
          return false;
          });

        $(window).on("load", function() {
          simplePopup.hash(popup, body, hash);
        });

        // close
        body.on("click", function() {
          simplePopup.hide(popup, body);
        });

        close.on("click", function() {
          simplePopup.hide(popup, body);
          return false;
        });

        // Closing button esc
        $(window).keyup(function(e) {
          if (e.keyCode === 27) {
            simplePopup.hide(popup, body);
          }
        });

      },

      // method of centering
      centering: function(self) {
        var marginLeft = -self.width()/2;
        return self.css("margin-left", marginLeft);
      },

      // General function display
      show: function(popup, body, hash) {
        simplePopup.centering(popup);
        body.removeClass("js__fadeout");
        popup.removeClass("js__slide_top");
        window.location.hash = hash;
      },

      // The overall function of hiding
      hide: function(popup, body) {
        popup.addClass("js__slide_top");
        body.addClass("js__fadeout");
        window.location.hash = "#";
      },

      //Monitors hash in Urla
      hash: function(popup, body, hash) {
        if (window.location.hash === hash) {
          simplePopup.show(popup, body, hash);
        }
      }

    };

    // Looking for that cycle caused
    return this.each(function() {
      var self = $(this);
      simplePopup.initialize(self);
    });

  };
})(jQuery);

