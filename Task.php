<?php

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone = null;
    private ?int $priority = null;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];

    public function __construct(User $user, string $description)
    {
        $this->user = $user;
        $this->description = $description;

        $this->dateCreated = new DateTime();
        $this->dateUpdated = new DateTime();
    }

    public function addComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }

    public function markAsDone()
    {
        if (!$this->isDone) {
            $this->isDone = true;
            $this->dateUpdated = new DateTime();
            $this->dateDone = new DateTime();
        }
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }

    /**
     * @return int
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
        $this->dateUpdated = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @return DateTime
     */
    public function getDateDone(): ?DateTime
    {
        return $this->dateDone;
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
