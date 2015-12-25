<?php $deliverable_name = "Homework 1 " ;
 if(isset($_GET['deliverable'])){ ?>
<div class="col-md-8">
<h2><?= $deliverable_name ?></h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>link of submission</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Hasan</td>
        <td>1101102@example.com</td>
        <td><a href="#">Submitted</a></td>
      </tr>
      <tr>
        <td>HAtem</td>
        <td>1103302@example.com</td>
        <td><a href="#">Not Submitted</a></td>
      </tr>
   
     
    </tbody>
  </table>
</div>

<?php } ?>
