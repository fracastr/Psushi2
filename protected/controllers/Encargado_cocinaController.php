<?php

class Encargado_cocinaController extends Controller
{
	
	
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
		
	public $layout='//layouts/column1';		
		/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
						
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
						
		);
	}
	
		/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','export','import','editable','toggle',),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
		
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		
		if(isset($_GET['asModal'])){
			$this->renderPartial('view',array(
				'model'=>$this->loadModel($id),
			));
		}
		else{
						
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
			
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
				
		$model=new Encargado_cocina;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Encargado_cocina']))
		{
			$transaction = Yii::app()->db->beginTransaction();
			try{
				$messageType='warning';
				$message = "There are some errors ";
				$model->attributes=$_POST['Encargado_cocina'];
				//$uploadFile=CUploadedFile::getInstance($model,'filename');
				if($model->save()){
					$messageType = 'success';
					$message = "<strong>Well done!</strong> You successfully create data ";
					/*
					$model2 = Encargado_cocina::model()->findByPk($model->RUT_PERSONAL);						
					if(!empty($uploadFile)) {
						$extUploadFile = substr($uploadFile, strrpos($uploadFile, '.')+1);
						if(!empty($uploadFile)) {
							if($uploadFile->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'encargado_cocina'.DIRECTORY_SEPARATOR.$model2->RUT_PERSONAL.DIRECTORY_SEPARATOR.$model2->RUT_PERSONAL.'.'.$extUploadFile)){
								$model2->filename=$model2->RUT_PERSONAL.'.'.$extUploadFile;
								$model2->save();
								$message .= 'and file uploded';
							}
							else{
								$messageType = 'warning';
								$message .= 'but file not uploded';
							}
						}						
					}
					*/
					$transaction->commit();
					Yii::app()->user->setFlash($messageType, $message);
					$this->redirect(array('view','id'=>$model->RUT_PERSONAL));
				}				
			}
			catch (Exception $e){
				$transaction->rollBack();
				Yii::app()->user->setFlash('error', "{$e->getMessage()}");
				//$this->refresh();
			}
			
		}

		$this->render('create',array(
			'model'=>$model,
					));
		
				
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Encargado_cocina']))
		{
			$messageType='warning';
			$message = "There are some errors ";
			$transaction = Yii::app()->db->beginTransaction();
			try{
				$model->attributes=$_POST['Encargado_cocina'];
				$messageType = 'success';
				$message = "<strong>Well done!</strong> You successfully update data ";

				/*
				$uploadFile=CUploadedFile::getInstance($model,'filename');
				if(!empty($uploadFile)) {
					$extUploadFile = substr($uploadFile, strrpos($uploadFile, '.')+1);
					if(!empty($uploadFile)) {
						if($uploadFile->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'encargado_cocina'.DIRECTORY_SEPARATOR.$model->RUT_PERSONAL.DIRECTORY_SEPARATOR.$model->RUT_PERSONAL.'.'.$extUploadFile)){
							$model->filename=$model->RUT_PERSONAL.'.'.$extUploadFile;
							$message .= 'and file uploded';
						}
						else{
							$messageType = 'warning';
							$message .= 'but file not uploded';
						}
					}						
				}
				*/

				if($model->save()){
					$transaction->commit();
					Yii::app()->user->setFlash($messageType, $message);
					$this->redirect(array('view','id'=>$model->RUT_PERSONAL));
				}
			}
			catch (Exception $e){
				$transaction->rollBack();
				Yii::app()->user->setFlash('error', "{$e->getMessage()}");
				// $this->refresh(); 
			}

			$model->attributes=$_POST['Encargado_cocina'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RUT_PERSONAL));
		}

		$this->render('update',array(
			'model'=>$model,
					));
		
			}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		/*
		$dataProvider=new CActiveDataProvider('Encargado_cocina');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		*/
		
		$model=new Encargado_cocina('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Encargado_cocina']))
			$model->attributes=$_GET['Encargado_cocina'];

		$this->render('index',array(
			'model'=>$model,
					));
		
			}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		
		$model=new Encargado_cocina('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Encargado_cocina']))
			$model->attributes=$_GET['Encargado_cocina'];

		$this->render('admin',array(
			'model'=>$model,
					));
		
			}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Encargado_cocina the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Encargado_cocina::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Encargado_cocina $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='encargado-cocina-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionExport()
    {
        $model=new Encargado_cocina;
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['Encargado_cocina']))
			$model->attributes=$_POST['Encargado_cocina'];

		$exportType = $_POST['fileType'];
        $this->widget('ext.heart.export.EHeartExport', array(
            'title'=>'List of Encargado_cocina',
            'dataProvider' => $model->search(),
            'filter'=>$model,
            'grid_mode'=>'export',
            'exportType'=>$exportType,
            'columns' => array(
	                
					'RUT_PERSONAL',
					'ID_SUCURSAL',
					'NOMBRE_PERSONAL',
					'PATERNO_PERSONAL',
					'MATERNO_PERSONAL',
					'CONTRASENA_PERSONAL',
					'SEXO_PERSONAL',
					'TELEFONO_PERSONAL',
					'DIRECCION_PERSONAL',
					'EMAIL_PERSONAL',
					'AUTORIZADO_PERSONAL',
					'CARGO_PERSONAL',
	            ),
        ));
    }

    /**
	* Creates a new model.
	* If creation is successful, the browser will be redirected to the 'view' page.
	*/
	public function actionImport()
	{
		
		$model=new Encargado_cocina;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Encargado_cocina']))
		{
			if (!empty($_FILES)) {
				$tempFile = $_FILES['Encargado_cocina']['tmp_name']['fileImport'];
				$fileTypes = array('xls','xlsx'); // File extensions
				$fileParts = pathinfo($_FILES['Encargado_cocina']['name']['fileImport']);
				if (in_array(@$fileParts['extension'],$fileTypes)) {

					Yii::import('ext.heart.excel.EHeartExcel',true);
	        		EHeartExcel::init();
	        		$inputFileType = PHPExcel_IOFactory::identify($tempFile);
					$objReader = PHPExcel_IOFactory::createReader($inputFileType);
					$objPHPExcel = $objReader->load($tempFile);
					$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
					$baseRow = 2;
					$inserted=0;
					$read_status = false;
					while(!empty($sheetData[$baseRow]['A'])){
						$read_status = true;						
						$RUT_PERSONAL=  $sheetData[$baseRow]['A'];
						$ID_SUCURSAL=  $sheetData[$baseRow]['B'];
						$NOMBRE_PERSONAL=  $sheetData[$baseRow]['C'];
						$PATERNO_PERSONAL=  $sheetData[$baseRow]['D'];
						$MATERNO_PERSONAL=  $sheetData[$baseRow]['E'];
						$CONTRASENA_PERSONAL=  $sheetData[$baseRow]['F'];
						$SEXO_PERSONAL=  $sheetData[$baseRow]['G'];
						$TELEFONO_PERSONAL=  $sheetData[$baseRow]['H'];
						$DIRECCION_PERSONAL=  $sheetData[$baseRow]['I'];
						$EMAIL_PERSONAL=  $sheetData[$baseRow]['J'];
						$AUTORIZADO_PERSONAL=  $sheetData[$baseRow]['K'];
						$CARGO_PERSONAL=  $sheetData[$baseRow]['L'];

						$model2=new Encargado_cocina;
						$model2->RUT_PERSONAL=  $RUT_PERSONAL;
						$model2->ID_SUCURSAL=  $ID_SUCURSAL;
						$model2->NOMBRE_PERSONAL=  $NOMBRE_PERSONAL;
						$model2->PATERNO_PERSONAL=  $PATERNO_PERSONAL;
						$model2->MATERNO_PERSONAL=  $MATERNO_PERSONAL;
						$model2->CONTRASENA_PERSONAL=  $CONTRASENA_PERSONAL;
						$model2->SEXO_PERSONAL=  $SEXO_PERSONAL;
						$model2->TELEFONO_PERSONAL=  $TELEFONO_PERSONAL;
						$model2->DIRECCION_PERSONAL=  $DIRECCION_PERSONAL;
						$model2->EMAIL_PERSONAL=  $EMAIL_PERSONAL;
						$model2->AUTORIZADO_PERSONAL=  $AUTORIZADO_PERSONAL;
						$model2->CARGO_PERSONAL=  $CARGO_PERSONAL;

						try{
							if($model2->save()){
								$inserted++;
							}
						}
						catch (Exception $e){
							Yii::app()->user->setFlash('error', "{$e->getMessage()}");
							//$this->refresh();
						} 
						$baseRow++;
					}	
					Yii::app()->user->setFlash('success', ($inserted).' row inserted');	
				}	
				else
				{
					Yii::app()->user->setFlash('warning', 'Wrong file type (xlsx, xls, and ods only)');
				}
			}


			$this->render('admin',array(
				'model'=>$model,
			));
		}
		else{
			$this->render('admin',array(
				'model'=>$model,
			));
		}
	}

	public function actionEditable(){
		Yii::import('bootstrap.widgets.TbEditableSaver'); 
	    $es = new TbEditableSaver('Encargado_cocina'); 
			    $es->update();
	}

	public function actions()
	{
    	return array(
        		'toggle' => array(
                	'class'=>'bootstrap.actions.TbToggleAction',
                	'modelName' => 'Encargado_cocina',
        		)
    	);
	}

	
}
