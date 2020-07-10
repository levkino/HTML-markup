$(document).ready(function(){
	let checkboxes = $('section.meet .checkboxes input[type=checkbox]');
	let items = $('section.meet .meet__content .meet__item');

	function filterMeetItems(){
		let filtering = [];
		checkboxes.each(function(n,element){
			if($(element).is(":checked")){
				filtering.push($(element).val())
			}
		});
		items.removeClass("hidden");
		if(filtering.length > 0){
			items.each(function(n,element){
				let languages = $(element).data("languages").split(',');
				let hide = true;
				for(let f in filtering){
					if(languages.includes(filtering[f])) hide = false;
				}
				if(hide){
					$(element).addClass("hidden");
				}
			});
		}
	}

	checkboxes.change(filterMeetItems);
	filterMeetItems();
});