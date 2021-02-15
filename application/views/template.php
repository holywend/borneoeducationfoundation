<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body id="page_top">

    <?php $this->load->view('_partials/navbar');?>
    <?php $this->load->view('_partials/parallax');?>
    <?php $this->load->view('_partials/child_profile');?>

    <div id="content-wrapper" class="container">
        <div id="section">
        </div>
    </div>

    <?php $this->load->view('_partials/footer'); ?>

<?php $this->load->view("_partials/scrolltop"); ?>
<?php $this->load->view("_partials/js"); ?>
</body>
</html>