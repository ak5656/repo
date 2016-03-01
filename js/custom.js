// JavaScript Document

//GLOBALE OBJECT
DF = {
		set:{result:''}
	
}//--

jQuery.fn.extend({
	
  sendData: function(prms) {
	      	
	$.ajax({
				beforeSend:function(){prms.loader.show()},
				url:prms.url,
				type:'post',
				data:prms.data,
				async:false,
				success: function(result){
						DF.set.result = result;	 					
					},
				complete:function(){prms.loader.hide()}
												
			});
			
						
  },
  
  
});
