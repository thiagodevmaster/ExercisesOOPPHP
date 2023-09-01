<?php

/***
 * Exercício 02 (pt-Br):
 *  A fim de representar empregados em uma firma, 
 * crie uma classe chamada Empregado que inclui as três informações a seguir como atributos:
 * 
 * um primeiro nome
 * um sobrenome
 * um salário mensal.
 * 
 * Sua classe deve ter um construtor que inicializa os três atributos. 
 * Forneça um método set e get para cada atributo. 
 * Se o salário mensal não for positivo, configure-o como 0.0. 
 * Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.
 * 
 * *>>>***>>>>****>>>>>****>>>>****>>>>>****>>>>****>>>>>****>>>>****>>>>>****>>>>****>>>>>****>>>>****>>>>>****>>>>****>>>>>****>>>>****>>>>>****>>>>****>>>>>
 * 
 * Exercise 02 (Eng): 
 * In order to represent employees in a firm, 
 * create a class called Employee that includes the following three pieces of information as attributes:
 * 
 * a first name
 * a last name
 * a monthly salary.
 * 
 * Your class must have a constructor that initializes the three attributes. 
 * Provide a set and get method for each attribute. 
 * If the monthly salary is not positive, set it to 0.0. 
 * Create a method that displays the annual salary and one that gives a 10% increase in salary
 */

class Employee
{

    private float $salary;

    public function __construct(
        private string $name,
        private string $lastName,
        float $salary
    )
    {
        $this->salary = $this->validateSalary($salary);
    }

    protected function validateSalary(float $salary): float
    {
        return $salary < 0 ? 0.0 : $salary;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
            return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
            $this->lastName = $lastName;

            return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    public function getAnnualSalary(): void
    {
       echo $this->salary * 12 . PHP_EOL;
    }

    public function increaseSalaryByTenPercent(): void
    {
        $increment = $this->salary * 10 / 100;
        $this->salary += $increment;
    }


}

$employee = new Employee("Thiago", "Dantas", 4600);
$employee->getAnnualSalary();
$employee->increaseSalaryByTenPercent();
$employee->getAnnualSalary();