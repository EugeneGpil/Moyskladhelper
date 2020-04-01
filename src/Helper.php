<?php

namespace Moyskladhelper;

class Helper
{
    public static function getEntityTypeFromHref($href)
    {
        $entityPos = strpos($href, "/entity");
        $entityTypePos = $entityPos + strlen("/entity") + 1;
        $entityTypeAndIdStr = substr($href, $entityTypePos);
        $slashPos = strpos($entityTypeAndIdStr, "/");
        $entityType = substr($entityTypeAndIdStr, 0, $slashPos);
        return $entityType;
    }

    public static function getIdFromHref($href)
    {
        $startIdPosition = strrpos($href, "/") + 1;
        return substr($href, $startIdPosition);
    }
}