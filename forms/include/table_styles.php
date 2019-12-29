<style>
		.tr_model_1_even
		{background: rgb(55, 170, 212);color: white;text-align: center;	}
		.tr_model_1_odd
		{background: rgba(55, 183, 229, 0.16);text-align: center;}
		.td_model_1
		{padding:5px;}
		</style>
		<script>
		$(document).ready(function(){
			$("tr").each(function(i){
				if(i%2==0)
					$(this).addClass("tr_model_1_even");
				else
					$(this).addClass("tr_model_1_odd");
			});
			$("td").addClass("td_model_1");
			$("caption").css('font-weight','bold');
			$('select, input:text, textarea').css('color','black');
			
		});
		</script>