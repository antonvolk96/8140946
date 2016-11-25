
var UserOrder = {
	openOrder: function(el){
	//alert(el);
		var oN = el.split('_')[1];

		IdExists('o_' + oN);
		
		var url = '/js/aj.User.php?action=showOrder&id=' + oN;
		$.get(url, function(data){
			//alert(data);
			if(data == ''){
				return false;}
			else{
				$('#o_' + oN).
					html(data).
					dialog({
							title:'Заказ номер ' + oN,
							width:800,
							close:function(){
								$(this).dialog('destroy');
							}
					});
			}
		});
		
		var url = '/js/aj.User.php?action=ShowTrackingInfo&id=' + oN;
		$.get(url,function(data){
			var tr_id = "#track_" + oN;
			$(tr_id).html("Информация об отправлении:<br>" + data);
		});
		return false;
	},
	ShowPaymentInformation: function(el){
		
		
	}
		
}





function IdExists(uId){
	if($('#' + uId).length != 0){
		$('#' + uId).html(' ');
	}else{
		$('<div class="" id="' + uId + '"> </div>').appendTo('body');
	}
}