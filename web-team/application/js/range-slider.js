/*----------------------------------
	//------ RANGE SLIDER ------//
	-----------------------------------*/
$(".slider-range").slider({
	range: true,
	min: 4000,
	max: 100000,
	step: 1000,
	values: [50000, 120000],
	slide: function (event, ui) {
		$(".slider_amount").val("$" + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - $" + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
	}
});
$(".slider_amount").val("KM: " + $(".slider-range").slider("values", 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - " + $(".slider-range").slider("values", 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
