
<link rel="stylesheet" type="text/css" href="textanimation/style-style.css">
<script src="textanimation/jquery_002.js"></script>
<script src="textanimation/jquery_003.js"></script>
 <script>
	
	  // When the document loads do everything inside here ...
	  $(document).ready(function(){
		
		// When a link is clicked
//		$("a.tab").click(function () {
			
			
			// switch all tabs off
		//	$(".active").removeClass("active");
			
			// switch this tab on
		//	$(this).addClass("active");
			
			// slide all content up
		//	$(".content").slideUp();
			
			// slide this content up
		//	var content_show = $(this).attr("title");
		//	$("#"+content_show).slideDown();
//return false;

		  
	//	});

  $('.flexslider').flexslider({
 animation: "fade"
  });
  $('.tooltip').tooltipster({
		animation: 'grow',
		position:'bottom-left',
                offsetY:-5,
                maxWidth: 300,
                theme: '.tooltipster-light',
		interactive:true,
		content:'' //$(this).parent().find('p').html()
	
	});	
	  });
  </script>

<div id="newsupdate"><div class="flexslider">
<ul class="slides" id="textanimate">
<li>Welcome to kituro high school</li>
<li>a centre for academic excellence and discipline</li>
<li>we are thankful for your support parents & society at large <i class="fa fa-thumbs-up" id="thumbs"></i></li>
<li class="flex-active-slide" ><em id="opening-closing-dates">school 3rd term closing day:&nbsp;&nbsp;21/11/2016</em></li>
<li><em id="opening-closing-dates">school 1st term opening day:&nbsp;&nbsp;5/01/2017</em></li>
<li>Contact us 020 678 4567</li>
</ul>
<br/>
</div>
</div>
<br/>

