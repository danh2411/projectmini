(function ($) {
    "use strict";

    /*----------------------------
	 jQuery MeanMenu
	------------------------------ */
    jQuery("nav#dropdown").meanmenu();
    /*----------------------------
	 jQuery myTab
	------------------------------ */
    $("#myTab a").on("click", function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
    $("#myTab3 a").on("click", function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
    $("#myTab4 a").on("click", function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
    $("#myTabedu1 a").on("click", function (e) {
        e.preventDefault();
        $(this).tab("show");
    });

    $("#single-product-tab a").on("click", function (e) {
        e.preventDefault();
        $(this).tab("show");
    });

    $('[data-toggle="tooltip"]').tooltip();

    $("#sidebarCollapse").on("click", function () {
        $("#sidebar").toggleClass("active");
    });
    // Collapse ibox function
    $("#sidebar ul li").on("click", function () {
        var button = $(this).find("i.fa.indicator-mn");
        button.toggleClass("fa-plus").toggleClass("fa-minus");
    });
    /*-----------------------------
		Menu Stick
	---------------------------------*/
    $(".sicker-menu").sticky({ topSpacing: 0 });

    $("#sidebarCollapse").on("click", function () {
        $("body").toggleClass("mini-navbar");
        SmoothlyMenu();
    });
    $(document).on("click", ".header-right-menu .dropdown-menu", function (e) {
        e.stopPropagation();
    });
    /*----------------------------
	 wow js active
	------------------------------ */
    new WOW().init();
    /*----------------------------
	 owl active
	------------------------------ */
    $("#owl-demo").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 4,
        /* transitionStyle : "fade", */ /* [This code for animation ] */
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>",
        ],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
    });
    /*----------------------------
	 price-slider active
	------------------------------ */
    $("#slider-range").slider({
        range: true,
        min: 40,
        max: 600,
        values: [60, 570],
        slide: function (event, ui) {
            $("#amount").val("£" + ui.values[0] + " - £" + ui.values[1]);
        },
    });
    $("#amount").val(
        "£" +
            $("#slider-range").slider("values", 0) +
            " - £" +
            $("#slider-range").slider("values", 1)
    );
    /*--------------------------
	 scrollUp
	---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: "linear",
        scrollSpeed: 900,
        animation: "fade",
    });

   
})(jQuery);

$(".dandev_insert_attach").click(function () {
	if ($(".list_attach").hasClass("show-btn") === false) {
		$(".list_attach").addClass("show-btn");
	}
	var _lastimg = jQuery(".dandev_attach_view li")
		.last()
		.find('input[type="file"]')
		.val();

	if (_lastimg != "") {
		var d = new Date();
		var _time = d.getTime();
		var _html = '<li id="li_files_' + _time + '" class="li_file_hide">';
		_html += '<div class="img-wrap">';
		_html += '<span class="close" onclick="DelImg(this)">×</span>';
		_html += ' <div class="img-wrap-box"></div>';
		_html += "</div>";
		_html += '<div class="' + _time + '">';
		_html +=
			'<input type="file" class="hidden"  onchange="uploadImg(this)" id="files_' +
			_time +
			'"   />';
		_html += "</div>";
		_html += "</li>";
		jQuery(".dandev_attach_view").append(_html);
		jQuery(".dandev_attach_view li")
			.last()
			.find('input[type="file"]')
			.click();
	} else {
		if (_lastimg == "") {
			jQuery(".dandev_attach_view li")
				.last()
				.find('input[type="file"]')
				.click();
		} else {
			if ($(".list_attach").hasClass("show-btn") === true) {
				$(".list_attach").removeClass("show-btn");
			}
		}
	}
});

function uploadImg(el) {
	var file_data = $(el).prop("files")[0];
	var type = file_data.type;
	var fileToLoad = file_data;

	var fileReader = new FileReader();

	fileReader.onload = function (fileLoadedEvent) {
		var srcData = fileLoadedEvent.target.result;

		var newImage = document.createElement("img");
		newImage.src = srcData;
		var _li = $(el).closest("li");
		if (_li.hasClass("li_file_hide")) {
			_li.removeClass("li_file_hide");
		}
		_li.find(".img-wrap-box").append(newImage.outerHTML);
	};
	fileReader.readAsDataURL(fileToLoad);
}

function DelImg(el) {
	jQuery(el).closest("li").remove();
}
