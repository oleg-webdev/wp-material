jQuery(document).ready(function ($){

	var Loaders = {
		bouncingAbsolute: '\
			<div class="loader-absolute">\
				<div class="preview-area">\
					<div class="spinner-jx">\
						<div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div>\
					</div>\
				</div>\
			</div>',
		bouncingStatic  : '\
			<div class="loader-static">\
					<div class="preview-area">\
						<div class="spinner-jx">\
							<div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div>\
						</div>\
					</div>\
				</div>',
		infiniteSpinner : '\
			<div class="loader-backdrop">\
				<div class="loader-infinite-spinner">\
					<div class="lt"></div><div class="rt"></div><div class="lb"></div><div class="rb"></div>\
				</div>\
			</div>'
	};


	$('.invoke-conversion').on('click', function(e) {

		var container = $('#convert-tables-section'),
				selectEncoding = $('#select-encoding-conversion').val();

		if (confirm("Are you sure? (This can take a while)") !== false) {
			container.append(Loaders.bouncingStatic);
			$.ajax({
				url    : ajaxurl,
				type   : "POST",
				data   : {
					do_the_conversion: true,
					action           : 'aa_func_20150827030852',
					set_encoding     : selectEncoding
				},
				success: function(data) {
					container.empty();
					container.append(data);
				},
				error  : function(jqXHR, textStatus, errorThrown) {
					$('#loader-static').remove();
					alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
				}
			});
		} else {
			return false;
		}
	});
});