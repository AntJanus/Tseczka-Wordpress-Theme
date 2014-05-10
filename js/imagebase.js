(function($) {
     $.fn.imageBase = function(lineHeight) {
		 var lH = lineHeight;
		 return this.each(function(){
			 var obj = $(this);
			// set line height
			var pHeight = obj.find('p').css('line-height');
			if(pHeight === 'normal'){
			pHeight = lH;
			}
			else{
			pHeight = parseFloat(pHeight);
			}
			// change img padding/height
			
			$("img", obj).each(function(){
				var imgHeight = $(this).height();
				//adjust height to the next baseline multiple
				var adjustedHeight = imgHeight - (imgHeight % pHeight);
				var imgWidth = $(this).width();
				var adjustedWidth = Math.round((imgWidth * adjustedHeight) / imgHeight);
				$(this).attr('height', adjustedHeight);
				$(this).attr('width', adjustedWidth);
			});
			
		 });
        }
})(jQuery);