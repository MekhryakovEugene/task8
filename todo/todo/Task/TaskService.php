<?php


namespace todo\todo;


class TaskService
{
    private TaskRepository $repository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->repository = $taskRepository;
    }

    public function create(TaskCreatePayload $payload): TaskEntity
    {
        $taskEntity = new TaskEntity(
            $payload->getName(),
            $payload->getDescription(),
            $payload->getName()
        );

        $taskId = $this->repository->save($taskEntity);

        $taskEntity->setId($taskId);

        return $taskEntity;
    }
}
