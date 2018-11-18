<?php
namespace SimpleCarousel;

return [
    'view_manager' => [
        'template_path_stack' => [
            dirname(__DIR__) . '/view',
        ]
    ],
	'block_layouts' => [
        'factories' => [
            'carousel' => Service\BlockLayout\CarouselFactory::class,
        ],
    ],
    'form_elements' => [
        'invokables' => [
            Form\CarouselBlockForm::class => Form\CarouselBlockForm::class,
        ],
    ],
    'DefaultSettings' => [
        'CarouselBlockForm' => [
            'height' => '500px',
            'duration' => 200,
            'perPage' => 1,
            'loop' => true,
            'draggable' => true,
            'title' => '',
            'autoSlide' => false,
            'autoSlideInt' => 5000
        ]
    ]
];