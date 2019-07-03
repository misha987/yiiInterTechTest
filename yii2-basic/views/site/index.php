<?php

/* @var $this yii\web\View */

use app\assets\AppAsset;
use app\models\MainPage;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);

$this->title = 'My Yii Application';
?>

<? $arrDogs = $model->getDogs(); ?>

<? $form = ActiveForm::begin([
  'id' => 'dogs-form',
  'layout' => 'horizontal',
  'options' => ['data-count' => count($arrDogs) > 0 ? max(array_column($arrDogs, 'id')) : 0],
  'fieldConfig' => [
    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    'labelOptions' => ['class' => 'col-lg-1 control-label'],
],
]); ?>

  <div class="form-row">
    <div class="form-group col-md-3">
        <label>ID</label>
    </div>
    <div class="form-group col-md-3">
        <label>Owner Name</label>
  </div>
  <div class="form-group col-md-3">
        <label>Name</label>
  </div>
  <div class="form-group col-md-3">
        <label>Age</label>
  </div>
</div>
<?foreach($arrDogs as $dog){ ?>
  <div class="form-row">
    <div class="form-group col-md-3">
        <input type="text" name="dogs[<?= $dog->getAttribute('id') ?>][id]" class="form-control" placeholder="ID" value="<?= $dog->getAttribute('id') ?>" readonly>
    </div>
    <div class="form-group col-md-3">
      <input type="text" name="dogs[<?= $dog->getAttribute('id') ?>][owner]" class="form-control" placeholder="Owner Name" value="<?= $dog->getAttribute('owner_name') ?>">
  </div>
  <div class="form-group col-md-3">
      <input type="text" name="dogs[<?= $dog->getAttribute('id') ?>][name]" class="form-control" placeholder="Name" value="<?= $dog->getAttribute('name') ?>">
  </div>
  <div class="form-group col-md-3">
      <input type="text" name="dogs[<?= $dog->getAttribute('id') ?>][age]" class="form-control dog-el" placeholder="Age" value="<?= $dog->getAttribute('age') ?>">
      <button type="submit" class="btn btn-danger mb-2 for-btn-remove" data-elem_id="<?= $dog->getAttribute('id') ?>">Delete</button>
  </div>
</div>
<? } ?>
<div class="buttons">
    <input type="hidden" id="inp_delete" name="remove_id">
    <button type="submit" class="btn btn-primary mb-2">Confirm changes</button>
  <button type="submit" class="add_dog btn btn-primary mb-2">Add dog</button>
</div>
<? ActiveForm::end(); ?>
