<?php $this->load->view('header') ?>
<main role = 'main' class = 'col-md-9 ml-sm-auto col-lg-10 px-4'>
<html>
    <head>List</head>
    <body>
        <h4>List of users</h4>
        <a href="<?php echo base_url('index.php/visitor/add'); ?>">Add new user</a><br><br>
        <a href = "<?php echo base_url('index.php/home'); ?>">Back</a>
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
                    <th>Exit Time</th>
                    <th>WhomtoMeet</th>
                    <th>ReasontoMeet</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <tbody id="listRecords">
            </tbody>
        </table>
</main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/visitor/show_list'); ?>",
                data: $(this).serialize(),
                success: function (data) {
                    console.log(data);
                    $("#listRecords").html(data);
                }
            });
        });
    </script>
    </body>
</html>