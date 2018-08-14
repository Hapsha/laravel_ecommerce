

$(document).ready(function(){
	$("#selSize").change(function(){
		var idSize = $(this).val();
		if(idSize ==""){
			return false;
		}
		$.ajax({
			type:'get',
			url:'/get-product-price',
			data:{idSize:idSize},
			success:function(resp){
				/*alert(resp);*/
				var arr = resp.split('#');
				$("#getPrice").html("TK " + arr[0]);
				$("#price").val(arr[0]); 
				if(arr[1]==0){
					$("#cartButton").hide();
					$("#Availability").text("Out Of Stock");
				}else{
					$("#cartButton").show();
					$("#Availability").text("In Stock");
				}
			},error:function(){
				alert('error');
			}
		});
	});
});