$('.progressBarContainer div').click(function () {
	clearInterval(tick);
	var goToThisIndex = $(this).find('span').data('slickIndex');
	$('.single-item').slick('slickGoTo', goToThisIndex, false);
	startProgressbar();
});

//ticking machine
var percentTime;
var tick;
var time = 1;
var progressBarIndex = 0;

var progress = $('.inProgress');

$('.progressBarContainer .progressBar').each(function (index) {
	var progress = "<div class='inProgress inProgress" + index + "'></div>";
	$(this).html(progress);
});

function startProgressbar() {
	resetProgressbar();
	percentTime = 0;
	tick = setInterval(interval, 30);
}

function interval() {
	if (
		$(
			'.hero__slider .slick-track div[data-slick-index="' +
				progressBarIndex +
				'"]'
		).attr('aria-hidden') === 'true'
	) {
		progressBarIndex = $(
			'.hero__slider .slick-track div[aria-hidden="false"]'
		).data('slickIndex');

		console.log(progressBarIndex);

		if (progressBarIndex == 1) {
			$('.inProgress0').addClass('on');
			$('.inProgress1').removeClass('on');
		} else if (progressBarIndex == 2) {
			$('.inProgress0').addClass('on');
			$('.inProgress1').addClass('on');
		} else if (progressBarIndex == 0) {
			$('.inProgress0').removeClass('on');
			$('.inProgress1').removeClass('on');
		}
		startProgressbar();
	} else {
		percentTime += 1 / (time + 2);
		$('.inProgress' + progressBarIndex).css({
			width: percentTime + '%',
		});
		if (percentTime >= 100) {
			$('.single-item').slick('slickNext');

			//console.log(progressBarIndex);

			if (progressBarIndex == 0) {
				$('.inProgress0').addClass('on');
			} else if (progressBarIndex == 1) {
				$('.inProgress0').addClass('on');
				$('.inProgress1').addClass('on');
			} else if (progressBarIndex == 2) {
				$('.inProgress0').removeClass('on');
				$('.inProgress1').removeClass('on');
			}

			progressBarIndex++;

			if (progressBarIndex > 2) {
				progressBarIndex = 0;
			}
			startProgressbar();
		}
	}
}

function resetProgressbar() {
	$('.inProgress').css({
		width: 0 + '%',
	});
	clearInterval(tick);
}
startProgressbar();
// End ticking machine