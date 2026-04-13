<?php
    const MAX_INT = 2 ** 32 - 1;
    $nDecNum = 0;
    $nHexPower = 1;
    $nMaxHexDigits = ceil(log(MAX_INT, 16));
    echo("Input a hexadecimal number:\r\n");
    $strLine = chop(fgets(STDIN));
    $nStrLen = strlen($strLine);
    $bIsHexNum = preg_match_all("^[0-9A-Fa-f]+$^", $strLine, $m);
    $bRightString = ($nStrLen <= $nMaxHexDigits && $bIsHexNum);
    if (!$bRightString) 
    {
        echo("Wrong hexadecimal number format!!!\r\n");
        fgetc(STDIN);  
        exit(); 
    }
    for ($i = 0; $i < $nStrLen; $i++)
    {
        $nHexDight = 0;
        $chHexDigit = $strLine[$nStrLen - 1 - $i];
        if ($chHexDigit >= '0' && $chHexDigit <= '9')
            $nHexDight = ord($chHexDigit) - ord('0');
        else if ($chHexDigit >= 'A' && $chHexDigit <= 'F')
            $nHexDight = 10 + ord($chHexDigit) - ord('A');
        else if ($chHexDigit >= 'a' && $chHexDigit <= 'f')
            $nHexDight = 10 + ord($chHexDigit) - ord('a');
        $nDecNum += ($nHexDight * $nHexPower);
        $nHexPower *= 16;
    }
    printf
    (
       "The decimal equivalent of the hexadecimal number %s is %d\r\n", 
       $strLine, $nDecNum
    );
    fgetc(STDIN);
?>