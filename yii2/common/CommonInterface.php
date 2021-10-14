<?php

namespace app\common;

interface CommonInterface{
    public function create();
    public function view($id);
    public function delete($id);
    public function edit($id);
    public function index();
}

?>