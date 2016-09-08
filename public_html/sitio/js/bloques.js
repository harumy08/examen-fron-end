$(document).ready(function() {
			$('#fullpage').fullpage({
                                verticalCentered: true,
				anchors: ['firstPage', 'secondPage', '3rdPage','4thpage'],
				menu: '#menu',
				afterLoad: function(anchorLink, index){
                                        //playing the video
					$('video').get(0).play();
					//section 2
					if(index == 2){
						//moving the image
						$('#section1').find('img').delay(500).animate({
							left: '0%'
						}, 1500, 'easeOutExpo');

						$('#section1').find('p').first().fadeIn(1800, function(){
							$('#section1').find('p').last().fadeIn(1800);
						});

					}

					//section 3
					if(anchorLink == '3rdPage'){
						//moving the image
						$('#section2').find('img').delay(500).animate({
							left: '0%'
						}, 1500, 'easeOutExpo');

						$('#section2').find('p').first().fadeIn(1800, function(){
							$('#section2').find('p').last().fadeIn(1800);
						});
                                               $('#section2').find('#pantalla').delay(500).animate({
							left: '0%'
						}, 1500, 'easeOutExpo');
					}
                                        //section 4
					if(anchorLink == '4thpage'){
						//moving the image
						$('#section3').find('img').delay(500).animate({
							left: '0%'
						}, 1500, 'easeOutExpo');

						$('#section3').find('p').first().fadeIn(1800, function(){
							$('#section3').find('p').last().fadeIn(1800);
						});
					}
				}
			});

		});

