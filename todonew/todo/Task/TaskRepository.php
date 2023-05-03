<?php

namespace Todo\Task;
use App\Models\Todo;

class TaskRepository
{
    public function save(TaskEntity $entity): int
    {
        $todoModel = Todo::create(
            [
            $entity->getName(),
            $entity->getDescription(),
            $entity->getStatus()
            ]);
        return $todoModel->id;
    }
}
