<?php

namespace App\Core;

abstract class Controller {
    protected function view($viewName, $data = []) {
        extract($data);
        require_once "../app/views/{$viewName}.php";
    }

    protected function model($model) {
        $modelClass = "App\\Models\\${model}";
        return new $modelClass();
    }
}
