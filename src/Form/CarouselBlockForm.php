<?php
namespace SimpleCarousel\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class CarouselBlockForm extends Form
{
	public function init()
	{
		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][height]',
            'type' => Element\Text::class,
            'options' => [
                'label' => 'Carousel height',
                'info' => 'Please enter a number with CSS units.',
            ],
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][duration]',
            'type' => Element\Number::class,
            'options' => [
				'label' => 'Duration (milliseconds)',
				'info' => 'Slide transition duration in milliseconds.'
            ],
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][perPage]',
            'type' => Element\Number::class,
            'options' => [
				'label' => 'Image Per page',
				'info' => 'The number of slides to be shown.'
			],
			'attributes' => [
				'min' => 1,
                'max' => 10,
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][loop]',
			'type' => Element\Checkbox::class,
            'options' => [
				'label' => 'Loop',
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][draggable]',
			'type' => Element\Checkbox::class,
            'options' => [
				'label' => 'Draggable',
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][title]',
			'type' => Element\Text::class,
            'options' => [
				'label' => 'Title (option)',
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][autoSlide]',
			'type' => Element\Checkbox::class,
            'options' => [
				'label' => 'Auto Slide',
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][autoSlideInt]',
			'type' => Element\Text::class,
            'options' => [
				'label' => 'Slide Interval (milliseconds)',
				'info' => 'Shows next slide every given millisecond.'
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][wrapStyle]',
			'type' => Element\Text::class,
            'options' => [
				'label' => 'image wrapper Style',
			]
		]);
		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][imgStyle]',
			'type' => Element\Text::class,
            'options' => [
				'label' => 'img tag Style',
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][ui_background]',
			'type' => Element\Text::class,
			'options' => [
				'label' => 'siema UI style',
				'info' => 'Styling #siema-ui including UI element. commonly used for background setup.'
			]
		]);
	}
}
