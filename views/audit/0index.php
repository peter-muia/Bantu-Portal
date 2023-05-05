<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Audits');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-index box box-primary">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $this->title ?></h3>
        </div>
        <div class="panel-body">
                <?php Pjax::begin(); ?>
                <div class="box-body table-responsive no-padding">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'layout' => "{items}\n{summary}\n{pager}",
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'model',
                            'action',
                            'unique_id',
                            'description',
                            'user.username',
                            'created_at:datetime',

                        ],
                    ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>