<?php

abstract class Model{
    public abstract function create();
   public abstract function view();
   public abstract function listAll();
   public abstract function update();
   public abstract function delete();
}
//когато имаме клас, наследяващ абстрактен клас, то сме длъжни да запишем в класа абстрактните функции от Model
class UserModel extends Model{
    public function create()
    {
        // TODO: Implement create() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function listAll()
    {
        // TODO: Implement listAll() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function view()
    {
        // TODO: Implement view() method.
    }
}
