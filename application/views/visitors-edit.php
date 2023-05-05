<?php $this->load->view('header') ?>
<main role = 'main' class = 'col-md-9 ml-sm-auto col-lg-10 px-4'>
<h3>Edit visitors</h3><br>
<a href = "<?php echo base_url('index.php/visitor'); ?>">Back</a>
<form id="editForm" method="post" >
       
            <label>Visitor Name</label>
            <input type="text"  name="visname" value="<?php echo $data->VisitorName;?>"><br><br>
            <label>Mobile Number</label>
            <input type="text"  name="mobilenumber" value="<?php echo $data->MobileNumber;?>"><br><br>
            <label>Visitor Address</label>
            <input type="text"  name="address" value="<?php echo $data->Address;?>"><br><br>
            <label>Apartment no</label>
            <input type="text"  name="apartment" value="<?php echo $data->Apartment;?>"><br><br>
             <label>Date</label>
           <!-- <input type="date"  name="date" value="<?php //echo $data->Date;?>"><br><br> -->
            <?php
    $mydate_value = date('Y-m-d', strtotime($data->Date));
    echo form_input(array(
        'name' => 'date',
        'type' => 'date',
        'value' => set_value('date', $mydate_value)
    ));
?><br><br>
            <label>Time</label>
            <input type="text"  name="time" value="<?php echo $data->EntryTime;?>"><br><br>
            <label>Whom to Meet</label>
            <input type="text"  name="whomtomeet" value="<?php echo $data->WhomtoMeet;?>"><br><br>
            <label>Reason to Meet</label>
      <textarea name="reasontomeet"><?php echo $data->ReasontoMeet;?></textarea><br><br>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    
</form>
  </main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>
		$("#editForm").submit(function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('index.php/visitor/update/'.$data->id)?>",
				data: $("#editForm").serialize(),
				type: "post",
				success: function (data) {
					alert('Successfully updated');
					window.location.href = '<?php echo base_url("index.php/visitor"); ?>';
				},
				error: function () {
					alert("error");
				}
			});
		});
	</script>