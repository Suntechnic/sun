<?php
namespace Sun;
abstract class Option
{
    /*
    * принимает на вход три параметра:
    *   - имя модуля (строка)
    *   - ключ опции (строка)
    *   - значение по умолчанию (любой тип, необязательный)
    * возвращает значение опции (любой тип) или значение по умолчанию, если опция не установлена
    */
    abstract public static function get     (
            string  $Module,
            string  $Key,
                    $Default = null
        );

    /*
    * принимает на вход три параметра:
    *   - имя модуля (строка)
    *   - ключ опции (строка)
    *   - значение опции (любой тип)
    * не возвращает ничего
    * сохраняет значение опции
    */
    abstract public static function set     (
            string  $Module,
            string  $Key,
                    $Value
        ): void;
    
    /*
    * принимает на вход два параметра:
    *   - имя модуля (строка)
    *   - массив параметров для поиска (асссоциативный массив) например: ['name' => 'option_name']
    * не возвращает ничего
    * удаляет опцию
    */
    abstract public static function delete  (
            string  $Module,
            array   $dctParam
        ): void;
}