1. Class Design and Attributes:
The Company class includes the following public attributes:

$name: the name of the company (e.g., "Aulab").
$location: the location of the company's headquarters (e.g., "Italy").
$tot_employees: the number of employees at the company (set to 0 by default).
$annual_expenses: the total annual expenses of the company.
I also introduced two static attributes:

$counter: a static counter to track the number of Company instances that have been created.
$total_expenses: a static variable that stores the cumulative annual expenses for all companies.
2. Constructor (__construct):
The constructor method initializes the company's name, location, number of employees, and annual expenses when a new instance is created.
Additionally, the constructor updates the $counter (to track the number of companies) and adds the company's annual expenses to the static $total_expenses.
3. Method to Print Employee Count (printEmployee):
I implemented a method to print a message based on the number of employees in each company.
If the company has more than 0 employees, the method prints a message like:
"The company Aulab, located in Italy, has 50 employees."

If the company has 0 employees, it prints:
"The company Aulab, located in Italy, does not have any employees."

4. Method to Print Annual Expenses (printAnnualExpenses):
This method prints the annual expenses for each company. It helps track how much each company is spending annually. For example:
"The annual expenses for the company Aulab are 5000000000000000 euros."

5. Static Method to Print Total Expenses (printTotalExpenses):
I created a static method that prints the total expenses across all companies.
The method accesses the static attribute $total_expenses and outputs the cumulative amount of expenses for all created companies.
This is useful to get an overview of the total expenses incurred by all companies.
6. Creating Instances of Companies:
I created six instances of different companies with varying names, locations, number of employees, and annual expenses. Each company has its own unique data.
7. Testing the Methods:
I called the printAnnualExpenses method on each company instance to print the annual expenses for each company.
I also used the static printTotalExpenses method to print the cumulative total expenses for all the companies combined.

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Progettazione della Classe e Attributi: La classe Company include i seguenti attributi pubblici:

$name: il nome dell'azienda (ad esempio, "Aulab").
$location: la sede della compagnia (ad esempio, "Italia").
$tot_employees: il numero di dipendenti nell'azienda (impostato a 0 di default).
$annual_expenses: le spese annuali dell'azienda.
Ho anche introdotto due attributi statici:

$counter: un contatore statico per tenere traccia del numero di istanze della classe Company che sono state create.
$total_expenses: una variabile statica che memorizza la somma cumulativa delle spese annuali di tutte le aziende.
Costruttore (__construct): Il costruttore inizializza il nome, la sede, il numero di dipendenti e le spese annuali dell'azienda quando viene creata una nuova istanza. Inoltre, il costruttore aggiorna $counter (per tenere traccia del numero di aziende) e aggiunge le spese annuali dell'azienda alla variabile statica $total_expenses.

Metodo per stampare il numero di dipendenti (printEmployee): Ho implementato un metodo che stampa un messaggio in base al numero di dipendenti di ogni azienda. Se l'azienda ha più di 0 dipendenti, il metodo stampa un messaggio come:

"L'azienda Aulab, con sede in Italia, ha 50 dipendenti." Se l'azienda ha 0 dipendenti, stampa: "L'azienda Aulab, con sede in Italia, non ha dipendenti."

Metodo per stampare le spese annuali (printAnnualExpenses): Questo metodo stampa le spese annuali per ogni azienda. Aiuta a tenere traccia di quanto ogni azienda spende annualmente. Ad esempio:

"Le spese annuali per l'azienda Aulab sono 5000000000000000 euro."

Metodo statico per stampare il totale delle spese (printTotalExpenses): Ho creato un metodo statico che stampa il totale delle spese di tutte le aziende. Il metodo accede all'attributo statico $total_expenses e restituisce la somma complessiva delle spese di tutte le aziende create. Questo è utile per avere una panoramica delle spese totali sostenute da tutte le aziende.

Creazione delle istanze delle aziende: Ho creato sei istanze di aziende diverse con nomi, sedi, numero di dipendenti e spese annuali variabili. Ogni azienda ha i suoi dati unici.

Test dei metodi: Ho chiamato il metodo printAnnualExpenses per ogni istanza aziendale, al fine di stampare le spese annuali di ciascuna azienda. Inoltre, ho utilizzato il metodo statico printTotalExpenses per stampare il totale cumulativo delle spese di tutte le aziende create.
