<?php
/**
 * @package   Gantry5
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2017 RocketTheme, LLC
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Gantry\Framework;

use Gantry\Component\Assignments\AbstractAssignments;
use RocketTheme\Toolbox\Event\Event;

class Assignments extends AbstractAssignments
{
    protected $platform = 'WordPress';

    public function types()
    {
        $types = [
            'context',
            'menu',
            'post',
            'taxonomy',
            'archive'
        ];

        $gantry = Gantry::instance();

        $event = new Event;
        $event->types = $types;

        $gantry->fireEvent('assignments.types', $event);

        return apply_filters('g5_assignments_types', $event->types);
    }


    public function getPage()
    {
        $list = parent::getPage();

        do_action('g5_assignments_page', $list);

        return $list;
    }
}
