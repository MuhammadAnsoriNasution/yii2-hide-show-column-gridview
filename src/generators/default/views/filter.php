<?php
use yii\helpers\StringHelper;
echo "<?php\n";

/* @var $this yii\web\View */

$modelClass = StringHelper::basename($generator->modelClass);
$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
$actionParams = $generator->generateActionParams();

$model = new $generator->modelClass();
$attributeLabels = $model->attributeLabels()

?>
use kartik\select2\Select2;
use yii\helpers\Url;
?>
<div class="row">
    <div class="col-lg-7 mb-3">
        <h1><?= ltrim(preg_replace('/[A-Z]/', ' $0', str_replace("Controller","",StringHelper::basename($generator->controllerClass))));?></h1>
        <div class="row mb-n3">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Unit</label>
                    <div class="col-lg-9">
                    <?="<?=";?> Select2::widget([
                            'name' => 'kv-type-01',
                            'data' => [1 => "First", 2 => "Second", 3 => "Third", 4 => "Fourth", 5 => "Fifth"],
                            'options' => [
                                'placeholder' => 'Select a type ...',
                                'options' => [
                                    3 => ['disabled' => true],
                                    4 => ['disabled' => true],
                                ]
                            ],
                        ]);
                        ?>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-9 mb-2 mr-n3">
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="col-lg-3 ">
                            <a type="submit" class="btn btn-primary btn-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Tahun</label>
                    <div class="ml-2 col-lg-7">
                    <?="<?=";?> Select2::widget([
                            'name' => 'kv-type-01',
                            'data' => [2010 => 2010, 2011 => 2011, 2012 => 2012,],
                            'options' => [
                                'placeholder' => 'Select a type ...',
                                'options' => [
                                    3 => ['disabled' => true],
                                    4 => ['disabled' => true],
                                ]
                            ],
                        ]);
                        ?>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <label for="" class=" lg-form-label">Periode: </label>
                        </div>
                        <div class="col-lg-9">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <label for="" class=" lg-form-label">s/d: </label>
                    </div>
                    <div class="col-lg-10">
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 mt-2">
        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="progress " style="height: 30px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between font-weight-bold">
                    <span>Terbayar</span>
                    <span>AKO</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Rp. 0</span>
                    <span>Rp. 0</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="progress " style="height: 30px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between font-weight-bold">
                    <span>Terbayar</span>
                    <span>AKO</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Rp. 0</span>
                    <span>Rp. 0</span>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 d-flex justify-content-end">
                <!-- <div class="row"> -->
                <div class="col-xs-3 mr-1">
                    <a class="btn btn-success" role="modal-remote" href="<?="<?=";?> Url::to(['create']) ?>">Tambah Data</a>
                </div>
                <div class="col-xs-2">
                    <a class="btn btn-primary mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-arrow-up" viewBox="0 0 16 16">
                            <path d="M8 11a.5.5 0 0 0 .5-.5V6.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 .5.5z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>
                    </a>
                </div>
                <div class="col-xs-2">
                    <!-- <button class="btn btn-primary mr-1 dropdown-toggle" id="w2-button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-arrow-down" viewBox="0 0 16 16">
                            <path d="M8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>
                    </button>
                     -->
                     <?= '{export}'?>
                </div>
                <div class="col-xs-2">
                    <a class="btn btn-primary mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                        </svg>
                    </a>
                </div>
                <div class="col-xs-12">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Kolom
                        </button>
                        <div class="dropdown-menu dropdown-menu-right max-height-200">
                            <?php
                            foreach ($attributeLabels as $key =>  $name) {   
                            ?>
                                <button class="dropdown-item toggle-vis" data-column=".<?=$key?>">
                                    <input type="checkbox"> <?=$name?>
                                </button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>