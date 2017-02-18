<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php  echo $form->label('fieldOne', t("Field #1 Title")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldOne', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo $form->text($view->field('fieldOne'), $fieldOne, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldOneContent', t("Field #1 Content")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldOneContent', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make('editor')->outputBlockEditModeEditor($view->field('fieldOneContent'), $fieldOneContent); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldTwo', t("Field #2 Title")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldTwo', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo $form->text($view->field('fieldTwo'), $fieldTwo, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldTwoContent', t("Field #2 Content")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldTwoContent', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make('editor')->outputBlockEditModeEditor($view->field('fieldTwoContent'), $fieldTwoContent); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldThree', t("Field #3 Title")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldThree', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo $form->text($view->field('fieldThree'), $fieldThree, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldThreeContent', t("Field #3 Content")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldThreeContent', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make('editor')->outputBlockEditModeEditor($view->field('fieldThreeContent'), $fieldThreeContent); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldFour', t("Field #4 Title")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldFour', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo $form->text($view->field('fieldFour'), $fieldFour, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldFourContent', t("Field #4 Content")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldFourContent', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make('editor')->outputBlockEditModeEditor($view->field('fieldFourContent'), $fieldFourContent); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldFive', t("Field #5 Title")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldFive', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo $form->text($view->field('fieldFive'), $fieldFive, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('fieldFiveContent', t("Field #5 Content")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('fieldFiveContent', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make('editor')->outputBlockEditModeEditor($view->field('fieldFiveContent'), $fieldFiveContent); ?>
</div>