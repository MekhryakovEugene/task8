<?php

namespace Todo\Task;

class TaskCreatePayload
{
    public function __construct(
        string $name,
        string $description,
        string $status
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getDescription():string
    {
        return $this->description;
    }

    public function getStatus():int
    {
        return $this->status;
    }
}
