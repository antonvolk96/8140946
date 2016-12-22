<?php
namespace MyCompany\COMPLAINTS;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
Loc::loadMessages(__FILE__);
class ComplaintsManager {
    const IBLOCK_CODE_COMPLAINTS = 'complaints';
    const IBLOCK_CODE_DEPARTMENTS = 'departments';
    public static function GetCOMPLAINTS(
        $arCompaint = array('SORT' => 'ASC'),
        $arFilter = array(),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = array('ID', 'NAME')
    ) {
        $elements = array();
        //Получаем ID инфоблока COMPLAINTS по его символьному коду
        $rsIblock = \CIBlock::GetList(
            array(),
            array('CODE' => self::IBLOCK_CODE_COMPLAINTS, 'SITE_ID' =>
                SITE_ID)
        );
        $arIblock = $rsIblock->GetNext();
        $arFilter['IBLOCK_ID'] = $arIblock['ID'];
        $rsElements = \CIBlockElement::GetList(
            $arCompaint, //массив полей сортировки элементов и её направления
 $arFilter, //массив полей фильтра элементов и их значений
 $arGroupBy, //массив полей для группировки элементов
 $arNavStartParams, //параметры для постраничной навигации и ограничения количества выводимых элементов
 $arSelectFields //массив возвращаемых полей элементов
 );
 while($arElements = $rsElements->Fetch()) {
     //Получение информации о файле с регламентом расчетапоказателя: ссылка на файл на сервере, название файла и т.д.
 foreach($arElements['PROPERTY_REGULATIONS_VALUE'] as $key => $idFileRegulation) {
         $arElements['PROPERTY_REGULATIONS_VALUE'][$key] = \CFile::GetFileArray($idFileRegulation);
     }
 $elements[] = $arElements;
 }
 return $elements;
 }
    public static function GetComplaintsEmployee($idEmployee) {
        if(!$idEmployee) {
            return array();
        }
        //Получаем список всех подразделений сотрудника
        $arDepartmentsUser = UserTable::getList(array(
            'select' => array(
                'UF_DEPARTMENT'
            ),
            'filter' => array(
                'ID' => $idEmployee
            )
        ))->fetch();
        //Получаем список всех  данных подразделений
        return self::GetCOMPLAINTS(
            array('NAME' => 'asc'),
            array('PROPERTY_DEPARTMENT.ID' => $arDepartmentsUser),
            false,
            false,
            array('ID', 'NAME', 'PROPERTY_INDICATOR_TYPE',
                'PROPERTY_WEIGHT', 'PROPERTY_REGULATIONS')
        );
    }
    public static function SetComplaintsEmployee($idEmployee, $period,
                                          $arComplaintsValues) {
        if(!$idEmployee || !is_array($arComplaintsValues) ||
            !count($arComplaintsValues)) {
            return array();
        }
        global $USER;
        //Получаем объект подключения к БД
        $db = Application::getConnection();
        //Начинаем транзакцию
        $db->startTransaction();

        foreach($arComplaintsValues as $Complaints => $ComplaintsValue) {
            $arValue = array(
 'UF_VALUE' => $ComplaintsValue,
 'UF_COMPLAINTS' => $Complaints,
 'UF_EMPLOYEE' => $idEmployee,
 'UF_CREATED_BY' => $USER->GetID(),
 'UF_CREATED' => new
            \Bitrix\Main\Type\DateTime(date('d.m.Y') . ' 00:00:00'),
 'UF_PERIOD' => new
            \Bitrix\Main\Type\DateTime($period. ' 00:00:00')
 );
            $complaints = self::GetComplaintsEmployeeValue($Complaints, $idEmployee, $period);
            if (isset($complaints["ID"]))
            {
                $result = ComplaintsEmployeeTable::update($complaints["ID"], $arValue);
            }
            else{
                $result = ComplaintsEmployeeTable::add($arValue);
            }
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }

        if ($result->isSuccess()) {
            $db->commitTransaction();
            return true;
        }
    }
    public static function GetComplaintsEmployeeValue($idComplaints, $idEmployee, $period)  {

        $rsResult = ComplaintsEmployeeTable::getList(array(
            'select' => array("ID", "UF_VALUE"),
            'filter' => array(
                'UF_COMPLAINTS' => $idComplaints,
                'UF_EMPLOYEE' => $idEmployee,
                'UF_PERIOD' => new \Bitrix\Main\Type\DateTime($period)
            )

        ));
        return $rsResult->fetch();

    }
}