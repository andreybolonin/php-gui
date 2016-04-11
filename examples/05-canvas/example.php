<?php

require __DIR__ . '/../../vendor/autoload.php';

use Gui\Application;
use Gui\Components\Canvas;
use Gui\Components\Label;

// This is an array of pixel mapping
$pixels = [ '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#000', '#000', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fefefe', '#cdcdcd', '#676767', '#2c2c2c', '#000',
    '#000', '#2c2c2c', '#676767', '#cdcdcd', '#fefefe', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#afafaf', '#131313', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#131313', '#aeaeae', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#f3f3f3', '#313131', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#313131', '#f2f2f2', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#dbdbdb', '#aaa', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#888', '#dbdbdb',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#d6d6d6', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#d3d3d3', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#e5e5e5', '#444', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#444', '#e3e3e3', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#f8f8f8', '#161616', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#161616', '#f8f8f8', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#4c4c4c', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#4a4a4a',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#b2b2b2',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#afafaf', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#f8f8f8', '#ddd', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#aaa', '#f7f7f7', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#6f6f6f', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#6c6c6c', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#eeeeee', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#303030', '#767676', '#c2c2c2', '#f2f2f2', '#333333', '#000', '#ededed',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#636363', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#222', '#3a3a3a', '#838383', '#c9c9c9', '#f0f0f0', '#fefefe', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#424242', '#000', '#636363', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#f2f2f2',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#aaa', '#424242', '#8f8f8f', '#d1d1d1', '#f4f4f4', '#fefefe',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#424242', '#000', '#000', '#f2f2f2', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#868686', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#fff', '#4c4c4c', '#989898', '#d9d9d9', '#f7f7f7',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#424242', '#000', '#000',
    '#838383', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#fdfdfd', '#161616', '#000', '#000', '#000', '#000', '#000', '#9b9b9b',
    '#fcfcfc', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#fefefe', '#303030', '#000', '#000', '#131313', '#fdfdfd', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#cbcbcb', '#000',
    '#000', '#000', '#000', '#000', '#000', '#d9d9d9', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#fefefe', '#e8e8e8', '#b8b8b8', '#6f6f6f', '#282828', '#000',
    '#000', '#000', '#000', '#000', '#c9c9c9', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#555555', '#000', '#000', '#000', '#000',
    '#000', '#000', '#d7d7d7', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fafafa', '#eaeaea', '#ffffff', '#ffffff', '#ffffff',
    '#898989', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#525252', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#f9f9f9', '#888', '#000', '#000', '#000', '#000', '#000', '#000', '#d7d7d7',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#f9f9f9', '#dfdfdf', '#a5a5a5', '#595959',
    '#171717', '#000', '#000', '#fefefe', '#ffffff', '#ffffff', '#838383', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#888', '#f9f9f9',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#c9c9c9', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#d7d7d7', '#ffffff', '#ffffff', '#f9f9f9',
    '#4c4c4c', '#fff', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#fefefe', '#ffffff', '#ffffff', '#838383', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#c8c8c8', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#676767', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#d7d7d7', '#ffffff', '#ffffff', '#ededed', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#fefefe', '#ffffff', '#ffffff',
    '#838383', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#636363', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fefefe',
    '#1a1a1a', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#d7d7d7',
    '#ffffff', '#ffffff', '#ededed', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#ccc', '#ffffff', '#ffffff', '#ffffff', '#808080', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#1a1a1a',
    '#fefefe', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#eeeeee', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#d7d7d7', '#ffffff', '#ffffff', '#ededed',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#2b2b2b',
    '#ffffff', '#ffffff', '#ffffff', '#6f6f6f', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#ededed', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#b6b6b6', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#d9d9d9', '#ffffff', '#ffffff', '#f0f0f0', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#868686', '#ffffff', '#ffffff', '#ffffff',
    '#4c4c4c', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#b6b6b6', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#696969',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#d7d7d7',
    '#ffffff', '#ffffff', '#fafafa', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#f6f6f6', '#ffffff', '#ffffff', '#ffffff', '#1a1a1a', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#676767', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#2b2b2b', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#cfcfcf', '#ffffff', '#ffffff', '#ffffff',
    '#3f3f3f', '#000', '#000', '#000', '#000', '#000', '#000', '#dddddd', '#ffffff',
    '#ffffff', '#ffffff', '#f6f6f6', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#292929', '#ffffff', '#ffffff',
    '#ffffff', '#fbfbfb', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#aaaaaa', '#ffffff', '#ffffff', '#ffffff', '#f7f7f7', '#424242', '#888',
    '#111111', '#454545', '#b5b5b5', '#fdfdfd', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#929292',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#fbfbfb', '#ffffff', '#ffffff', '#eaeaea', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#555555',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#f6f6f6', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#e9e9e9', '#ffffff', '#ffffff', '#c6c6c6', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#fcfcfc', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#fefefe', '#2b2b2b', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#c5c5c5', '#ffffff',
    '#ffffff', '#959595', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#828282', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fcfcfc', '#333333', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#959595', '#ffffff', '#ffffff', '#676767', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#adadad', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#c9c9c9', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#666666', '#ffffff', '#ffffff', '#414141', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#3c3c3c',
    '#d2d2d2', '#f6f6f6', '#f8f8f8', '#f0f0f0', '#d5d5d5', '#898989', '#212121', '#222', '#404040',
    '#979797', '#d6d6d6', '#fcfcfc', '#7b7b7b', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#414141', '#ffffff',
    '#ffffff', '#272727', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#262626',
    '#5a5a5a', '#929292', '#cdcdcd', '#f4f4f4', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#868686', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#262626', '#ffffff', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#212121', '#606060', '#acacac', '#e2e2e2', '#f9f9f9', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#868686', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#262626', '#696969', '#b4b4b4', '#e7e7e7', '#fcfcfc', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#868686', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#7c7c7c', '#fefefe', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fbfbfb',
    '#565656', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#a4a4a4', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fefefe',
    '#f6f6f6', '#d5d5d5', '#929292', '#4a4a4a', '#fff', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#a4a4a4',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#fefefe', '#f2f2f2', '#cdcdcd', '#888888', '#3d3d3d', '#aaa', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#a4a4a4', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#fdfdfd', '#fefefe', '#ffffff', '#ffffff', '#f8f8f8', '#777', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#8c8c8c', '#f3f3f3', '#bcbcbc', '#737373', '#2c2c2c', '#000', '#d8d8d8',
    '#ffffff', '#ffffff', '#f6f6f6', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#d8d8d8', '#ffffff', '#ffffff', '#f6f6f6',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#d8d8d8', '#ffffff', '#ffffff', '#f6f6f6', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#d9d9d9',
    '#ffffff', '#ffffff', '#f8f8f8', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#2c2c2c', '#131313', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#d6d6d6', '#ffffff', '#ffffff', '#fefefe',
    '#fff', '#000', '#000', '#000', '#000', '#000', '#2c2c2c', '#707070', '#bababa',
    '#ebebeb', '#fcfcfc', '#ffffff', '#888888', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#c9c9c9', '#ffffff', '#ffffff', '#ffffff', '#dcdcdc', '#5a5a5a', '#7c7c7c',
    '#c4c4c4', '#efefef', '#fdfdfd', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#868686', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#a4a4a4',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#868686', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#555555', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#868686', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#ffffff', '#262626', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#fafafa', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#f6f6f6', '#dadada',
    '#323232', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#242424', '#ffffff', '#ffffff', '#414141', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#606060', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fefefe', '#f2f2f2',
    '#cdcdcd', '#898989', '#404040', '#777', '#000', '#000', '#000', '#000', '#000',
    '#1c1c1c', '#565656', '#a7a7a7', '#292929', '#000', '#000', '#000', '#000', '#000',
    '#000', '#3e3e3e', '#ffffff', '#ffffff', '#666666', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#262626', '#acacac',
    '#cfcfcf', '#bdbdbd', '#7f7f7f', '#353535', '#000', '#000', '#000', '#000', '#000',
    '#000', '#1f1f1f', '#606060', '#a7a7a7', '#dfdfdf', '#f9f9f9', '#ffffff', '#ffffff', '#ffffff',
    '#4e4e4e', '#000', '#000', '#000', '#000', '#000', '#000', '#636363', '#ffffff',
    '#ffffff', '#959595', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#262626', '#696969', '#b3b3b3', '#e6e6e6', '#fbfbfb', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#4e4e4e', '#000', '#000',
    '#000', '#000', '#000', '#000', '#929292', '#ffffff', '#ffffff', '#c5c5c5', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#666', '#313131', '#757575', '#bbbbbb', '#eaeaea', '#fcfcfc', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#4e4e4e', '#000', '#000', '#000', '#000', '#000',
    '#000', '#c2c2c2', '#ffffff', '#ffffff', '#e9e9e9', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#535353', '#c9c9c9', '#eeeeee', '#fdfdfd',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#4e4e4e', '#000', '#000', '#000', '#000', '#000', '#000', '#e7e7e7', '#ffffff',
    '#ffffff', '#f9f9f9', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#dbdbdb', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#f8f8f8', '#dcdcdc', '#a2a2a2', '#5a5a5a', '#222', '#000', '#000',
    '#000', '#000', '#000', '#000', '#f9f9f9', '#ffffff', '#ffffff', '#ffffff', '#292929',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#d9d9d9',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#bdbdbd', '#ddd', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#292929', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#676767', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#d9d9d9', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#fefefe', '#f3f3f3', '#d0d0d0', '#8e8e8e', '#3f3f3f', '#313131',
    '#fefefe', '#ffffff', '#ffffff', '#8c8c8c', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#636363', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#b4b4b4', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#d9d9d9', '#ffffff', '#ffffff', '#fefefe', '#c7c7c7', '#828282', '#3d3d3d',
    '#ddd', '#000', '#000', '#000', '#000', '#000', '#fefefe', '#ffffff', '#ffffff',
    '#8c8c8c', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#b3b3b3', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ededed',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#d9d9d9',
    '#ffffff', '#ffffff', '#eeeeee', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#fefefe', '#ffffff', '#ffffff', '#8c8c8c', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#ebebeb', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fefefe', '#1a1a1a', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#d9d9d9', '#ffffff', '#ffffff', '#eeeeee',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#fefefe', '#ffffff', '#ffffff', '#8b8b8b', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#181818', '#fefefe', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#636363', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#d9d9d9', '#ffffff', '#ffffff', '#eeeeee', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#292929', '#ffffff', '#ffffff', '#ffffff',
    '#818181', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#606060', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#c6c6c6', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#dbdbdb',
    '#ffffff', '#ffffff', '#efefef', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#6c6c6c', '#ffffff', '#ffffff', '#ffffff', '#646464', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#c5c5c5',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#f9f9f9', '#888', '#000',
    '#000', '#000', '#000', '#000', '#000', '#d9d9d9', '#ffffff', '#ffffff', '#f8f8f8',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#e0e0e0',
    '#ffffff', '#ffffff', '#ffffff', '#373737', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#666', '#f8f8f8', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#4f4f4f', '#000', '#000', '#000', '#000',
    '#000', '#000', '#d5d5d5', '#ffffff', '#ffffff', '#ffffff', '#262626', '#000', '#000',
    '#000', '#000', '#000', '#000', '#919191', '#ffffff', '#ffffff', '#ffffff', '#fcfcfc',
    '#444', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#4f4f4f', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#c8c8c8', '#000', '#000', '#000', '#000', '#000', '#000', '#bdbdbd',
    '#ffffff', '#ffffff', '#ffffff', '#d6d6d6', '#000', '#000', '#000', '#444', '#484848',
    '#dedede', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#c6c6c6', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#c5c5c5', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fcfcfc', '#131313',
    '#000', '#000', '#000', '#000', '#000', '#7e7e7e', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#fcfcfc', '#e9e9e9', '#efefef', '#fdfdfd', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#fefefe', '#262626', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#111111', '#fcfcfc', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#808080', '#000', '#000', '#000',
    '#000', '#000', '#212121', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#828282', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#7e7e7e', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#f0f0f0', '#000', '#000', '#000', '#000', '#000', '#000',
    '#c9c9c9', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#9c9c9c', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#efefef', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#5d5d5d', '#000', '#000', '#000', '#000', '#000', '#999', '#efefef', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#fdfdfd', '#666666',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#5d5d5d', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ebebeb', '#000', '#000',
    '#000', '#000', '#000', '#000', '#666', '#b5b5b5', '#fdfdfd', '#ffffff', '#ffffff',
    '#ffffff', '#fefefe', '#efefef', '#919191', '#999', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#eaeaea',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#696969', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#444', '#313131', '#484848', '#353535', '#101010', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#676767', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#f6f6f6', '#888', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#888', '#f6f6f6', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#a8a8a8',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#a8a8a8', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#444444', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#444444', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#f7f7f7', '#111111', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#111111', '#f6f6f6',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#e1e1e1', '#222', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#dfdfdf', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#cdcdcd',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#cccccc', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#d4d4d4', '#666', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#666', '#d3d3d3', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#efefef', '#292929', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000',
    '#292929', '#efefef', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#fefefe', '#a3a3a3', '#fff', '#000', '#000', '#000', '#000',
    '#000', '#000', '#000', '#000', '#fff', '#a0a0a0', '#fefefe', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#fdfdfd', '#c2c2c2', '#5a5a5a', '#242424', '#000', '#000', '#242424', '#5a5a5a',
    '#c2c2c2', '#fdfdfd', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#000', '#000', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff',
    '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff'];

$application = new Application([
    'title' => 'Canvas Drawing',
    'left' => 248,
    'top' => 50,
    'width' => 200,
    'height' => 200
]);

$application->on('start', function() use ($application, $pixels) {
    $label = new Label([
        'left' => 50,
        'fontSize' => 20,
        'text' => 'Let\'s Draw!',
        'top' => 10,
    ]);

    $canvas = new Canvas([
        'top' => 60,
        'left' => 60,
        'width' => 82,
        'height' => 42
    ]);

    $canvas->setSize(82, 42);

    $application->getLoop()->addTimer(1, function() use ($canvas, $pixels) {
        $count = 0;

        for ($x = 0; $x < 82; $x++) {
            for ($y = 0; $y < 42; $y++) {
                $canvas->setPixel($x, $y, $pixels[$count++]);
            }
        }
    });
});

$application->run();
