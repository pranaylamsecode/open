//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function () {
	if (animating) return false;
	animating = true;

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	current_fs.hide();
	animating = false;
	//hide the current fieldset with style
});

$(".previous").click(function () {
	if (animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li")
		.eq($("fieldset").index(current_fs))
		.removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	current_fs.hide();
	animating = false;
	//hide the current fieldset with style
});

/* $(".previous").click(function () {
	if (animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//deactivate current step on progressbar using the index of current_fs
	$("#progressbar li")
		.eq($("fieldset").index(current_fs))
		.removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate(
		{ opacity: 0 },
		{
			step: function (now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring previous_fs from the left(50%)
				left = (1 - now) * 50 + "%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
					transform: "scale(" + scale + ")",
					position: "absolute",
				});
				previous_fs.css({ left: left, opacity: opacity });
			},
			duration: 800,
			complete: function () {
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: "easeInOutBack",
		}
	);
}); */

$(".submit").click(function () {
	return false;
});
