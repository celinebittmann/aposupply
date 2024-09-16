  <div class="col-4">
    <div class="card h-100">
    <?php echo "<img height='auto' width='auto' src='data:image/jpeg;base64,".base64_encode($row['bild'])." '>"  ?> 
      <div class="card-body">
        <div class="row">
          <div class="col">
          <h5 class="card-title">
            <?= $row['name']; ?>
          </h5>
          </div>
          <div class="col">
          <h5 class="card-title"><?php echo $row['preis'] ?></h5>
          </div>
        </div>
        <p class="card-text"><?php echo $row['beschreibung'] ?></p>
      </div>
  
  
      <div class="card-footer">
        <a button class="btn btn-primary btn-sm"  href="templates/detail.php">Detail</button> </a>
        &nbsp;
        <a button class="btn btn-success btn-sm"  href="functions/korb2.php?zumKorb=<?=$row['p_id'] ?>">In den Warenkorb</button> </a>
        &nbsp;&nbsp;

      </div>
    </div>
  </div>
