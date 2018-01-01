<?php

namespace Phpactor\Filesystem\Domain;

use Phpactor\Filesystem\Domain\FilesystemRegistry;

class FallbackFilesystemRegistry implements FilesystemRegistry
{
    /**
     * @var FilesystemRegistry
     */
    private $registry;

    /**
     * @var string
     */
    private $fallback;

    public function __construct(FilesystemRegistry $registry, string $fallback)
    {
        $this->registry = $registry;
        $this->fallback = $fallback;
    }

    public function get(string $name): Filesystem
    {
        return $this->registry->get($name);
    }

    public function has(string $name)
    {
        return $this->registry->has($name);
    }

    public function names(): array
    {
        return $this->registry->names();
    }
}
