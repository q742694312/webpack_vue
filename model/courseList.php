<?php

    header('Content-type:text/html;charset="utf8"');

    $courseList = array(
        array(
            'courseName'=>'化学科学与探究0',
            'child'=>array(
                array(
                    'courseName'=>'化学科学特点',
                    'child'=>array(
                        array('courseName'=>'化学的主要特点与意义'),
                        array('courseName'=>'化学科学的主要研究对象'),
                        array('courseName'=>'化学的发展趋势'),
                        array('courseName'=>'物质的组成、结构和性质'),
                        array('courseName'=>'化学反应的实质'),
                        array('courseName'=>'化学反应的基本原理'),
                        array('courseName'=>'化学反应的能量变化规律'),
                        array('courseName'=>'绿色化学')
                    )
                ),
                array(
                    'courseName'=>'化学研究方法与工业化学',
                    'child'=>array(
                        array('courseName'=>'化学的主要特点与意义1'),
                        array('courseName'=>'化学科学的主要研究对象'),
                        array('courseName'=>'化学的发展趋势'),
                        array('courseName'=>'物质的组成、结构和性质'),
                        array('courseName'=>'化学反应的实质'),
                        array('courseName'=>'化学反应的基本原理'),
                        array('courseName'=>'化学反应的能量变化规律'),
                        array('courseName'=>'绿色化学')
                    )
                )
            )
        ),
        array(
            'courseName'=>'化学科学与探究1',
            'child'=>array(
                array(
                    'courseName'=>'化学科学特点',
                    'child'=>array(
                        array('courseName'=>'化学的主要特点与意义'),
                        array('courseName'=>'化学科学的主要研究对象'),
                        array('courseName'=>'化学的发展趋势'),
                        array('courseName'=>'物质的组成、结构和性质'),
                        array('courseName'=>'化学反应的实质'),
                        array('courseName'=>'化学反应的基本原理'),
                        array('courseName'=>'化学反应的能量变化规律'),
                        array('courseName'=>'绿色化学')
                    )
                ),
                array(
                    'courseName'=>'化学研究方法与工业化学',
                    'child'=>array(
                        array('courseName'=>'化学的主要特点与意义1'),
                        array('courseName'=>'化学科学的主要研究对象'),
                        array('courseName'=>'化学的发展趋势'),
                        array('courseName'=>'物质的组成、结构和性质'),
                        array('courseName'=>'化学反应的实质'),
                        array('courseName'=>'化学反应的基本原理'),
                        array('courseName'=>'化学反应的能量变化规律'),
                        array('courseName'=>'绿色化学')
                    )
                )
            )
        ),
        array(
            'courseName'=>'化学科学与探究2',
            'child'=>array(
                array(
                    'courseName'=>'化学科学特点',
                    'child'=>array(
                        array('courseName'=>'化学的主要特点与意义'),
                        array('courseName'=>'化学科学的主要研究对象'),
                        array('courseName'=>'化学的发展趋势'),
                        array('courseName'=>'物质的组成、结构和性质'),
                        array('courseName'=>'化学反应的实质'),
                        array('courseName'=>'化学反应的基本原理'),
                        array('courseName'=>'化学反应的能量变化规律'),
                        array('courseName'=>'绿色化学')
                    )
                ),
                array(
                    'courseName'=>'化学研究方法与工业化学',
                    'child'=>array(
                        array('courseName'=>'化学的主要特点与意义1'),
                        array('courseName'=>'化学科学的主要研究对象'),
                        array('courseName'=>'化学的发展趋势'),
                        array('courseName'=>'物质的组成、结构和性质'),
                        array('courseName'=>'化学反应的实质'),
                        array('courseName'=>'化学反应的基本原理'),
                        array('courseName'=>'化学反应的能量变化规律'),
                        array('courseName'=>'绿色化学')
                    )
                )
            )
        )
    );

    echo json_encode($courseList);