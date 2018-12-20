<div id="myBtnContainer">
  <button class="btn active" onclick="select_cat('all_meubel')"> Show all</button>
  <button class="btn" onclick="select_cat('office')"> Office Furniture</button>
  <button class="btn" onclick="select_cat('home')"> Hotel, Apartment & Residence Furniture</button>
  <button class="btn" onclick="select_cat('dormitory')"> Dormitory Furniture</button>
</div>

<div class="produk" id="all_meubel">
  <?php for($i=1;$i<5;$i++){?>
      <a href="images/services_2/meubel/office/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/meubel/office/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<8;$i++){?>
  <a href="images/services_2/meubel/home/<?=$i?>.jpg">
      <img src="images/services_2/meubel/home/<?=$i?>.jpg" alt="GUT" style="width:100%">
  </a>
  <?php } ?>

  <?php for($i=1;$i<1;$i++){?>
      <a href="images/services_2/meubel/dormitory/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/meubel/dormitory/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>



<div class="produk" id="office" style="display:none">
  <?php for($i=1;$i<5;$i++){?>
      <a href="images/services_2/meubel/office/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/meubel/office/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="home" style="display:none">
  <?php for($i=1;$i<8;$i++){?>
      <a href="images/services_2/meubel/home/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/meubel/home/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="dormitory" style="display:none">
  <?php for($i=1;$i<1;$i++){?>
      <a href="images/services_2/meubel/dormitory/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/meubel/dormitory/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>