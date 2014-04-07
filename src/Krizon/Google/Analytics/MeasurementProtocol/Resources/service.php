<?php

/*
 * This file is part of the php-ga-measurement-protocol package.
 *
 * (c) Kristian Zondervan <kristian.zondervan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
    'name'       => 'Google Analytics Measurement Protocol PHP Client',
    'operations'            => array(
        'abstract.collect' => array(
            'httpMethod' => 'GET',
            'uri'       => 'collect',
            'summary'   => 'Collect data',
            'parameters' => array(
                'v' => array(
                    'location' => 'query',
                    'default'=> 1,
                    'static' => true
                ),
                'tid' => array(
                    'location' => 'query',
                    'required' => true,
                ),
                'cid' => array(
                    'location' => 'query',
                    'required' => true
                ),
                'ua' => array(
                    'location' => 'header',
                    'sentAs' => 'User-Agent',
                    'default' => 'PHP GA Measurement Protocol'
                ),
                'cm1' => array(
                    'description' => 'Custom metric 1',
                    'location' => 'query',
                ),
                'cm2' => array('location' => 'query'),
                'cm3' => array('location' => 'query'),
                'cm4' => array('location' => 'query'),
                'cm5' => array('location' => 'query'),
                'cm6' => array('location' => 'query'),
                'cm7' => array('location' => 'query'),
                'cm8' => array('location' => 'query'),
                'cm9' => array('location' => 'query'),
                'cm10' => array('location' => 'query'),
                'cm11' => array('location' => 'query'),
                'cm12' => array('location' => 'query'),
                'cm13' => array('location' => 'query'),
                'cm14' => array('location' => 'query'),
                'cm15' => array('location' => 'query'),
                'cm16' => array('location' => 'query'),
                'cm17' => array('location' => 'query'),
                'cm18' => array('location' => 'query'),
                'cm19' => array('location' => 'query'),
                'cm20' => array('location' => 'query'),
                'cd1' => array(
                    'description' => 'Custom dimension 1',
                    'location' => 'query',
                ),
                'cd2' => array('location' => 'query'),
                'cd3' => array('location' => 'query'),
                'cd4' => array('location' => 'query'),
                'cd5' => array('location' => 'query'),
                'cd6' => array('location' => 'query'),
                'cd7' => array('location' => 'query'),
                'cd8' => array('location' => 'query'),
                'cd9' => array('location' => 'query'),
                'cd10' => array('location' => 'query'),
                'cd11' => array('location' => 'query'),
                'cd12' => array('location' => 'query'),
                'cd13' => array('location' => 'query'),
                'cd14' => array('location' => 'query'),
                'cd15' => array('location' => 'query'),
                'cd16' => array('location' => 'query'),
                'cd17' => array('location' => 'query'),
                'cd18' => array('location' => 'query'),
                'cd19' => array('location' => 'query'),
                'cd20' => array('location' => 'query'),
            )
        ),
        'pageview' => array(
            'extends' => 'abstract.collect',
            'parameters' => array(
                't' => array(
                    'description' => 'Pageview hit type',
                    'location' => 'query',
                    'default' => 'pageview',
                    'static' => true
                ),
                'dh' => array(
                    'description' => 'Document hostname',
                    'location' => 'query',
                ),
                'dp' => array(
                    'description' => 'Page',
                    'location' => 'query',
                ),
                'dt' => array(
                    'description' => 'Title',
                    'location' => 'query',
                ),
            )
        ),
        'event' => array(
            'extends' => 'abstract.collect',
            'parameters' => array(
                't' => array(
                    'description' => 'Event hit type',
                    'location' => 'query',
                    'default' => 'event',
                    'static' => true
                ),
                'ec' => array(
                    'description' => 'Event category',
                    'location' => 'query',
                ),
                'ea' => array(
                    'description' => 'Event action',
                    'location' => 'query',
                ),
                'el' => array(
                    'description' => 'Event label',
                    'location' => 'query',
                ),
                'ev' => array(
                    'description' => 'Event value',
                    'location' => 'query',
                )
            )
        ),
        'transaction' => array(
            'extends' => 'abstract.collect',
            'parameters' => array(
                't' => array(
                    'description' => 'Transaction hit type',
                    'location' => 'query',
                    'default' => 'transaction',
                    'static' => true
                ),
                'ti' => array(
                    'description' => 'transaction ID',
                    'location' => 'query',
                    'required' => true
                ),
                'ta' => array(
                    'description' => 'Transaction affiliation',
                    'location' => 'query',
                ),
                'tr' => array(
                    'description' => 'Transaction revenue',
                    'location' => 'query',
                ),
                'ts' => array(
                    'description' => 'Transaction shipping',
                    'location' => 'query',
                ),
                'tt' => array(
                    'description' => 'Transaction tax',
                    'location' => 'query',
                ),
                'cu' => array(
                    'description' => 'Currency code',
                    'location' => 'query',
                ),
            )
        ),
        'item' => array(
            'extends' => 'abstract.collect',
            'parameters' => array(
                't' => array(
                    'description' => 'Item hit type',
                    'location' => 'query',
                    'default' => 'item',
                    'static' => true
                ),
                'ti' => array(
                    'description' => 'transaction ID',
                    'location' => 'query',
                    'required' => true
                ),
                'in' => array(
                    'description' => 'Item name',
                    'location' => 'query',
                    'required' => true
                ),
                'ip' => array(
                    'description' => 'Item price',
                    'location' => 'query',
                ),
                'iq' => array(
                    'description' => 'Item quantity',
                    'location' => 'query',
                ),
                'ic' => array(
                    'description' => 'Item code / SKU',
                    'location' => 'query',
                ),
                'iv' => array(
                    'description' => 'Item variation / category',
                    'location' => 'query',
                ),
                'cu' => array(
                    'description' => 'Currency code',
                    'location' => 'query',
                ),
            )
        ),
        'social' => array(
            'extends' => 'abstract.collect',
            'parameters' => array(
                't' => array(
                    'description' => 'Social hit type',
                    'location' => 'query',
                    'default' => 'social',
                    'static' => true
                ),
                'sa' => array(
                    'description' => 'Social Action',
                    'location' => 'query',
                    'required' => true
                ),
                'sn' => array(
                    'description' => 'Social Network',
                    'location' => 'query',
                    'required' => true
                ),
                'st' => array(
                    'description' => 'Social Target',
                    'location' => 'query',
                    'required' => true
                ),
            )
        ),
        'exception' => array(
            'extends' => 'abstract.collect',
            'parameters' => array(
                't' => array(
                    'description' => 'Exception hit type',
                    'location' => 'query',
                    'default' => 'exception',
                    'static' => true
                ),
                'exd' => array(
                    'description' => 'Exception description',
                    'location' => 'query'
                ),
                'exf' => array(
                    'description' => 'Exception is fatal?',
                    'location' => 'query'
                )
            )
        )
    )
);
