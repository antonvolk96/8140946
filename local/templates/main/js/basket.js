$().ready(function(){
	$('#recalc').hide();
	
	var curQuantity;
	$('input.changeHeight').keyup(function(){
		var url = "/js/ajax.Basket.php?action=changeHeight&" + this.name + "=" + this.value;
		$.get(url,function(data){
		});
	});
	$('input.changeSize').keyup(function(){
		var url = "/js/ajax.Basket.php?action=changeSize&" + this.name + "=" + this.value;
		$.get(url,function(data){
		});
	});
	
	$('select.changeSize').change(function(){
		var url = "/js/ajax.Basket.php?action=changeSize&" + this.name + "=" + this.value;
		$.get(url,function(data){
		});
	});
	
	$('.changeQuantity').focus(function(){
		curQuantity = this.value;
	}).
	keyup(function(){
		var curVal = this.value;
		if(curVal == curQuantity)
			return;
		if(curVal == ''){
			return;
		}
		var url = "/js/ajax.Basket.php?action=changeQuantity&" + this.name + "=" + curVal;
		//alert(url);
		$.get(url,function(data){
			
			var response = data.split('|');
			if(response[0] == 'ok'){
				var sum = $('#sum').html();
				
				var price = $('#' + response[1] + '_pr').html();
				
				$('#' + response[1] + '_sum').html(response[3]);
				$('#dsum').html($('#dsum').html()*1 + response[4]*1);
				$('#ssum').html($('#ssum').html()*1 + response[5]*1);
				$('#sum').html(sum*1 + response[5]*1);
				$('#bask_info').html(response[6]);
				
			}
			curQuantity = curVal;
			
			
			if(sum*1 <1000 && (sum*1 + response[5]*1) >= 1000){
				document.location.href = document.location.href;//reload();
			}else if(sum*1 >=1000 && (sum*1 + response[5]*1) < 1000){
				document.location.href = document.location.href;//reload();
			}
		});
	});
	
	$("#next").submit(function(){
		var empty;
		$(".changeSize").each(function(){
			
			if($(this).val()==''){
				empty = true;
			}
		});
		if(empty){
			alert("Укажите, пожалуйста, размер.");
			return false;
		}
	});
});

function SetLocTime()
{
	var localtime = new Date();
	var time = localtime.getHours() + ":" + localtime.getMinutes();
	document.Conf.loctime.value = time;
	return true;
}
