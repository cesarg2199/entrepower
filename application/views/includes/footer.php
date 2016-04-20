<script src="<?php echo base_url('assets/js/jquery-1.12.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

<script>
	

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