<?php
namespace SONApi\V1\Rest\Clientes;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class ClientesResource extends AbstractResourceListener
{
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        $cliente = new ClientesEntity();
        $cliente->id = $data->id;
        $cliente->name = $data->name;
        $cliente->email = $data->email;

        return $cliente;
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        return new ApiProblem(405, 'The GET method has not been defined for individual resources');
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
        $cliente1 = new ClientesEntity();
        $cliente1->id = 1;
        $cliente1->name = "Fulano";
        $cliente1->email = "fulano@schoolofnet.com";
        $cliente2 = new ClientesEntity();
        $cliente2->id = 2;
        $cliente2->name = "Cicrano";
        $cliente2->email = "cicrano@schoolofnet.com";
        $cliente3 = new ClientesEntity();
        $cliente3->id = 3;
        $cliente3->name = "Beltrano";
        $cliente3->email = "Beltrano@schoolofnet.com";
        return [
            $cliente1,
            $cliente2,
            $cliente3
        ];
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}
