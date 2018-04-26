
      $.Slitslider.defaults   = {
  // transitions speed
  speed : 800,
  // if true the item's slices will also animate the opacity value
  optOpacity : false,
  // amount (%) to translate both slices - adjust as necessary
  translateFactor : 230,
  // maximum possible angle
  maxAngle : 25,
  // maximum possible scale
  maxScale : 2,
  // slideshow on / off
  autoplay : true,
  // keyboard navigation
  keyboard : true,
  // time between transitions
  interval : 4000,
  // callbacks
  onBeforeChange : function( slide, idx ) { return false; },
  onAfterChange : function( slide, idx ) { return false; }
};
      $(function() {
      
        var Page = (function() {

          var $navArrows = $( '#nav-arrows' ),
            $nav = $( '#nav-dots > span' ),
            slitslider = $( '#slider' ).slitslider( {
              onBeforeChange : function( slide, pos ) {

                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );

              }
            } ),

            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              // add navigation events
              $navArrows.children( ':last' ).on( 'click', function() {

                slitslider.next();
                return false;

              } );

              $navArrows.children( ':first' ).on( 'click', function() {
                
                slitslider.previous();
                return false;

              } );

              $nav.each( function( i ) {
              
                $( this ).on( 'click', function( event ) {
                  
                  var $dot = $( this );
                  
                  if( !slitslider.isActive() ) {

                    $nav.removeClass( 'nav-dot-current' );
                    $dot.addClass( 'nav-dot-current' );
                  
                  }
                  
                  slitslider.jump( i + 1 );
                  return false;
                
                } );
                
              } );

            };

            return { init : init };

        })();

        Page.init();

        /**
         * Notes: 
         * 
         * example how to add items:
         */

        /*
        
        var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
        
        // call the plugin's add method
        ss.add($items);

        */
      
      });

    $(document).on('ready', function() {
    
      $(".variable").slick({
         speed: 2000,
        slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
   responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
      });

    });

    $(document).on('ready', function() {
      
      
      $('.center').slick({
         cssEase: 'linear',
           speed: 1000,
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
  
   
    });

  // Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
     
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$( document ).ready(function() {
      
  $('#hearts').on('starrr:change', function(e, value){
    $('#count').html(value);
  });
  
  $('#hearts-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});
