jQuery(document).ready(function() {

	$(".subcategoria li").on('click', function(){
		var target=$(this).attr("data-target");
		var menu=$(this);

		if($("#"+target).hasClass('hide'))
		{
			var docs=$(".contenido-documentacion li");
			var subs=$(".subcategoria li");

			for(var i=0;i<docs.length;i++)
			{
				if(!$(docs[i]).hasClass('hide'))
				{
					$(docs[i]).addClass('hide')	
				}
			}

			for(var i=0;i<subs.length;i++)
			{
				if($(subs[i]).hasClass('active'))
				{
					$(subs[i]).removeClass('active')	
				}
			}

			$("#"+target).removeClass("hide")
			$(this).addClass('active');
			//console.log($("#"+target))
		}

	})
});