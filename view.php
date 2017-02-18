<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>


<ul class="nav nav-tabs">

  <?php  if (isset($fieldOne) && trim($fieldOne) != "") { ?>  
  <li class="nav-item">
    <a class="nav-link active" href="#"><?php  echo h($fieldOne); ?></a>
  </li>
  <?php  } ?>

  <?php  if (isset($fieldTwo) && trim($fieldTwo) != "") { ?>
  <li class="nav-item">
    <a class="nav-link" href="#"><?php  echo h($fieldTwo); ?></a>
  </li>
  <?php  } ?>

  <?php  if (isset($fieldThree) && trim($fieldThree) != "") { ?>
  <li class="nav-item">
    <a class="nav-link" href="#"><?php  echo h($fieldThree); ?></a>
  </li>
  <?php  } ?>
  <?php  if (isset($fieldFour) && trim($fieldFour) != "") { ?>
  <li class="nav-item">
    <a class="nav-link" href="#"><?php  echo h($fieldFour); ?></a>
  </li>
  <?php  } ?>
  <?php  if (isset($fieldFive) && trim($fieldFive) != "") { ?>
  <li class="nav-item">
    <a class="nav-link" href="#"><?php  echo h($fieldFive); ?></a>
  </li>
  <?php  } ?>
</ul>



<?php  if (isset($fieldOne) && trim($fieldOne) != "") { ?>
    <?php  echo h($fieldOne); ?><?php  } ?>
<?php  if (isset($fieldOneContent) && trim($fieldOneContent) != "") { ?>
    <?php  echo $fieldOneContent; ?><?php  } ?>
<?php  if (isset($fieldTwo) && trim($fieldTwo) != "") { ?>
    <?php  echo h($fieldTwo); ?><?php  } ?>
<?php  if (isset($fieldTwoContent) && trim($fieldTwoContent) != "") { ?>
    <?php  echo $fieldTwoContent; ?><?php  } ?>
<?php  if (isset($fieldThree) && trim($fieldThree) != "") { ?>
    <?php  echo h($fieldThree); ?><?php  } ?>
<?php  if (isset($fieldThreeContent) && trim($fieldThreeContent) != "") { ?>
    <?php  echo $fieldThreeContent; ?><?php  } ?>
<?php  if (isset($fieldFour) && trim($fieldFour) != "") { ?>
    <?php  echo h($fieldFour); ?><?php  } ?>
<?php  if (isset($fieldFourContent) && trim($fieldFourContent) != "") { ?>
    <?php  echo $fieldFourContent; ?><?php  } ?>
<?php  if (isset($fieldFive) && trim($fieldFive) != "") { ?>
    <?php  echo h($fieldFive); ?><?php  } ?>
<?php  if (isset($fieldFiveContent) && trim($fieldFiveContent) != "") { ?>
    <?php  echo $fieldFiveContent; ?><?php  } ?>