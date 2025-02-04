<?php

//--------------------- Dichiaramo una classe-----------------------------------------------------------------
class Company {

    public $name;             
    public $location;           
    public $tot_employees = 0;  
    public $annual_expenses;   




    // Per tenere conto di quanti oggetti di classe Company ci possiamo aiutare tramite il public static, difatti gli attributi e i metodi sono slegati dalle istanze degli oggetti, vengono memorizzati nelle classi
    public static $counter = 0;         // dichiaro il contatore che tiene conto delle istanze dell'oggetto e lo inizializzo a 0
    public static $total_expenses = 0; // Somma cumulativa delle spese annuali di ogni singola azienda





//----------------------COSTRUTTORE---------------------------------------------------------------------------------------------------------
    // Metodo per costruire un oggetto, questo è il primo metodo che viene invocato quando viene creata una istanza dell'oggetto
    // Il compito del costruttore è quello di valorizzare

    public function __construct($_name, $_location, $_tot_employees, $_annual_expenses) {
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
        $this->annual_expenses = $_annual_expenses;

        Company::$counter++;    // scope resolution operator  ::  --> entra nella classe Company e va a cercare un attributo statico che abbia il nome di $counter e lo incrementa

        Company::$total_expenses += $this->annual_expenses;  //   Ogni volta che viene creata una nuova istanza della classe Company, la spesa annuale specifica dell'azienda ($this->annual_expenses) viene automaticamente aggiunta alla variabile statica total_expenses. In questo modo, total_expenses mantiene una somma aggiornata delle spese annuali di tutte le aziende create
        //      += operatore di somma e assegnazione 

    }

//-------------------------COSTRUTTORE END----------------------------------------------------------------------------------------------






    // Metodo per stampare la frase a seconda del numero dei dipendenti in ogni oggetto(Compagnia)
    public function printEmployee() {
        if ($this->tot_employees > 0) {
            echo "L'ufficio {$this->name} con sede in {$this->location} ha ben {$this->tot_employees} dipendenti.\n";
        } else {
            echo "L'ufficio {$this->name} con sede in {$this->location} non ha dipendenti.\n";
        }
    }
// usiamo il this per identificare il token specifico per ogni singolo oggetto











    // Metodo per calcolare e stampare la spesa annuale per ogni azienda
    public function printAnnualExpenses() {
        echo "La spesa annuale per l'azienda {$this->name} è di {$this->annual_expenses} euro.\n";
    }








    // Metodo statico per stampare il totale delle spese di tutte le aziende
    public static function printTotalExpenses() {
        echo "Il totale  delle spese di tutte le aziende è di " . Company::$total_expenses . " euro.\n";
        // Qui traite lo scope resolution accedo a total_expenses in cui all'interno è riportato la somma totale di tutte le spese annuali delle aziende
    }


}












// Creazione di istanze 
$company1 = new Company("Aulab", "Italia", 50, 5000000000000000);
$company2 = new Company("PastaPapa", "Parigi", 200543, 150000034345432);
$company3 = new Company("Greyfriars Bobby", "Edimburgo", 0, 20000000);
$company4 = new Company("Taco Bell", "Madrid", 1203432, 1200000);
$company5 = new Company("Bennis Habous", "Casablanca", 3045424, 8000343200);
$company6 = new Company("The Basement", "Roma", 30454343324, 800034333433200);






$company1->printAnnualExpenses();
$company2->printAnnualExpenses();
$company3->printAnnualExpenses();
$company4->printAnnualExpenses();
$company5->printAnnualExpenses();
$company6->printAnnualExpenses();





// Stampa del totale assoluto delle spese di tutte le aziende
//qui ora con lo scope resolution accedo al metodo statico ossia printtotalexpenses
Company::printTotalExpenses();

?>

