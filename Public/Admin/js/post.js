	$(document).ready(function(){
	$('.timkiem').keyup(function(){
		var txt = $('.timkiem').val();

		$.post('controller/ajax/controller_ajax_post.php', {data: txt}, function(data){

			$('.danhsach').html(data);  
			if ($('.number_of_post').html() != null) {
				var result = $('.number_of_post').html();
				$('#result').html(`Có ${result} kết quả`);
			} else {
				$('#result').html(`Không có kết quả phù hợp`);
			}
			
			if (txt.length < 1) {
				$('#result').html(``);
			}
		});
	});
});