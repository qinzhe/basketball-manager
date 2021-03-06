<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Match */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Match',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
