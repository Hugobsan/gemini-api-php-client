<?php

declare(strict_types=1);

namespace GeminiAPI\Resources\Parts;

use GeminiAPI\Enums\MimeType;
use JsonSerializable;

use function json_encode;

class FilePart implements PartInterface, JsonSerializable
{
    private readonly string $mimeTypeValue;
    
    public function __construct(
        public readonly MimeType|string $mimeType,
        public readonly string $data,
    ) {
        $this->mimeTypeValue = $mimeType instanceof MimeType ? $mimeType->value : $mimeType;
    }

    /**
     * @return array{
     *     inlineData: array{
     *         mimeType: string,
     *         data: string,
     *     },
     * }
     */
    public function jsonSerialize(): array
    {
        return [
            'inlineData' => [
                'mimeType' => $this->mimeTypeValue,
                'data' => $this->data,
            ],
        ];
    }

    public function __toString(): string
    {
        return json_encode($this) ?: '';
    }
}
