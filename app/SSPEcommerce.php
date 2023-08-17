<?php

namespace App;

class SSPEcommerce
{
    public string $name = 'John Snow';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $modelName
     * @param int $modelId
     * @param string $analyticDataType
     * @param \DateTime $timestamp
     * @param int|null $userId
     * @return void
     */
    public function makeHit(
        string $modelName,
        int $modelId,
        string $analyticDataType,
        ?int $userId = null
    ): void
    {
        $modelHit = new \App\Models\ModelHit();
        $modelHit->model_name = $modelName;
        $modelHit->model_id = $modelId;
        $modelHit->analytic_data_type = $analyticDataType;
        $modelHit->timestamp = now();
        $modelHit->user_id = $userId;
        $modelHit->save();
    }

}
