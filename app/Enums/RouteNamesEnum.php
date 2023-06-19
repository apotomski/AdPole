<?php

namespace App\Enums;

enum RouteNamesEnum: string
{
    case AnnouncementList = 'announcements.list';
    case AnnouncementCreate = 'announcements.create';
    case AnnouncementStore = 'announcements.store';
    case AnnouncementEdit = 'announcements.edit';
    case AnnouncementUpdate = 'announcements.update';
    case AnnouncementDestory = 'announcements.destroy';
}