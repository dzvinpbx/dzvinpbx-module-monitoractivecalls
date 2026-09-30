<?php
/**
 * Copyright © MIKO LLC
 * Licensed under the GNU General Public License v3.0 or later;
 * see the LICENSE file in the root of this repository.
 * Written by Alexey Portnov, 2 2019
 */

/*
 * https://docs.phalcon.io/4.0/en/db-models
 *
 */

namespace Modules\ModuleMonitorActiveCalls\Models;

use DzvinPBX\Modules\Models\ModulesModelsBase;

class UsersSettings extends ModulesModelsBase
{

    /**
     * @Primary
     * @Identity
     * @Column(type="integer", nullable=false)
     */
    public $id;

    /**
     *
     * @Column(type="string", nullable=true, default="")
     */
    public $userId = '';

    /**
     *
     * @Column(type="string", nullable=true)
     */
    public $key;

    /**
     *
     * @Column(type="string", nullable=true)
     */
    public $value = '';

    public static function getDynamicRelations(&$calledModelObject): void
    {
    }

    public function initialize(): void
    {
        $this->setSource('m_UsersSettings');
        parent::initialize();
    }


}