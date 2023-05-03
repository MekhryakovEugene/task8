<?php

namespace Todo\Task;
use App\Models\Todo;

class TaskRepository
{
    public function save(TaskEntity $entity): int
    {
        $todoModel = new Todo();
        $todoModel->name = $entity->getName();
        $todoModel->description = $entity->getDescription();
        $todoModel->save();
        return $todoModel->id;

        /*
        $todoModel = Todo::create(
            [
            $entity->getName(),
            $entity->getDescription(),
            $entity->getStatus()
            ]);
        return $todoModel->id;
        */
    }
}
