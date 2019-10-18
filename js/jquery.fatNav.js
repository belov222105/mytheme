(function($, window, document) {
    
    var pluginName = 'fatNav',
    defaults = {};
    
    function Plugin(options) {
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }
    
    $.extend(Plugin.prototype, {
        
        init: function() {

            var self = this;
            var $nav = this.$nav = $('.fat-nav');
            var $hamburger = this.$hamburger = $('<a href="javascript:void(0)" class="hamburger"><div class="hamburger__icon">    </div></a>');
            
            this._htmlOverflow = $('html').css('overflow');

            // Hack to prevent mobile safari scrolling the whole html when nav is open
            if (navigator.userAgent.match(/(iPad|iPhone|iPod)/g)) {
                
                $nav.children().css({
                    'height': '110%',
                    'transform': 'translateY(-5%)'
                });
                
            }
            
            $('.mymenu').append($hamburger);
            
            $().add($hamburger).add($nav.find('a')).on('click', function(e) {
                self.toggleNav();
            });
            
        },
        
        toggleNav: function() {
            
            var self = this;

            this.$nav.fadeToggle(400);
			
			self.togglehtmlOverflow();

            $().add(this.$hamburger).add(this.$nav).toggleClass('active');
        },
        
        togglehtmlOverflow: function() {
            
            var self = this;
			
			var $html = $('html');
            
            $html.toggleClass('no-scroll');
			
			var isNavOpen = $html.hasClass('no-scroll');

            $html.css('overflow', isNavOpen ? 'hidden' : self._htmlOverflow);
			
        }
        
    });
    
    if (typeof $[pluginName] === 'undefined') {
        
        $[pluginName] = function(options) {
            return new Plugin(this, options);
        };
        
    }

}(jQuery, window, document));