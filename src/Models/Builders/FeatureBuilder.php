<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\FeatureFlags\Models\Builders;

use Illuminate\Database\Eloquent\Builder;
use JustSteveKing\Laravel\FeatureFlags\Models\Builders\Concerns\HasActiveAndInactive;

class FeatureBuilder extends Builder
{
    use HasActiveAndInactive;
}
