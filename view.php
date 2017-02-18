<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>


<ul class="nav nav-tabs">
  <?php  if (isset($fieldOne) && trim($fieldOne) != "") { ?>  
  <li class="active">
    <a href="#filed_one_content_<?php echo $bID;?>" data-toggle="tab"><?php  echo h($fieldOne); ?></a>
  </li>
  <?php  } ?>

  <?php  if (isset($fieldTwo) && trim($fieldTwo) != "") { ?>
  <li>
    <a href="#filed_two_content_<?php echo $bID;?>" data-toggle="tab"><?php  echo h($fieldTwo); ?></a>
  </li>
  <?php  } ?>

  <?php  if (isset($fieldThree) && trim($fieldThree) != "") { ?>
  <li>
    <a  href="#filed_three_content_<?php echo $bID;?>" data-toggle="tab"><?php  echo h($fieldThree); ?></a>
  </li>
  <?php  } ?>
  <?php  if (isset($fieldFour) && trim($fieldFour) != "") { ?>
  <li>
    <a  href="#filed_four_content_<?php echo $bID;?>" data-toggle="tab"><?php  echo h($fieldFour); ?></a>
  </li>
  <?php  } ?>
  <?php  if (isset($fieldFive) && trim($fieldFive) != "") { ?>
  <li>
    <a href="#filed_five_content_<?php echo $bID;?>" data-toggle="tab"><?php  echo h($fieldFive); ?>s</a>
  </li>
  <?php  } ?>
</ul>

<div class="tab-content">
    <?php  if (isset($fieldOneContent) && trim($fieldOneContent) != "") { ?>
        <div id="filed_one_content_<?php echo $bID;?>" class="tab-pane fade in active">
            <?php  echo $fieldOneContent; ?>
        </div>
    <?php  } ?>

    <?php  if (isset($fieldTwoContent) && trim($fieldTwoContent) != "") { ?>
        <div id="filed_two_content_<?php echo $bID;?>" class="tab-pane fade">
            <?php  echo $fieldTwoContent; ?>
        </div>
    <?php  } ?>

    <?php  if (isset($fieldThreeContent) && trim($fieldThreeContent) != "") { ?>
        <div id="filed_three_content_<?php echo $bID;?>" class="tab-pane fade">
          <?php  echo $fieldThreeContent; ?>
        </div>
    <?php  } ?>

    <?php  if (isset($fieldFourContent) && trim($fieldFourContent) != "") { ?>
        <div id="filed_four_content_<?php echo $bID;?>" class="tab-pane fade">
          <?php  echo $fieldFourContent; ?>
        </div>
    <?php  } ?>

    <?php  if (isset($fieldFiveContent) && trim($fieldFiveContent) != "") { ?>
        <div id="filed_five_content_<?php echo $bID;?>" class="tab-pane fade">
          <?php  echo $fieldFiveContent; ?>
        </div>
    <?php  } ?>   
</div>



