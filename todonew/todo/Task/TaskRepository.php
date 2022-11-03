<?php

namespace Todo\Task;

class TaskRepository
{
    public function save(TaskEntity $entity): int
    {
        $todoModel = Todo::create(
            $entity->getName(),
            $entity->getDescription(),
            $entity->getStatus());
        return $todoModel->id;
    }
}
