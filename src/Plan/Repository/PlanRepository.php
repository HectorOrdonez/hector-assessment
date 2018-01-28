<?php
namespace Virtuagym\Plan\Repository;

use Virtuagym\Plan\Entity\Plan;
use Virtuagym\Plan\Entity\PlanCollection;
use Virtuagym\Plan\PlanRepositoryInterface;

class PlanRepository implements PlanRepositoryInterface
{

    /**
     * @inheritdoc
     */
    public function findAll()
    {
        return Plan::all();
    }

    /**
     * @inheritdoc
     */
    public function findOneById($id)
    {
        // TODO: Implement findOneById() method.
    }

    /**
     * @inheritdoc
     */
    public function create(Plan $plan)
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritdoc
     */
    public function update(Plan $plan)
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritdoc
     */
    public function destroy(Plan $plan)
    {
        // TODO: Implement destroy() method.
    }
}
