<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Actor $model */

$this->title = 'Update Actor: ' . $model->PersonID;
$this->params['breadcrumbs'][] = ['label' => 'Actors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PersonID, 'url' => ['view', 'PersonID' => $model->PersonID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
