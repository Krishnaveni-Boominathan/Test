<?php $this->load->view('header') ?>
<main role = 'main' class = 'col-md-9 ml-sm-auto col-lg-10 px-4'>
    <br>
    <?php echo form_open('Time/Result');?>
        <label for="text-input">From Time</label>
        <input type="text" id="fromtime" name="fromtime" value="" required=""><br><br>
        <label for="email-input">To Time</label>
        <input type="text" id="totime" name="totime" value=""><br>
        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Submit</button>
    <?php echo form_close();?>    <br><br>
    <a href = "<?php echo base_url('index.php/home'); ?>">Back</a>
</main>                      
                                        
                                   
                                
                               
                       