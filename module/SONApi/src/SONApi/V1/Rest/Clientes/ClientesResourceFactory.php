<?php
namespace SONApi\V1\Rest\Clientes;

class ClientesResourceFactory
{
    public function __invoke($services)
    {
        return new ClientesResource();
    }
}
