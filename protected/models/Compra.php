<?php

/**
 * This is the model class for table "Compra".
 *
 * The followings are the available columns in table 'Compra':
 * @property integer $ID_COMPRA
 * @property string $RUT_CLIENTE
 * @property string $ID_BOLETA_COMPRA
 * @property string $FECHA_HORA_COMPRA
 * @property string $TIPO_COMPRA
 * @property string $DINERO_COMPRA
 * @property string $ESTADO_COMPRA
 */
class Compra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_COMPRA, RUT_CLIENTE', 'required'),
			array('ID_COMPRA', 'numerical', 'integerOnly'=>true),
			array('RUT_CLIENTE', 'length', 'max'=>15),
			array('ID_BOLETA_COMPRA', 'length', 'max'=>500),
			array('TIPO_COMPRA, DINERO_COMPRA', 'length', 'max'=>30),
			array('ESTADO_COMPRA', 'length', 'max'=>50),
			array('FECHA_HORA_COMPRA', 'safe'),
			/*
			//Example username
			array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',
                 'message'=>'Username can contain only alphanumeric 
                             characters and hyphens(-).'),
          	array('username','unique'),
          	*/
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_COMPRA, RUT_CLIENTE, ID_BOLETA_COMPRA, FECHA_HORA_COMPRA, TIPO_COMPRA, DINERO_COMPRA, ESTADO_COMPRA', 'safe', 'on'=>'search'),
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
			'ID_COMPRA' => 'Id Compra',
			'RUT_CLIENTE' => 'Rut Cliente',
			'ID_BOLETA_COMPRA' => 'Id Boleta Compra',
			'FECHA_HORA_COMPRA' => 'Fecha Hora Compra',
			'TIPO_COMPRA' => 'Tipo Compra',
			'DINERO_COMPRA' => 'Dinero Compra',
			'ESTADO_COMPRA' => 'Estado Compra',
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

		$criteria->compare('ID_COMPRA',$this->ID_COMPRA);
		$criteria->compare('RUT_CLIENTE',$this->RUT_CLIENTE,true);
		$criteria->compare('ID_BOLETA_COMPRA',$this->ID_BOLETA_COMPRA,true);
		$criteria->compare('FECHA_HORA_COMPRA',$this->FECHA_HORA_COMPRA,true);
		$criteria->compare('TIPO_COMPRA',$this->TIPO_COMPRA,true);
		$criteria->compare('DINERO_COMPRA',$this->DINERO_COMPRA,true);
		$criteria->compare('ESTADO_COMPRA',$this->ESTADO_COMPRA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Compra the static model class
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
