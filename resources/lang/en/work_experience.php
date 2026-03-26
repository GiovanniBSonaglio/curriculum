<?php

return [
    'title' => 'WORK EXPERIENCE',

    'experiences' => [
        // Qorvo
        'qorvo' => [
            'company_name' => 'Qorvo',
            'positions' => [
                [
                    'position' => 'Ingénieur Applications Logiciel - CDI',
                    'info' => [
                        'date' => '09/2024 - Present',
                        'location' => 'Toulouse, France',
                    ],
                    'activities' => [
                        'Development of embedded C applications for UWB chip validation and feature prototyping and development of python-based automation tools to support validation and PoCs.',
                        'Design and implementation of RTOS-based firmware integrating Qorvo UWB transceivers with external MCU hosts.',
                        'Support to QA and FAEs for customer integration and debugging. Analysis and troubleshooting of hardware-software interaction issues in real-time environments.',
                        'Production of technical documentation and integration guidelines for customer adoption.',
                    ]
                ],
                [
                    'position' => 'Alternant as Software Engineer',
                    'info' => [
                        'date' => '09/2023 - 08/2024',
                        'location' => 'Toulouse, France',
                    ],
                    'activities' => [
                        'Designed the architecture and implemented a full C/C++ chip emulator for UNIX systems, reproducing chip behavior at software level to support feature validation and enables CI-based automated testing without dependency on physical hardware.',
                        'Collaborated with firmware and validation teams to align emulator behavior with specifications.',
                    ]
                ]
            ]
        ],

        // Capgemini
        // 'capgemini' => [
        //     'company_name' => 'Capgemini Engineering',
        //     'pos1' => [
        //         'position' => 'Internship as Software Engineer',
        //         'info' => [
        //             'date' => '06/2023 - 09/2023',
        //             'location' => 'Toulouse, France',
        //         ],
        //         'activities' => [
        //             'item1' => 'Development of new features in the matlab models and C calculation scripts of the flight management system.',
        //             'item2' => 'Implemented a python script for the generation of a report and graph of the matlab models dependencies in order to facilitate future developments',
        //             'item3' => 'Direct contact with client in order to implement new demands and solve issues of the flight management system.'
        //         ]
        //     ]
        // ],

        // Khomp
        'khomp' => [
            'company_name' => 'Khomp',
            'positions' => [
                [
                    'position' => 'Software Engineer - CDI',
                    'info' => [
                        'date' => '04/2022 - 10/2022',
                        'location' => 'Florianópolis, Brazil',
                    ],
                    'activities' => [
                        'C/C++ development for Khomp\'s Virtual Session Border Controller (vSBC), a Linux-based telecom infrastructure platform handling VoIP/SIP traffic.',
                        'Contributed to the release of a major software version introducing WebRTC support and architectural updates',
                        'Performed debugging and root-cause analysis in production telecom environments and provided technical support during customer integrations and large-scale deployments.'
                    ]
                ],
                [
                    'position' => 'Internship as Software Engineer',
                    'info' => [
                        'date' => '10/2020 - 03/2022',
                        'location' => 'Florianópolis, Brazil',
                    ],
                    'activities' => [
                        'Contributed to the development and maintenance of the vSBC, written primarily in C/C++. Also contributed to kernel-level and system-level debugging.',
                        'Assisted in maintaining and extending the web-based management interface (PHP / JavaScript).',
                        'Worked within Git/GitLab workflows and CI pipelines for version control and automated builds.'
                    ]
                ]
            ]
        ],

        // // Equipe Digital
        // 'equipe_digital' => [
        //     'company_name' => 'Equipe Digital',
        //     'positions' => [
        //         [
        //             'position' => 'Internship as Full Stack Web Developer',
        //             'info' => [
        //                 'date' => '08/2019 - 10/2020',
        //                 'location' => 'Florianópolis, Brazil',
        //             ],
        //             'activities' => [
        //                 'Web development (PHP/JS) of web pages and web applications using the company custom MVC framework, while also being highly involved with customer support.',
        //                 'Management, maintenance and development of databases and web hosting platforms.'
        //             ]
        //         ]
        //     ]
        // ],

        // Oi
        'oi' => [
            'company_name' => 'Oi S.A.',
            'positions' => [
                [
                    'position' => 'Internship as Software Engineer',
                    'info' => [
                        'date' => '11/2015 - 09/2017',
                        'location' => 'Florianópolis, Brazil',
                    ],
                    'activities' => [
                        'Contributed to improving operational efficiency trough development of automation tools using PHP and Shell scripting for monitoring and management of telecom backbone infrastructure. Built internal web systems for control, diagnostics, and visualization of the automated processes.',
                        'Supported development and maintenance of MySQL databases used by monitoring tools.',
                    ]
                ]
            ]
        ]
    ]
];