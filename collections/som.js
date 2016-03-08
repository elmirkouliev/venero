$(document).ready(function () {

	var buttons = document.getElementsByClassName('collection-toggle');

	for (var i = 0; i < buttons.length; i++) {

		var id = buttons[i].id;

		buttons[i].addEventListener('click', function(event){
			
			var targetElement = event.target || event.srcElement;
		
			if(targetElement.id == 'first'){

				document.getElementById('second-campaign').style.display = 'none';

				document.getElementById('first-campaign').style.display = 'block';

			}
			else if(targetElement.id == 'second'){

				document.getElementById('first-campaign').style.display = 'none';

				document.getElementById('second-campaign').style.display = 'block';

			}

		});

	};

});