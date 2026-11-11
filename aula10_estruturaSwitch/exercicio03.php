<?php
$estado = $_GET['est'];

switch ($estado) {
    case 'AC':
    case 'AP':
    case 'AM':
    case 'PA':
    case 'RO':
    case 'RR':
    case 'TO':
        $regiao = 'Região Norte';
        break;
    case 'AL':
    case 'BA':
    case 'CE':
    case 'MA':
    case 'PB':
    case 'PE':
    case 'PI':
    case 'RN':
    case 'SE':
        $regiao = 'Região Nordeste';
        break;
    case 'DF':
    case 'GO':
    case 'MT':
    case 'MS':
        $regiao = 'Região Centro-Oeste';
        break;
    case 'ES':
    case 'MG':
    case 'RJ':
    case 'SP':
        $regiao = 'Região Sudeste';
        break;
    case 'PR':
    case 'RS':
    case 'SC':
        $regiao = 'Região Sul';
        break;
    default:
        $regiao = 'Estado inválido ou não selecionado';
        break;
}

echo "Sua região é: <strong>$regiao</strong>";
?>
<br><br>
<a href="javascript:history.go(-1)">Voltar</a>