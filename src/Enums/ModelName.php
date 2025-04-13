<?php

declare(strict_types=1);

namespace GeminiAPI\Enums;

/**
 * @deprecated Use constants from GeminiAPI\Resources\ModelName instead
 */
enum ModelName: string
{
    case Default = 'models/text-bison-001';
    case GeminiPro = 'models/gemini-pro';
    case GeminiPro10 = 'models/gemini-1.0-pro';
    case GeminiPro10Latest = 'models/gemini-1.0-pro-latest';
    case GeminiPro15 = 'models/gemini-1.5-pro';
    case GeminiPro15Flash = 'models/gemini-1.5-flash';
    case GeminiProVision = 'models/gemini-pro-vision';
    case Embedding = 'models/embedding-001';
    case AQA = 'models/aqa';

    // Latest versions of the models
    case Gemini15Pro002 = 'models/gemini-1.5-pro-002';
    case Gemini15Flash002 = 'models/gemini-1.5-flash-002';
    case Gemini15Flash8B = 'models/gemini-1.5-flash-8b';
    case Gemini15Flash8BLatest = 'models/gemini-1.5-flash-8b-latest';
    case Gemini20Flash = 'models/gemini-2.0-flash';
    case Gemini20FlashLite = 'models/gemini-2.0-flash-lite';
    case Gemini20FlashLive001 = 'models/gemini-2.0-flash-live-001';
    case Gemini25ProPreview0325 = 'models/gemini-2.5-pro-preview-03-25';
    case Gemini25ProExp0325 = 'models/gemini-2.5-pro-exp-03-25';
    case GeminiEmbeddingExp = 'models/gemini-embedding-exp';
    case Imagen3 = 'models/imagen-3.0-generate-002';
    case Veo2 = 'models/veo-2.0-generate-001';
}
