<?php

class Task
{
    private $description;
    private bool $isDone = false;

   public function __construct(string $description)
   {
       $this->description = $description;
   }
   public function getDescription(): string
   {
       return $this->description;
   }

   public function setDescription(string $description): void
   {
       $this->description = $description;
   }

   public function isDone(): bool
   {
       return $this->isDone;
   }

   public function setIsDone(bool $isDone): void
   {
       $this->isDone = $isDone;
   }

   public function getIsDone()
   {
    return $this->isDone;
}
}