<?php


class TaskEntity
{
    private string $name;
    private string $description;
    private Enum $status;

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
        $this->name;
    }

    public function getDescription():string
    {
        $this->description;
    }

    public function getStatus():Enum
    {
        $this->status;
    }
}
