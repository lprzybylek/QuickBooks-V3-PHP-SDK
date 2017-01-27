/*******************************************************************************
* Copyright 2016 Intuit
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
*     http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*******************************************************************************/
<?php

namespace Intuit\Ipp\Utility;

/**
 * Format used to compress data.
 */
class CompressionFormat
{
    /**
     * Default value used to indicate that compression is not specified in the config.
     * @var string Default
     */
    //const Default='Default';

    /**
     * No compression.
     * @var string None
     */
    const None='None';

    /**
     * GZip compression.
     * @var string GZip
     */
    const GZip='GZip';

    /**
     * Deflate compression.
     * @var string Deflate
     */
    const Deflate='Deflate';

}