<?php

/**
 * This is the model class for table "CLIENTE".
 *
 * The followings are the available columns in table 'CLIENTE':
 * @property string $RUT_CLIENTE
 * @property string $NOMBRE_CLIENTE
 * @property string $PATERNO_CLIENTE
 * @property string $MATERNO_CLIENTE
 * @property string $CONTRASENA_CLIENTE
 * @property string $SEXO_CLIENTE
 * @property integer $TELEFONO_CLIENTE
 * @property string $DIRECCION_CLIENTE
 * @property string $EMAIL_CLIENTE
 * @property integer $EDAD_CLIENTE
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'CLIENTE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RUT_CLIENTE', 'required'),
			array('TELEFONO_CLIENTE, EDAD_CLIENTE', 'numerical', 'integerOnly'=>true),
			array('RUT_CLIENTE', 'length', 'max'=>15),
			array('NOMBRE_CLIENTE, PATERNO_CLIENTE, MATERNO_CLIENTE, CONTRASENA_CLIENTE', 'length', 'max'=>30),
			array('SEXO_CLIENTE', 'length', 'max'=>1),
			array('DIRECCION_CLIENTE', 'length', 'max'=>50),
			array('EMAIL_CLIENTE', 'length', 'max'=>100),
			/*
			//Example username
			array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',
                 'message'=>'Username can contain only alphanumeric 
                             characters and hyphens(-).'),
          	array('username','unique'),
          	*/
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RUT_CLIENTE, NOMBRE_CLIENTE, PATERNO_CLIENTE, MATERNO_CLIENTE, CONTRASENA_CLIENTE, SEXO_CLIENTE, TELEFONO_CLIENTE, DIRECCION_CLIENTE, EMAIL_CLIENTE, EDAD_CLIENTE', 'safe', 'on'=>'search'),
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

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RUT_CLIENTE' => 'Rut Cliente',
			'NOMBRE_CLIENTE' => 'Nombre Cliente',
			'PATERNO_CLIENTE' => 'Paterno Cliente',
			'MATERNO_CLIENTE' => 'Materno Cliente',
			'CONTRASENA_CLIENTE' => 'Contrasena Cliente',
			'SEXO_CLIENTE' => 'Sexo Cliente',
			'TELEFONO_CLIENTE' => 'Telefono Cliente',
			'DIRECCION_CLIENTE' => 'Direccion Cliente',
			'EMAIL_CLIENTE' => 'Email Cliente',
			'EDAD_CLIENTE' => 'Edad Cliente',
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

		$criteria->compare('RUT_CLIENTE',$this->RUT_CLIENTE,true);
		$criteria->compare('NOMBRE_CLIENTE',$this->NOMBRE_CLIENTE,true);
		$criteria->compare('PATERNO_CLIENTE',$this->PATERNO_CLIENTE,true);
		$criteria->compare('MATERNO_CLIENTE',$this->MATERNO_CLIENTE,true);
		$criteria->compare('CONTRASENA_CLIENTE',$this->CONTRASENA_CLIENTE,true);
		$criteria->compare('SEXO_CLIENTE',$this->SEXO_CLIENTE,true);
		$criteria->compare('TELEFONO_CLIENTE',$this->TELEFONO_CLIENTE);
		$criteria->compare('DIRECCION_CLIENTE',$this->DIRECCION_CLIENTE,true);
		$criteria->compare('EMAIL_CLIENTE',$this->EMAIL_CLIENTE,true);
		$criteria->compare('EDAD_CLIENTE',$this->EDAD_CLIENTE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
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
                                
        return false;
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
