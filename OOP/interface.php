<?php

interface DongVat
{
    function dichuyen();
}

interface Nguoi extends DongVat
{
    function an();
    function ngu();
    function hoc();
}

interface Soi extends DongVat
{
    function disan();
}

class NguoiSoi implements Nguoi, Soi
{

    function dichuyen(){
        //code
    }

    function an(){
        //code
    }

    function ngu(){
        //code
    }

    function hoc(){
        //code
    }

    function disan(){
        //code
    }

    function hoasoi(){
        //code
    }

}

$p = new NguoiSoi();

