<?php
namespace Api\V1\Rpc\Me;

class MeControllerFactory
{
    public function __invoke($controllers)
    {
        return new MeController();
    }
}
