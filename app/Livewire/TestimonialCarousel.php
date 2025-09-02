<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialCarousel extends Component
{
    public $testimonials = [];

    public $currentSlide = 0;

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->testimonials);
    }

    public function prevSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->testimonials)) % count($this->testimonials);
    }

    public function goToSlide($index)
    {
        $this->currentSlide = $index;
    }

    public function render()
    {
        return view('livewire.testimonial-carousel');
    }
}