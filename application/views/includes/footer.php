<script src="<?php echo base_url('assets/js/jquery-1.12.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

<script>
	//If user closes out of modal it will open the public page
	$('#loginModal').on('hidden.bs.modal', function () {
		//Have a way to know which public place they should be going to.
	  window.location = '<?php echo base_url('power/powerTrainingPublic');?>'
	});

	function checkLoginPower()
	{	
		var isLoggedIn = false;

		//Check if logged in already
		if(isLoggedIn)
		{
			window.location = '<?php echo base_url('power/powerTrainingPrivate');?>'
		}
		else
		{
			//if not logged in open modal
			$("#loginModal").modal()
		}

		
		
		//if modal login successful cahce or session login somehwhere and open private page
	}

	function checkLoginEntre()
	{	
		var isLoggedIn = true;

		//Check if logged in already
		if(isLoggedIn)
		{
			window.location = '<?php echo base_url('power/entreCurriculumPrivate');?>'
		}
		else
		{
			//if not logged in open modal
			$("#loginModal").modal()
		}

		
		
		//if modal login successful cahce or session login somehwhere and open private page
	}


</script>

</div>
</body>
</html>