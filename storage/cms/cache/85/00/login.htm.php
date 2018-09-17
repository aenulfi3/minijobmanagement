<?php 
class Cms5b9f30e78ad9f808968423_da35b9e7a3db21b9fc75d0f6d4cf532dClass extends Cms\Classes\PageCode
{
public function onInit(){
    $user = Auth::getUser();
    if($user){
        $component = $this->addComponent('NetSTI\Uploader\Components\ImageUploader','imageUploader',
            ['modelClass'=>'RainLab\User\Models\User','modelKeyColumn'=>'avatar', 'deferredBinding' => false]);
        $component->bindModel('avatar', $user);
    }
}
}
