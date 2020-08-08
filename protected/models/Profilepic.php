<?php
Yii::import("ext.EPhpThumb.EPhpThumb");

/**
 * This is the model class for table "{{profilepic}}".
 *
 * The followings are the available columns in table '{{profilepic}}':
 * @property string $id
 * @property string $name
 * @property string $extension
 * @property string $path
 * @property string $filename
 * @property string $byteSize
 * @property string $mimeType
 * @property integer $created
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class Profilepic extends CActiveRecord
{
	/**
     * Property for receiving the file from the form
     * It should be different from any other field in the database
     */
    public $uploadedFile;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return Profilepic the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{profilepic}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uploadedFile', 'file', 'types'=>'jpg, gif, png',  'maxSize'=>1024 * 4096, 'tooLarge'=>'File has to be smaller than 4MB'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, extension, path, filename, byteSize, mimeType, created, user_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		);
	}

	/**
    * Saves the name, size, type and data of the uploaded file
    */
    public function beforeSave()
    {
        if($file=CUploadedFile::getInstance($this,'uploadedFile'))
        {
        				// picking up from no sessions slide of scalable web architectures.
		$data = Yii::app()->user->id.'-'.time();	
		$fileName = sha1($data); 	
		$filePath = "files/images/profilePic/".sha1(Yii::app()->user->id); // so this should be like bitpic/  
        	
            $this->filename=$file->getName();
            $this->mimeType=$file->getType();
           	$this->extension=strtolower($file->getExtensionName());            
            $this->byteSize=$file->getSize();
           //	$this->image=file_get_contents($file->tempName);
           	$this->created=time();           	
            $this->user_id=Yii::app()->user->id; //Yii::app()->getModule('user')->id;
			
                       	
           	if($fileName!=null)
           	$this->name= $this->normalizeString($fileName);
           
           	if(!file_exists($filePath))
				if(!$this->createDirectory($filePath))
					fb('Profile Pic error,Failed to save image! Directory could not be created.');
           	
           	if($filePath!==null)
				$this->path=$filePath;
            
			$file->saveAs($filePath.'/'.$this->name.'.'.$this->extension);
			
			// ok now, let's resize this and save it back to same place
			
			$thumb=new EPhpThumb();
			$thumb->init(); //this is needed

				//chain functions
			$thumb->create($filePath.'/'.$this->name.'.'.$this->extension)
				->resize(100,0)
				->save($filePath.'/'.$this->name.'.'.$this->extension);
			
        }
 
    return parent::beforeSave();
    }
    
    /**
	 * Creates the specified directory.
	 * @param string $path the directory path.
	 * @param integer $mode the file mode.
	 * @param boolean $recursive allows the creation of nested directories.
	 * @return boolean whether or not the directory was created.
	 * @since 1.2.1
	 */
	protected function createDirectory($path,$mode=0777,$recursive=true)
	{
		return mkdir($path,$mode,$recursive);
	}
    
	
	/**
	 * Normalizes the given string by replacing special characters. å=>a, é=>e, ö=>o, etc.
	 * @param string $string the text to normalize.
	 * @return string the normalized string.
	 * @since 1.2.0
	 */
	protected function normalizeString($string)
	{
		$string=str_replace(str_split('/\?%*:|"<>. '),'',$string);
		$string=preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i','$1',htmlentities($string,ENT_QUOTES,'UTF-8'));
		return $string;
	}
    
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'extension' => 'Extension',
			'path' => 'Path',
			'filename' => 'Filename',
			'byteSize' => 'Byte Size',
			'mimeType' => 'Mime Type',
			'created' => 'Created',
			'user_id' => 'User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('extension',$this->extension,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('byteSize',$this->byteSize,true);
		$criteria->compare('mimeType',$this->mimeType,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}