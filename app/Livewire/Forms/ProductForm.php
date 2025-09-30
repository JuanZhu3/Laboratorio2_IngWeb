<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $productModel;
    

    public function rules(): array
    {
        return [
        ];
    }

    public function setProductModel(Product $productModel): void
    {
        $this->productModel = $productModel;
        
    }

    public function store(): void
    {
        $this->productModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->productModel->update($this->validate());

        $this->reset();
    }
}
