<?php

declare(strict_types=1);

namespace App\Infrastructure\Project\Model\Request;

use App\Infrastructure\Shared\DTO\AbstractDTO;
use Psr\Http\Message\ServerRequestInterface as Request;

class AddProjectDTO extends AbstractDTO
{
    public string $name;
    public string $description;
    public string $email;
    public int $status;
    public ?string $image;

    /**
     * @param array $content
     * @param array $dataToPlug
     */
    public function setData($content, $dataToPlug = [])
    {
        $this->status = (int) !empty($content['status']) ? $content['status'] : 0;
        $this->name = $content['name'];
        $this->description = $content['description'];
        $this->email = $content['email'];
        // must be last element
        $this->image ??= $content['image'];
    }
}