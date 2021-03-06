<!-- Committee-Modal Starts -->
<?php

if($mainvalue["data"]) 
{
  ?>
<div id="organizer-modal-<?php echo $i; ?>" class="speaker-modal modal fade eventime_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times; </button>
        <h4 class="modal-title">
        <?php echo $val["title_name"]?> <small><?php echo $val['committee_member_name'] ?></small> </h4>
        <?php if($val["description"]) echo '<h5>'.$val["description"].'</h5>'; ?>
        <?php if($val['category_name']) echo "<h5>".$val['category_name']."</h5>"; ?>
        <?php if($val['committee_member_emailid']){ ?>
          <h5><i class="fa fa-envelope-o" style="margin-right:5px;"></i><?php _e($val['committee_member_emailid']) ?></h5>
        <?php } ?>
      </div>
      <div class="modal-body">
        <img src="<?php echo $path.'/images/committee_member/profile/thumb/'.$val["committee_member_profile_img"] ?>" alt="img10"/>
      </div>
      <div class="speaker-modal-description mCustomScrollbar" data-mcs-theme="dark">
          <?php echo $val["committee_member_long_description"]; ?>
      </div>
      
    </div>
  </div>
</div>
<?php } ?>
<!-- /Committee-Modal Starts -->