<div class="site-menubar site-menubar-light">
  <div class="site-menubar-body">
    <div>
      <div>
        <?php
              $menu=getAll('menu',array('id_parents'=>'where/0','sort'=>'order/asc'))->result();
              // print_r($menu);
              $idp=GetValue('id_parents','menu',array('filez'=>'where/'.$this->uri->segment(1).'/'.$this->uri->segment(2)));
            ?>
        <ul class="site-menu" data-plugin="menu">
          <?php
                  foreach($menu as $isi){
                    // $isi->filez=str_replace('base_url()',base_url('admin/'),$isi->filez);
                    // $id_user = sessId();
                    $id_user = 1;
                    // die($id_user);
                    if(GetValue('view','users_permission',array('menu_id'=>'where/'.$isi->id,'user_id'=>'where/'.$id_user))=='1'){?>
                      <li class="site-menu-item">
                        <a href="<?php echo base_url('admin/').$isi->filez ?>">
                          <i class="<?php echo $isi->icon?>"></i> 
                          <?php echo $isi->title ?><?php if($isi->filez=='#'){?><span class="fa fa-chevron-down"></span><?php }?>
                        </a>
                        <?php if($isi->filez=='#'){?>
                          <ul class="nav child_menu">
                            <?php 
                              $submenu=getAll('menu',array('is_active'=>'where/Active', 'id_parents'=>'where/'.$isi->id,'sort'=>'order/asc'))->result();
                              foreach ($submenu as $sb){
                                if(GetValue('view','users_permission',array('menu_id'=>'where/'.$sb->id,'user_id'=>'where/'.$id_user))=='1'){?>
                                  <li>
                                    <a href="<?php echo base_url('admin/').$sb->filez ?>">
                                      <i class="<?php echo $sb->icon?>"></i> <?php echo $sb->title ?>
                                    </a>
                                  </li>    
                                <?php 
                                }
                              }
                            ?>
                          </ul>
                        <?php } ?>
                      </li>
                    <?php 
                    }
                    ?>
                  <?php
                  }
                  ?>
        </ul>
      </div>
    </div>
  </div>
</div>
