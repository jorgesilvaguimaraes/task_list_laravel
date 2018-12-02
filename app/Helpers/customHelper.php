<?php



//CONVERTE DIA/MES/ANO -> ANO/MES/DIA
if (!function_exists('converteDmaParaAmd'))
{
    function converteDmaParaAmd($sData, $sSeparador = "")
    {
        if (!empty($sData))
        {
            $sSeparadorQuebra = !is_numeric($sData[2]) ? $sData[2] : (!is_numeric($sData[4]) ? $sData[4] : "/");

            list ($nDia, $nMes, $nAno) = explode($sSeparadorQuebra, $sData);

            $sSeparador = $sSeparador ? $sSeparador : $sSeparadorQuebra;

            return ((checkdate((INT)$nMes, (INT)$nDia, (INT)$nAno)) ? ($nAno . $sSeparador . $nMes . $sSeparador . $nDia) : $sData);
        }
        else
        {
            return $sData;
        }
    }
}

//CONVERTE ANO/MES/DIA --> DIA/MES/ANO
if (!function_exists('converteAmdParaDma'))
{
    function converteAmdParaDma($sData, $sSeparador = "")
    {
        if (!empty($sData))
        {
            $sSeparadorQuebra = !is_numeric($sData[4]) ? $sData[4] : (!is_numeric($sData[2]) ? $sData[2] : "-");

            list ($nAno, $nMes, $nDia) = explode($sSeparadorQuebra, $sData);

            $sSeparador = $sSeparador ? $sSeparador : $sSeparadorQuebra;

            return ((checkdate((INT)$nMes, (INT)$nDia, (INT)$nAno)) ? ($nDia . $sSeparador . $nMes . $sSeparador . $nAno) : $sData);
        }
        else
        {
            return $sData;
        }
    }
}

//DATA NO FORMATO AMERICANO
if (!function_exists('dateUSA'))
{
    function dateUSA($sDataHora)
    {
        if (!empty($sDataHora))
        {
            $sDataHora = explode(" ", trim($sDataHora));
            $sDataHora[0] = converteDmaParaAmd($sDataHora[0], "-");

            return trim(implode(" ", $sDataHora));
        }
        else
        {
            return false;
        }
    }
}

//DATA NO FORMATO BRASILEIRO
if (!function_exists('dateBR'))
{
    function dateBR($sDataHora)
    {
        if (!empty($sDataHora))
        {
            $sDataHora = explode(" ", trim($sDataHora));
            $sDataHora[0] = converteAmdParaDma($sDataHora[0], "/");

            return trim(implode(" ", $sDataHora));
        }
        else
        {
            return false;
        }
    }
}

//SELECTED
if (!function_exists('selected'))
{
    function selected($v1, $v2)
    {
        if(is_array($v2) && in_array($v1, $v2))
        {
            return "selected";
        }
        else if($v1 == $v2)
        {
            return "selected";
        }
    }
}

//CHECKED
if (!function_exists('checked'))
{
    function checked($v1, $v2)
    {
        if(is_array($v2) && in_array($v1, $v2))
        {
            return "checked";
        }
        else if($v1 == $v2)
        {
            return "checked";
        }
    }
}


//Jorge Guimarães em 21/09/2016
//DISABLED
if (!function_exists('disabled'))
{
    function disabled($v1, $v2)
    {
        if ($v1 == $v2)
        {
            return "disabled";
        }
    }
}




