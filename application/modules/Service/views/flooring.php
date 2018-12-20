<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <button class="btn btn-success active" onclick="select_cat('all_floor')"> Show all</button>
  <button class="btn btn-success " onclick="select_cat('rubber')"> Rubber</button>
  <button class="btn btn-success " onclick="select_cat('wpc')"> WPC</button>
  <button class="btn btn-success " onclick="select_cat('vinyl')"> Vinyl</button>
  <button class="btn btn-success " onclick="select_cat('keramik')"> Keramik</button>
  <button class="btn btn-success " onclick="select_cat('marmer')"> Marmer & Granit</button>
  <button class="btn btn-success " onclick="select_cat('cat')"> Karpet</button>
  <button class="btn btn-success " onclick="select_cat('parkit')"> Parkit</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="produk" id="all_floor">
  <?php for($i=1;$i<9;$i++){?>
      <a href="images/services_2/flooring/rubber/<?=$i?>.jpeg">
        <img alt="caption for image 1" src="images/services_2/flooring/rubber/<?=$i?>.jpeg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<10;$i++){?>
  <a href="images/services_2/flooring/wpc/<?=$i?>.jpeg">
      <img src="images/services_2/flooring/wpc/<?=$i?>.jpg" alt="GUT" style="width:100%">
  </a>
  <?php } ?>

  <?php for($i=1;$i<4;$i++){?>
      <a href="images/services_2/flooring/vinyl/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/vinyl/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<5;$i++){?>
      <a href="images/services_2/flooring/keramik/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/keramik/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<14;$i++){?>
      <a href="images/services_2/flooring/marmer/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/marmer/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<6;$i++){?>
      <a href="images/services_2/flooring/karpet/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/karpet/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<6;$i++){?>
      <a href="images/services_2/flooring/parkit/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/parkit/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>







<div class="produk" id="rubber" style="display:none">
  <?php for($i=1;$i<9;$i++){?>
      <a href="images/services_2/flooring/rubber/<?=$i?>.jpeg">
        <img alt="caption for image 1" src="images/services_2/flooring/rubber/<?=$i?>.jpeg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="wpc" style="display:none">
  <?php for($i=1;$i<45;$i++){?>
      <a href="images/services_2/flooring/wpc/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/wpc/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="vinyl" style="display:none">
  <?php for($i=1;$i<4;$i++){?>
      <a href="images/services_2/flooring/vinyl/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/vinyl/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="keramik" style="display:none">
  <?php for($i=1;$i<5;$i++){?>
      <a href="images/services_2/flooring/keramik/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/keramik/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="marmer" style="display:none">
  <?php for($i=1;$i<14;$i++){?>
      <a href="images/services_2/flooring/marmer/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/marmer/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="karpet" style="display:none">
  <?php for($i=1;$i<1;$i++){?>
      <a href="images/services_2/flooring/karpet/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/karpet/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="parkit" style="display:none">
  <?php for($i=1;$i<6;$i++){?>
      <a href="images/services_2/flooring/parkit/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/flooring/parkit/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>
