<?php 

namespace App\Services;

class GroupNameService
{
    public static function disassemble($groupName){
        $name = explode('-', $groupName); //ПКЭСмз-11
        //dd($name);
        $firstPart = self::disFirstPart($name[0]);
        //dd($name[0]);
        $secondPart = self::disSecondPart($name[1]);
        
        $decoded = array_merge($firstPart, $secondPart);
        //dd($decoded);

        return $decoded;
    }

    public static function disFirstPart($firstPart){
        $letters = preg_split('//u', $firstPart, -1, PREG_SPLIT_NO_EMPTY); //ПКЭСмз "з" - вид обучения, "м" - степень, <остаток> - шифр направления
        //dd($letters);
        $type = array_pop($letters);
        //dd($letters);
        $grade = array_pop($letters);
        $field = implode($letters);
        //dd($field);

        return compact('field', 'grade', 'type');
    }

    public static function disSecondPart($secondPart){
        //dd($secondPart);
        $letters = preg_split('//u', $secondPart, -1, PREG_SPLIT_NO_EMPTY);

        $number = array_pop($letters);
        $year = array_pop($letters);

        return compact('year', 'number');
    }
}