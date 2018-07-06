<!DOCTYPE html>
<html lang="en">
<head>
 
<div class="container" style="margin-top:5%">
  <h2 class="cont">My Profile</h2><br>         
  <table class="table">
  
    <?php 
    $s=$this->db->query("SELECT * from contact_us");
    $res = $s->result_array();
    ?><th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
    <?php
    foreach($res as $key=>$row)
    {
      $id = $row['id'];
    ?>
    <tbody>
      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['subject']; ?></td>
        <td><?php echo $row['message']; ?></td></tr>
        <!-- <td><a href="<?php //echo base_url() ?>/Show_contact_us/deleterecord/<?php echo $id ?>">Delete</a></td> -->
     
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>

<!-- ////////////////////////////////////////Start Model for Edit Record/////////////////////////////////////// -->



<style type="text/css">
  .h2{
    margin-top: 10%;
  }
 </style>