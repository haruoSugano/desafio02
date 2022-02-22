<?php

namespace Heliosugano\Desafio02\Beans;

trait Auth
{
    private $usuario;
    private $senha;
    private $token;

    /**
     * @param string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @param string $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

}