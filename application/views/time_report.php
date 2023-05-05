<?php $this->load->view('header') ?>
<main role = 'main' class = 'col-md-9 ml-sm-auto col-lg-10 px-4'>
  <br><br>
  <a href = "<?php echo base_url('index.php/time'); ?>">Back</a>
  <?php
$ftime=$_POST['fromtime'];
$ttime=$_POST['totime'];
$fromtime = date('H:i', strtotime($ftime));
$totime = date('H:i', strtotime($ttime));
?>
<h4>Selected Report</h4>
<hr />
<table class = 'table table-striped table-sm'>
  <thead>
    <tr>
      <th>ID</th>
      <th>VisitorName</th>
      <th>MobileNumber</th>
      <th>Address</th>
      <th>Apartment</th>
      <th>Date</th>
      <th>EntryTime</th>
      <th>WhomtoMeet</th>
      <th>ReasontoMeet</th>
      <th>ExitTime</th>
    </tr>
  </thead>
<?php
count($reportdata);
if(count($reportdata)) :
$cnt=1;
foreach ($reportdata as $row) :
?>  
              
  <tr>
    <td><?php echo $cnt;?></td>     
    <td><?php  echo $row->VisitorName;?></td>
    <td><?php  echo $row->MobileNumber;?></td>
    <td><?php  echo $row->Address;?></td>
    <td><?php  echo $row->Apartment;?></td>
    <?php $timestamp = strtotime($row->Date); 
         $date = date('Y-m-d', $timestamp); ?>
    <td><?php echo $date ?></td> 
    <?php $time = date('H:i', strtotime($row->EntryTime));?>
    <td><?php  echo $time;?></td>
    <td><?php  echo $row->WhomtoMeet;?></td>
    <td><?php  echo $row->ReasontoMeet;?></td>
    <?php $time = date('H:i', strtotime($row->ExitTime));?>
    <td><?php  echo $time;?></td>
    <td><?php echo  anchor("Visitor/Details/{$row->id}",' ')?></td>
  </tr>
  <?php 
 $cnt++;
  endforeach;
  
  else : ?>
   <tr>
    <td colspan="12" style="text-align:center">No Record found</td>
    </tr>
  <?php
  endif;
  ?> 
 
</table>
</main>

