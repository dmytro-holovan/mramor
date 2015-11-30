<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Cars */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Машины', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelSS' => $modelSS
    ]) ?>

</div>
