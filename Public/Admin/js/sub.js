	$(document).ready(function(){
	$('.timkiem').keyup(function(){
		var txt = $('.timkiem').val();

		$.post('controller/ajax/controller_ajax_sub.php', {data: txt}, function(data){

			$('.danhsach').html(data);  
			if ($('.number_of_sub').html() != null) {
				var resultNumber = $('.number_of_sub').html();
				$('#result').html(`Có ${resultNumber} kết quả`);
			} else {
				$('#result').html(`Không có kết quả phù hợp`);
			}
			
			if (txt.length < 1) {
				$('#result').html(``);
			}
		});
	});
});
// $(document).ready(function(){
// 	$('.timkiem').keyup(function(){
// 		$.getJSON("controller/ajax/controller_ajax_sub.php", function(key, val)){
// 			var txt = $('.timkiem').val();
// 			var regex = new RegExp(txt , 'i');
// 			var output;
// 			$.each(data, function(key, val){})
// 				output += "<tr>";
// 				output += "<td id ='"+key+"'>"+val.name_subject+"</td>";
// 				output += "</tr>";
// 			};
// 		}
// 	});
// });