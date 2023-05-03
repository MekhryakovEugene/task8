<?php

namespace Todo\Task;

class TaskEntity
{
    private string $name;
    private string $description;
    private string $status;

    public function __construct(
        $name,
        $description,
        $status
    )
    {
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

    public function getStatus():string
    {
        return $this->status;
    }
}
