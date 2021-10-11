<?php

namespace app\UsersManager;

interface UsersInterface{
    public function create();
    public function view($id);
    public function delete($id);
    public function edit($id);
    public function index();

}

?>