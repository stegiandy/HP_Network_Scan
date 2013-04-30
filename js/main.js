function loadScanner(){
	$('.startscan').click(function(){

                var form_data = {};
                form_data.colors = $('.properties #colors option:selected').attr('value');
                form_data.resolution = $('.properties #resolution option:selected').attr('value');
                form_data.source = $('.properties #source option:selected').attr('value');

                $('.log').html('');
                $('img.loader').removeClass('hidden');
                console.log(form_data);

		//clear log
		$('.log').html('');
		//show image
		$('img.loader').removeClass('hidden');

		$.ajax({
			url: "scanner.php",
			data: form_data
		}).done(function(){
			//hide image
			$('img.loader').addClass('hidden');
			$('.log').html('<p>scan beendet</p>');
		}).success(function(data){
			if(data == '0' || data == '7'){
				$('.log').append('<p>Scan erfolgreich, Datei(n) in Freigabe abgelegt</p>');
            }else if(data == '-1'){
                $('.log').append('<p>Program scanimage nicht vorhanden</p>');
			}else{
				$('.log').append('<p>keine Daten empfangen</p>');
			}
		})

	})
}

jQuery(document).ready(function(){
    loadScanner();
});
