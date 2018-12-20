<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <button class="btn btn-success active" onclick="select_cat('all')"> Show all</button>
  <button class="btn btn-success " onclick="select_cat('kayu')"> Kayu</button>
  <button class="btn btn-success " onclick="select_cat('pintu')"> Pintu & Jendela</button>
  <button class="btn btn-success " onclick="select_cat('kusen')"> Kusen</button>
  <button class="btn btn-success " onclick="select_cat('tangga')"> Tangga & Railing</button>
  <button class="btn btn-success " onclick="select_cat('list')"> List Profil</button>
  <button class="btn btn-success " onclick="select_cat('cat')"> Cat tembok indoor & outdoor</button>
  <button class="btn btn-success " onclick="select_cat('plywood')"> Plywood</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="produk" id="all">
  <?php for($i=1;$i<15;$i++){?>
      <a href="images/services_2/material/kayu/<?=$i?>.jpeg">
        <img alt="caption for image 1" src="images/services_2/material/kayu/<?=$i?>.jpeg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<7;$i++){?>
  <a href="images/services_2/material/pintu/<?=$i?>.jpeg">
      <img src="images/services_2/material/pintu/<?=$i?>.jpg" alt="GUT" style="width:100%">
  </a>
  <?php } ?>

  <?php for($i=1;$i<3;$i++){?>
      <a href="images/services_2/material/kusen/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/kusen/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<6;$i++){?>
      <a href="images/services_2/material/tangga/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/tangga/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<26;$i++){?>
      <a href="images/services_2/material/list/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/list/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<4;$i++){?>
      <a href="images/services_2/material/cat/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/cat/<?=$i?>.jpg"/>
      </a>
  <?php } ?>

  <?php for($i=1;$i<9;$i++){?>
      <a href="images/services_2/material/plywood/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/plywood/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>







<div class="produk" id="kayu" style="display:none">
  <?php for($i=1;$i<15;$i++){?>
      <a href="images/services_2/material/kayu/<?=$i?>.jpeg">
        <img alt="caption for image 1" src="images/services_2/material/kayu/<?=$i?>.jpeg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="pintu" style="display:none">
  <?php for($i=1;$i<7;$i++){?>
      <a href="images/services_2/material/pintu/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/pintu/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="kusen" style="display:none">
  <?php for($i=1;$i<3;$i++){?>
      <a href="images/services_2/material/kusen/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/kusen/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="tangga" style="display:none">
  <?php for($i=1;$i<6;$i++){?>
      <a href="images/services_2/material/tangga/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/tangga/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="list" style="display:none">
  <?php for($i=1;$i<26;$i++){?>
      <a href="images/services_2/material/list/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/list/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="cat" style="display:none">
  <?php for($i=1;$i<4;$i++){?>
      <a href="images/services_2/material/cat/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/cat/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>

<div class="produk" id="plywood" style="display:none">
  <?php for($i=1;$i<9;$i++){?>
      <a href="images/services_2/material/plywood/<?=$i?>.jpg">
        <img alt="caption for image 1" src="images/services_2/material/plywood/<?=$i?>.jpg"/>
      </a>
  <?php } ?>
</div>
