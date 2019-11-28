
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

<div id="newsupdate"><div class="flexslider" >
<ul class="slides" id="textanimate">
<li><img src="uploads/s1.jpg" width="100px" height="440px"></img></li>
<li><img src="uploads/indexa.jpg" width="100px" height="440px"></img></li>
<li><img src="uploads/indexb.jpg" width="100px" height="440px"></img></li>
<li><img src="uploads/indexc.jpg" width="100px" height="440px"><img></li>
<li><img src="uploads/alice.jpg" width="100px" height="440px"><img></li>
<li><img src="uploads/mark.jpg" width="100px" height="440px"><img></li>
<li><img src="uploads/indexd.jpg" width="100px" height="440px"><img></li>
</ul>
<br/>
</div>
</div>
<br/>

