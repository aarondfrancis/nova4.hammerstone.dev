<?php
/**
 * @author Aaron Francis <aarondfrancis@gmail.com|https://twitter.com/aarondfrancis>
 */

namespace App\Filters;

use Hammerstone\Refine\Conditions\BooleanCondition;
use Hammerstone\Refine\Conditions\DateCondition;
use Hammerstone\Refine\Conditions\DateWithTimeCondition;
use Hammerstone\Refine\Conditions\NumericCondition;
use Hammerstone\Refine\Conditions\OptionCondition;
use Hammerstone\Refine\Conditions\PresenceCondition;
use Hammerstone\Refine\Conditions\TextCondition;
use Hammerstone\Refine\Filter;

class UserFilter extends Filter
{

    public function conditions()
    {
        return [
            TextCondition::make('name', 'Name'),

            PresenceCondition::make('is_subscriber', 'Subscriber')
                ->attribute('name')
                ->nullsAreFalse(),

            OptionCondition::make('name_multi', 'Referral Source')
                ->attribute('name')
                ->options([
                    'twitter' => 'Twitter',
                    'linkedin' => 'LinkedIn',
                    'fb' => 'Facebook'
                ]),

            DateWithTimeCondition::make('created_at', 'Created At'),

            NumericCondition::make('id', 'ID'),

        ];
    }
}
