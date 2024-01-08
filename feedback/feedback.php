<?php include('inc/header.php') ?>


<?php
$sql = 'select * from feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

// var_dump($feedback);
?>

<h2>Passed Feedback</h2>


<?php if (empty($feedback)): ?>
  <p class="lead mt-3">No Feed Back Avaliable</p>
<?php endif; ?>


<?php foreach ($feedback as $item): ?>



  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body'] ?>
      <div class="text-secondary mt-2">By
        <?php echo $item['name']; ?> ON <?PHP ECHO $item['date']; ?>
      </div>
    </div>
  </div>
<?php endforeach ?>


<?php include('inc/footer.php') ?>