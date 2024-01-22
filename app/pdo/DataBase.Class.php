<?php

namespace app\pdo;

abstract class DataBase{
    abstract protected function connect();

    abstract protected function insert($sql);

    abstract protected function update($sql);

    abstract protected function select($sql);

    abstract protected function delete($sql);
}