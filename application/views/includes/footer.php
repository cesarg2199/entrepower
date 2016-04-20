<script src="<?php echo base_url('assets/js/jquery-1.12.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/magnific.js');?>"></script>
<script>

	$(document).ready(function() {
	$('.popup').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
		});
	});

	$('#myCarouselM').carousel({
                interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length-1);
                var id = parseInt(id);
                $('#myCarouselM').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarouselM').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
          		$('#carousel-text').html($('#slide-content-'+id).html());
        });
	

	function verifyContactMessage()
	{
		//verify contact message is filled otu
	}

	function checkLoginPower()
	{	
		var isLoggedIn = <?php if($this->session->userdata('isLoggedIn')) { echo$this->session->userdata('isLoggedIn');} else { echo "false"; }?>;

		//Check if logged in already
		if(isLoggedIn)
		{
			window.location = '<?php echo base_url('power/powerTrainingPrivate');?>';
		}
		else
		{
			//if not logged in open modal
			$("#loginModalPower").modal();
		}
	}

	function checkLoginEntre()
	{	
		var isLoggedIn = <?php if($this->session->userdata('isLoggedIn')) { echo$this->session->userdata('isLoggedIn');} else { echo "false"; }?>;

		//Check if logged in already
		if(isLoggedIn)
		{
			window.location = '<?php echo base_url('power/entreCurriculumPrivate');?>';
		}
		else
		{
			//if not logged in open modal
			$("#loginModalEntre").modal();
		}
	}

	//If user closes out of modal it will open the public page
	$('#loginModalPower').on('hidden.bs.modal', function () {
		//Have a way to know which public place they should be going to.
	  window.location = '<?php echo base_url('power/powerTrainingPublic');?>'
	});
	

	//If user closes out of modal it will open the public page
	$('#loginModalEntre').on('hidden.bs.modal', function () {
		//Have a way to know which public place they should be going to.
	  window.location = '<?php echo base_url('power/entreCurriculumPublic');?>'
	});
</script>

</div>
</body>
</html>