/************************************************************
 *
 *    Chained Selects jQuery Plugin 
 *    Copyright (C) 2012 Leonel Folmer www.leonelfolmer.com 
 *
 ************************************************************/

jQuery.fn.cs = function( target, url, set ) {
  return this.each( function() {
	  
	$(this).change( function( ) {
		set = jQuery.extend({
			after  			: null,
			before 			: null,
			post   			: false,
			defaultValue 	: null,
			
			p : {'_id'   : $(this).attr('id'), 
					 '_name' : $(this).attr('name')
			}
        
	} , set);

		set.p._value =  $(this).val();

		if (set.before != null) {
			set.before( target );
		}

		ajax = function(data, textStatus) {
			$(target).html("");
			data = eval(data);
			
			for (i = 0; i < data.length; i++) {
			  
			  for ( key in data[i] ) {	
					$(target).get(0).add(new Option(data[i][key],[key]), document.all ? i : null);
              }
			}

			if (set.defaultValue != null) {
				$(target).val(set.defaultValue);
			} else {
				$("option:first", target).attr( "selected", "selected" );
			}

			if (set.after != null) {
				set.after(target);
			}
			
			$(target).change();
			
		};

		if (set.post == true) {
			$.post( url, set.p, ajax );
		} else {
			$.get( url, set.p, ajax );
		}
	});
  });
};