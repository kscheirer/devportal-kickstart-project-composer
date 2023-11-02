<?php

/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apigee\Edge\Api\ApigeeX\Controller;

use Apigee\Edge\Api\ApigeeX\Structure\PagerInterface;

/**
 * Trait PaginatedEntityListingControllerTrait.
 *
 * @see \Apigee\Edge\Api\ApigeeX\Controller\PaginatedEntityListingControllerInterface
 */
trait PaginatedEntityListingControllerTrait
{
    /**
     * {@inheritdoc}
     *
     * @return \Apigee\Edge\Entity\EntityInterface[]
     */
    public function getEntities(PagerInterface $pager = null, string $key_provider = 'id', $queryparams = []): array
    {
        return $this->listEntities($pager, $queryparams, $key_provider);
    }

    /**
     * {@inheritdoc}
     */
    abstract protected function listEntities(PagerInterface $pager = null, array $query_params = [], string $key_provider = 'id'): array;
}
