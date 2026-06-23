<?php

class Company {  
    public $name;
    public $location;
    public $tot_employees;

    private $avg_salary_per_employee = 40000;


    public static $total_global_expenses = 0;


    public function __construct($name, $location, $tot_employees = 0) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
    }


    public function printEmployeesInfo() {
        if ($this->tot_employees > 0) {
            echo "L’ufficio {$this->name} con sede in {$this->location} ha ben {$this->tot_employees} dipendenti.\n";
        } else {
            echo "L’ufficio {$this->name} con sede in {$this->location} non ha dipendenti.\n";
        }
    }

    public function calculateAndPrintAnnualExpense() {
        $annual_expense = $this->tot_employees * $this->avg_salary_per_employee;
        echo "L'azienda {$this->name} ha una spesa annuale di: €" . number_format($annual_expense, 0, ',', '.') . "\n";
        
        self::$total_global_expenses += $annual_expense;
    }

    public static function printGlobalExpenses() {
        echo "==================================================\n";
        echo "IL TOTALE ASSOLUTO DELLE SPESE DI TUTTE LE AZIENDE È:\n";
        echo "€" . number_format(self::$total_global_expenses, 0, ',', '.') . "\n";
        echo "==================================================\n";
    }
}

$company1 = new Company("Aulab", "Italia", 50);
$company2 = new Company("TechCorp", "Stati Uniti", 120);
$company3 = new Company("StartupX", "Spagna", 0); // Senza dipendenti
$company4 = new Company("EuroFood", "Francia", 35);
$company5 = new Company("BerlinDev", "Germania", 80);


echo "--- INFO DIPENDENTI ---\n";
$company1->printEmployeesInfo();
$company3->printEmployeesInfo();

echo "\n--- SPESE ANNUALI PER AZIENDA ---\n";
$company1->calculateAndPrintAnnualExpense();
$company2->calculateAndPrintAnnualExpense();
$company3->calculateAndPrintAnnualExpense();
$company4->calculateAndPrintAnnualExpense();
$company5->calculateAndPrintAnnualExpense();

echo "\n";

Company::printGlobalExpenses();

?>