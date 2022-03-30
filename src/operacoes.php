<?php

class operacoes {
    public function carregaOperadores()
    {
        // if ($_SESSION['operadores']) {
        //     $this->carregaResultado();
        // }
        $_SESSION['operadores'] = $_POST['operadores'];
        $_SESSION['visor'] = '';
    }
    
    public function carregaValores() 
    {
        if ($_SESSION['valores'] && $_SESSION['operadores']) {
            $_SESSION['valor'] = $_SESSION['valor'] . $_POST['valores'];
            $_SESSION['visor'] = $_SESSION['valor'];
        } else if ($_SESSION['valores']) {
            $_SESSION['valores'] = $_SESSION['valores'] . $_POST['valores'];
            $_SESSION['visor'] = $_SESSION['valores'];
        } else {
            $_SESSION['valores'] = $_POST['valores'];
            $_SESSION['visor'] = $_SESSION['valores'];
        }

    }

    public function limpaInformacoes()
    {
        $_SESSION['valores'] = '';
        $_SESSION['valor'] = '';
        $_SESSION['operadores'] = '';
        $_SESSION['visor'] = '';
    }

    public function carregaResultado()
    {
        switch($_SESSION['operadores']) {
            case '+':
                $_SESSION['visor'] = $_SESSION['valores'] + $_SESSION['valor'];
                $_SESSION['valores'] = '';
                $_SESSION['valor'] = '';
                $_SESSION['operadores'] = '';
                break;
            case '-':
                $_SESSION['visor'] = $_SESSION['valores'] - $_SESSION['valor'];
                $_SESSION['valores'] = '';
                $_SESSION['valor'] = '';
                $_SESSION['operadores'] = '';
                break;
            case '*':
                $_SESSION['visor'] = $_SESSION['valores'] * $_SESSION['valor'];
                $_SESSION['valores'] = '';
                $_SESSION['valor'] = '';
                $_SESSION['operadores'] = '';
                break;
            case '/':
                $_SESSION['visor'] = $_SESSION['valores'] / $_SESSION['valor'];
                $_SESSION['valores'] = '';
                $_SESSION['valor'] = '';
                $_SESSION['operadores'] = '';
                break;
            default:
                $_SESSION['visor'] = 'ERRO';
        }
    }
}
