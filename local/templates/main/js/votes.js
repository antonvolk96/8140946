$().ready(
		function(){
			
			$('#votes').submit(
					function(){
						var o = $('input:checked').val();
						var url = "/js/aj.Vote.php?action=" + this.action.value + "&option=" + o + "&i=" + this.i.value;
						$.get(url,function(data){
							var response = data.split('|');
							if(response[0] == 'ok'){
								$('.poll').replaceWith(response[1]);
							}
							return false;
						});
						return false;
					});
			
			$('#votes_result').click(function(){
				var url = "/js/aj.Vote.php?action=ShowResults";
				$.get(url,function(data){
					var response = data.split('|');
					if(response[0] == 'ok'){
						$('.poll').replaceWith(response[1]);
					}
					return false;
				});
				return false;
			});
		});
		