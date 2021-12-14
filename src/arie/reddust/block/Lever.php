<?php
declare(strict_types=1);

namespace arie\reddust\block;

use pocketmine\block\Lever as PmLever;

class Lever extends PmLever {
    public function canBeFlowedInto() : bool{
        return false;
    }
}