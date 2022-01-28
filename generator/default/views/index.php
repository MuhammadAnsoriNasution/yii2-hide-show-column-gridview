<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
echo "<?php\n";
?>
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(ltrim(preg_replace('/[A-Z]/', ' $0', str_replace("Controller","",StringHelper::basename($generator->controllerClass))))) ?>;
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);
$this->registerJsFile(
    '@web/js/hideshow.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
);
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
    <div id="ajaxCrudDatatable">
        <?="<?="?>GridView::widget([
            'id'=>'crud-datatable-<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>',
            'dataProvider' => $dataProvider,
            'filterModel' => null,//$searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
                //['content'=>
                //    Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'],
                //    ['role'=>'modal-remote','title'=> 'Create new <?= Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>','class'=>'btn btn-default']).
                //    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                //    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                //    '{toggleData}'.
                //    '{export}'
                //],
            ],    
            'export' => [
                'icon' => 'bi bi-file-arrow-down icon-size-20',
                'options' => ['class' => 'btn btn-primary mr-1', 'style' => 'padding: 3px 4px']
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                //'type' => 'primary', 
                //'heading' => '<i class="glyphicon glyphicon-list"></i> <?= Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?> listing',
                'before'=>$this->render('filter'),
                //'after'=>BulkButtonWidget::widget([
                //            'buttons'=>Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All',
                //                ["bulk-delete"] ,
                //                [
                //                    "class"=>"btn btn-danger btn-xs",
                //                    'role'=>'modal-remote-bulk',
                //                   'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                //                    'data-request-method'=>'post',
                //                    'data-confirm-title'=>'Are you sure?',
                //                    'data-confirm-message'=>'Are you sure want to delete this item'
                //                ]),
                //        ]).                        
                //        '<div class="clearfix"></div>',
            ],
            'emptyText' => 'Data Tidak Ditemukan',
            'emptyTextOptions' => ['class' => 'text-danger text-center'],
            'showFooter' => false
        ])<?="?>\n"?>
    </div>
</div>
<?='<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
    "options" => [
        "tabindex" => false, // important for Select2 to work properly
    ],
    "size" => "modal-lg"
])?>'."\n"?>
<?='<?php Modal::end(); ?>'?>

