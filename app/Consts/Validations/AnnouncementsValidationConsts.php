<?php

namespace App\Consts\Validations;

abstract class AnnouncementsValidationConsts
{
    public static $TITLE = [
        'required',
        'string',
        'between:3,100',
    ]; 

    public static $DESCRIPTION = [
        'nullable',
        'string',
        'between:3,255',
    ]; 

    public static $CATEGORY_ID = [
        'required',
        'uuid',
        'exists:categories,id',
    ]; 

    public static $PROVINCE_ID = [
        'required',
        'uuid',
        'exists:provinces,id',
    ]; 

    public static $CITY = [
        'nullable',
        'string',
        'between:3,100',
    ]; 

    // public static $activityStart = [
    //     'nullable',
    //     'date_format:Y-m-d H:i:s',
    //     'after:' . date('Y-m-d H:i:s'),
    // ]; 

    public static $DURATION = [
        'required',
        'numeric',
    ]; 

    public static $TAGS = [
        'nullable',
        'array',
    ]; 

    public static $TAGS_VALUES = [
        'string',
        'between:3,64',
    ]; 
}