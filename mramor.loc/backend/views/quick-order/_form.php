<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\QuickOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quick-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone_num')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
