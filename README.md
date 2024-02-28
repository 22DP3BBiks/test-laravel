## Jautājumi:
### Kas ir API?
- API ir applikācijas programmas saskarne, kas ļauj sarunāties priekšai ar aizmuguri
### Kā deklarēt mainīgo PHP valodā?
- Izmantojo $, mainīgo nosaukumu, opcijanālo datu tipu, vērtību un beizot ar semikolu, piemēram, `$hello = "world";`
### Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
- MVC(Model, View, Controller) arhitektūru, kur:
  - Modelis reprezentē datubāzes tabulu kā klasi;
  - View ir faili kas tiks parādīti lietotājam;
  - Controller ir aizmugurēja servera loģika;
### Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
- ORM is Objektu-relāciju kartēšana, kas ļauj rakstīt datubāzes vaicājums ar klasi, kur klase arī kontrolē ka informācija tiek apstrādāta. Un lai nebūtu jāraksta viss ar teksta datu tipiem(sqlite).
### Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4:
    ```php
        public function index(){
            return User::where('rating', '>', 4)->get();
        }
    ```

