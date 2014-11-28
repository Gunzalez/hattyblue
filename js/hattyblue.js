// JavaScript Document
(function ($, window) {
	
	var hattyblue = {};

    hattyblue.properties = {
        windowWidth : $(window).width(),



        resize : function(){
            var self = this;
            console.log(self.windowWidth);
        },
        init: function(){

        }
    };

    hattyblue.environment = {


        resize: function(){

        },
        init: function(){

        }
    };



    hattyblue.resize = function(){
        hattyblue.properties.resize();
        hattyblue.environment.resize();
    };

	hattyblue.init = function(){

        // All initialisations
        hattyblue.environment.init();


        // Resize triggers
		$(window).on('resize',function(){
			
			var newWidth = $(window).width(),
                oldWidth = hattyblue.properties.windowWidth;

			if(oldWidth != newWidth){
				hattyblue.resize();
				hattyblue.properties.windowWidth = newWidth;
			}
		});

        hattyblue.resize();
        $(window).trigger('resize');
	};

    // Main init
	$(document).ready(function(){
		hattyblue.init();
	});

}(jQuery, window));