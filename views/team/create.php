<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Team */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Team',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Teams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>