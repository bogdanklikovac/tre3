<?php


namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;


class ImageUpload extends Model
{

    public $image;

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    public function uploadFile(UploadedFile $file)
    {

        $this->image = $file;

        if ($this->validate()) {
            $filename = $this->generateFilename();

            $file->saveAs( 'uploads/' . $filename );

            return $filename;
        }

    }

    private function generateFilename(){
        return strtolower( md5( $this->image->baseName ) ) . '.' . $this->image->extension;
    }


}