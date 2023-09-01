<?php

// Exercicio 01

// Crie uma classe chamada Invoice 
// que possa ser utilizado por uma loja de suprimentos de informática para representar uma fatura de um item vendido na loja. 
// Uma fatura deve incluir as seguintes informações como atributos

// - número do item faturado,
// - descrição do item
// - quantidade comprada do item
// - preço unitário do item


// Sua classe deve ter um construtor que inicialize os quatro atributos. 
// Se a quantidade não for positiva, ela deve ser configurada como 0. 
// Se o preço por item não for positivo ele deve ser configurado como 0.0. 
// Forneça um método set e um método get para cada variável de instância. 
// Além disso, forneça um método chamado getInvoiceAmount 
// que calcula o valor da fatura (isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor.

class Invoice
{
    private int $qnt;
    private float $price;

    public function __construct(
        private string $code, 
        private string $description, 
        int $qnt, 
        float $price
    )
    {
        $this->qnt = $this->validateQnt($qnt);
        $this->price = $this->validatePrice($price);
    }

    protected function validateQnt(int $qnt): int
    {
        return ($qnt < 0) ? 0 : $qnt; 
    }
    
    protected function validatePrice(float $price): float
    {
        return ($price < 0) ? 0.0 : $price; 
    }

    public function getQnt(): int
    {
        return $this->qnt;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCode(): string 
    {
        return $this->code;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setQnt(int $qnt): void
    {
        $this->validateQnt($qnt);
    }

    public function setPrice(float $price): void
    {
        $this->validatePrice($price);
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getInvoice(): float
    {
        return $this->qnt * $this->price;
    }

}


$invoice = new Invoice("00001", "mouse", 12, 7.5);
echo "Product: " . $invoice->getDescription() . PHP_EOL;
echo "Code: " . $invoice->getCode() . PHP_EOL;
echo "Quantity: " . $invoice->getQnt() . PHP_EOL;
echo "Price per unit: " . $invoice->getPrice() . PHP_EOL;
echo "total: " . $invoice->getInvoice() . PHP_EOL;