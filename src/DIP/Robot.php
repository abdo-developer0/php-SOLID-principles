<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\DIP;

class Robot
{
    /**
     * It can cuting the bidza.
     * 
     * @param AbstractTool $tool
     * @return void
     * @example $robot->cutBidzaWith(new BidzaCuterTool(new Bidza));
     * @example $robot->cutBidzaWith(new KnifeTool(new Bidza));
     */
    public function cutBidzaWith(AbstractTool $tool): void
    {
        $tool->cut();
    }
}