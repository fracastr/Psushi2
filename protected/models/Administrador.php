<?php

/**
 * This is the model class for table "ADMINISTRADOR".
 *
 * The followings are the available columns in table 'ADMINISTRADOR':
 * @property string $RUT_PERSONAL
 * @property integer $ID_SUCURSAL
 * @property string $NOMBRE_PERSONAL
 * @property string $PATERNO_PERSONAL
 * @property string $MATERNO_PERSONAL
 * @property string $CONTRASENA_PERSONAL
 * @property string $SEXO_PERSONAL
 * @property integer $TELEFONO_PERSONAL
 * @property string $DIRECCION_PERSONAL
 * @property string $EMAIL_PERSONAL
 * @property integer $AUTORIZADO_PERSONAL
 * @property string $CARGO_PERSONAL
 */
class Administrador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ADMINISTRADOR';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RUT_PERSONAL, TELEFONO_PERSONAL, CONTRASENA_PERSONAL', 'required', 'message'=>'Este campo es obligatorio'),
			array('ID_SUCURSAL, TELEFONO_PERSONAL', 'numerical', 'integerOnly'=>true, 'message'=>'Debe indicar un valor numérico'),
			array('AUTORIZADO_PERSONAL', 'numerical', 'integerOnly'=>false),
			array('RUT_PERSONAL', 'length', 'max'=>15),
			array('NOMBRE_PERSONAL, PATERNO_PERSONAL, MATERNO_PERSONAL, CONTRASENA_PERSONAL, CARGO_PERSONAL', 'length', 'max'=>30),
			array('CONTRASENA_PERSONAL','length2'),
			//array('SEXO_PERSONAL', 'length', 'max'=>1),
			array('DIRECCION_PERSONAL', 'length', 'max'=>50),
			array('EMAIL_PERSONAL', 'length', 'max'=>100),
			//array('EMAIL_PERSONAL','validateEmail'),
			array('RUT_PERSONAL','validateRUT'),
			array('SEXO_PERSONAL','validateSexo'),
			array('NOMBRE_PERSONAL, PATERNO_PERSONAL, MATERNO_PERSONAL', 'match', 'pattern' => '/^[A-Z a-záéíóúñ]+$/u',

				'message'=>'El nombre del profesor sólo puede contener letras.'),
			
			/*
			//Example username
			array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',
                 'message'=>'Username can contain only alphanumeric 
                             characters and hyphens(-).'),
          	array('username','unique'),
          	*/
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RUT_PERSONAL, ID_SUCURSAL, NOMBRE_PERSONAL, PATERNO_PERSONAL, MATERNO_PERSONAL, CONTRASENA_PERSONAL, SEXO_PERSONAL, TELEFONO_PERSONAL, DIRECCION_PERSONAL, EMAIL_PERSONAL, AUTORIZADO_PERSONAL, CARGO_PERSONAL', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	public function validateEmail($attribute, $params) {

		if(!empty($EMAIL_PERSONAL)){


			$arroba=strpos($this->EMAIL_PERSONAL,'@');
			if($arroba==false) $this->addError('EMAIL_PERSONAL','Email inválido.');


		}}
	public function validateSexo($attribute, $params){
		if($this->SEXO_PERSONAL!='Femenino')
		{
			if($this->SEXO_PERSONAL!='Masculino'){$this->addError('SEXO_PERSONAL', 'Debe indicar un valor para este campo.');}

		}
	}

	public function length2($attribute,$params){

		if(strlen($this->CONTRASENA_PERSONAL)<5)$this->addError('CONTRASENA_PERSONAL','La contraseña debe tener al menos 5 caracteres.');
	}

	public function validateRut($attribute, $params) {
		$data = explode('-', $this->RUT_PERSONAL);
		$evaluate = strrev($data[0]);
		$multiply = 2;
		$store = 0;
		for ($i = 0; $i < strlen($evaluate); $i++) {
			$store += $evaluate[$i] * $multiply;
			$multiply++;
			if ($multiply > 7)
				$multiply = 2;
		}
		isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
		$result = 11 - ($store % 11);
		if ($result == 10)
			$result = 'k';
		if ($result == 11)
			$result = 0;
		if ($verifyCode != $result)
			$this->addError('RUT_PERSONAL', 'Rut de Administrador inválido, utilice formato 12345678-9');
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RUT_PERSONAL' => 'Rut',
			'ID_SUCURSAL' => 'Sucursal',
			'NOMBRE_PERSONAL' => 'Nombre',
			'PATERNO_PERSONAL' => 'Apellido paterno',
			'MATERNO_PERSONAL' => 'Apellido materno',
			'CONTRASENA_PERSONAL' => 'Contraseña',
			'SEXO_PERSONAL' => 'Sexo',
			'TELEFONO_PERSONAL' => 'Teléfono',
			'DIRECCION_PERSONAL' => 'Dirección',
			'EMAIL_PERSONAL' => 'Email',
			'AUTORIZADO_PERSONAL' => 'Autorizado',
			'CARGO_PERSONAL' => 'Cargo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('RUT_PERSONAL',$this->RUT_PERSONAL,true);
		$criteria->compare('ID_SUCURSAL',$this->ID_SUCURSAL);
		$criteria->compare('NOMBRE_PERSONAL',$this->NOMBRE_PERSONAL,true);
		$criteria->compare('PATERNO_PERSONAL',$this->PATERNO_PERSONAL,true);
		$criteria->compare('MATERNO_PERSONAL',$this->MATERNO_PERSONAL,true);
		$criteria->compare('CONTRASENA_PERSONAL',$this->CONTRASENA_PERSONAL,true);
		$criteria->compare('SEXO_PERSONAL',$this->SEXO_PERSONAL,true);
		$criteria->compare('TELEFONO_PERSONAL',$this->TELEFONO_PERSONAL);
		$criteria->compare('DIRECCION_PERSONAL',$this->DIRECCION_PERSONAL,true);
		$criteria->compare('EMAIL_PERSONAL',$this->EMAIL_PERSONAL,true);
		$criteria->compare('AUTORIZADO_PERSONAL',$this->AUTORIZADO_PERSONAL);
		$criteria->compare('CARGO_PERSONAL',$this->CARGO_PERSONAL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Administrador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave() 
    {
        $userId=0;
		if(null!=Yii::app()->user->id) $userId=(int)Yii::app()->user->id;
		
		if($this->isNewRecord)
        {           
                        						
        }else{
                        						
        }

        
        return parent::beforeSave();
    }

    public function beforeDelete () {
		$userId=0;
		if(null!=Yii::app()->user->id) $userId=(int)Yii::app()->user->id;
                                
        return true;
    }

    public function afterFind()    {
         
        parent::afterFind();
    }
	
		
	public function defaultScope()
    {
    	/*
    	//Example Scope
    	return array(
	        'condition'=>"deleted IS NULL ",
            'order'=>'create_time DESC',
            'limit'=>5,
        );
        */
        $scope=array();

        
        return $scope;
    }
}
