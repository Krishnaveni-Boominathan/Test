<?php $this->load->view('header') ?>
<main role = 'main' class = 'col-md-9 ml-sm-auto col-lg-10 px-4'>
  <h3>Add visitors</h3><br>
  <a href = "<?php echo base_url('index.php/visitor'); ?>">Back</a>
<form id="addForm" method="post">
       
            <label>Visitor Name</label>
            <input type="text"  name="visname" placeholder="Visitor Name"><br><br>
            <label>Mobile Number</label>
            <input type="text"  name="mobilenumber" placeholder="Mobile Number"><br><br>
            <label>Visitor Address</label>
            <input type="text"  name="address" placeholder="Visitor Address"><br><br>
            <label>Apartment no</label>
            <input type="text"  name="apartment" placeholder="Apartment no"><br><br>
            <label>Date</label>
            <input type="date"  name="date" placeholder="Date"><br><br>
            <label>Entry Time</label>
            <input type="text"  name="entime" placeholder="Time"><br><br>
            <label>Whom to Meet</label>
            <input type="text"  name="whomtomeet" placeholder="Whom to Meet"><br><br>
            <label>Reason to Meet</label>
      <textarea name="reasontomeet" placeholder="Reason to meet"></textarea><br><br>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    
</form>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>       
		$("#addForm").submit(function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('index.php/visitor/insert'); ?>",
				data: $("#addForm").serialize(),
				type: "post",
				success: function (data) {
					alert('Successfully Inserted');
					window.location.href = '<?php echo base_url("index.php/visitor"); ?>';
				},
				error: function () {
                    console.log(data);
					alert("error");
				}
			});
		});
	</script> 