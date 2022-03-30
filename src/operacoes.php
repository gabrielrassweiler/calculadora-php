<?php

class operacoes {
    /**
     * Salva o operador digitado
     */
    public function carregaOperadores()
    {
        if (!$_SESSION['valores'] && $_SESSION['visor']) {
            $_SESSION['valores'] = $_SESSION['visor'];
        }

        if ($_SESSION['operadores'] && $_SESSION['valores'] && $_SESSION['valor']) {
            $this->resultadoByOperador();
        }
        $_SESSION['operadores'] = $_POST['operadores'];
        $_SESSION['visor'] = '';
    }

    /**
     * Realiza o calculo dos valores em cima de um calculo que ja foi realizado
     */
    public function resultadoByOperador()
    {
        switch($_SESSION['operadores']) {
            case '+':
                $_SESSION['valores'] = $_SESSION['valores'] + $_SESSION['valor'];
                $_SESSION['visor'] = '';
                $_SESSION['valor'] = '';
                break;
            case '-':
                $_SESSION['valores'] = $_SESSION['valores'] - $_SESSION['valor'];
                $_SESSION['visor'] = '';
                $_SESSION['valor'] = '';
                break;
            case '*':
                $_SESSION['valores'] = $_SESSION['valores'] * $_SESSION['valor'];
                $_SESSION['visor'] = '';
                $_SESSION['valor'] = '';
                break;
            case '/':
                $_SESSION['valores'] = $_SESSION['valores'] / $_SESSION['valor'];
                $_SESSION['visor'] = '';
                $_SESSION['valor'] = '';
                break;
        }
    }

    /**
     * Salva os valores digitados
     */
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

    /**
     * Limpa as informações dos campos
     */
    public function limpaInformacoes()
    {
        $_SESSION['valores'] = '';
        $_SESSION['valor'] = '';
        $_SESSION['operadores'] = '';
        $_SESSION['visor'] = '';
    }
    
    /**
     * Realiza o calculo dos valores digitados
     */
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
        }
    }
}
