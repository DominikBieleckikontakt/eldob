<x-layout>
    <x-slot:title>Kalkulator</x-slot:title>
    <section class="container">
      <x-heading>
        <x-slot:subtitle>Pomożemy obliczyć Ci koszty</x-slot>
        Kalkulator wykonania instalacji elektrycznej<span class="dot">.</span>
    </x-heading>
      <form action="" method="post" id="calculator" class="calculator-form">
        <div class="form-container">
          <div class="form-header">
            <div>Podstawa oszacowania</div>
            <div>Cena</div>
            <div>Jm</div>
            <div>Ilość</div>
            <div>Wartość</div>
          </div>

          <div class="section-title">Prace instalacyjne</div>

          <div class="form-row">
            <div>Punkt oświetlenia górnego</div>
            <div>75 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktOswietleniaGornego" data-id="1" data-price="75" class="inputIlosc"></div>
            <div><span class="wartosc poleid-1">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt oświetlenia kinkietowego</div>
            <div>65 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktOswietleniaKinkietowego" data-id="2" data-price="65" class="inputIlosc"></div>
            <div><span class="wartosc poleid-2">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Rozeta rozdzielcza punktu elektrycznego</div>
            <div>85 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="rozetaRozdzielcza" data-id="3" data-price="85" class="inputIlosc"></div>
            <div><span class="wartosc poleid-3">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt pojedynczego gniazda elektrycznego</div>
            <div>75 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktGniazda" data-id="4" data-price="75" class="inputIlosc"></div>
            <div><span class="wartosc poleid-4">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt gniazd elektrycznych systemowych (do 3 w ramce)</div>
            <div>105 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktGniazdSystemowych" data-id="5" data-price="105" class="inputIlosc"></div>
            <div><span class="wartosc poleid-5">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt gniazda siłowego do 32A</div>
            <div>125 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktGniazdaSilowego" data-id="6" data-price="125" class="inputIlosc"></div>
            <div><span class="wartosc poleid-6">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt włącznika (do 2 obwodów)</div>
            <div>85 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktWlacznika2" data-id="7" data-price="85" class="inputIlosc"></div>
            <div><span class="wartosc poleid-7">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt włącznika (do 4 obwodów)</div>
            <div>95 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktWlacznika4" data-id="8" data-price="95" class="inputIlosc"></div>
            <div><span class="wartosc poleid-8">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt gniazda telewizyjnego RTV/SAT</div>
            <div>120 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktRtv" data-id="9" data-price="120" class="inputIlosc"></div>
            <div><span class="wartosc poleid-9">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt gniazda telefonicznego</div>
            <div>65 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktTel" data-id="10" data-price="65" class="inputIlosc"></div>
            <div><span class="wartosc poleid-10">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt gniazda komputerowego kat.5e</div>
            <div>85 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktGniazdaKomp5e" data-id="11" data-price="85" class="inputIlosc"></div>
            <div><span class="wartosc poleid-11">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt gniazda komputerowego kat. 6</div>
            <div>165 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktGniazdaKomp6" data-id="12" data-price="165" class="inputIlosc"></div>
            <div><span class="wartosc poleid-12">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt akustyczny</div>
            <div>65 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktAkustyczny" data-id="13" data-price="65" class="inputIlosc"></div>
            <div><span class="wartosc poleid-13">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Punkt rolet zasilanych (robota z materiałem)</div>
            <div>125 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="punktRolet" data-id="14" data-price="125" class="inputIlosc"></div>
            <div><span class="wartosc poleid-14">0</span> PLN</div>
          </div>
    
          <div class="section-title">Prace montażowe</div>
    
          <div class="form-row">
              <div>Montaż gniazd elektrycznych, antenowych, telefonicznych</div>
              <div>12,50 PLN/szt</div>
              <div>szt</div>
              <div><input type="number" name="montazGniazdElektrycznych" data-id="15" data-price="12.5" class="inputIlosc"></div>
              <div><span class="wartosc poleid-15">0</span> PLN</div>
          </div>
          <div class="form-row">
              <div>Montaż włączników (do 2-klawiszy)</div>
              <div>12,50 PLN/szt</div>
              <div>szt</div>
              <div><input type="number" name="montazWlacznikowDo2" data-id="16" data-price="12.5" class="inputIlosc"></div>
              <div><span class="wartosc poleid-16">0</span> PLN</div>
          </div>
          <div class="form-row">
              <div>Montaż włączników (2 do 4 klawiszy)</div>
              <div>20 PLN/szt</div>
              <div>szt</div>
              <div><input type="number" name="montazWlacznikow2Do4" data-id="17" data-price="20" class="inputIlosc"></div>
              <div><span class="wartosc poleid-17">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż opraw ogrodowych / zewnętrznych</div>
            <div>120 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazOprawOgrodowych" data-id="18" data-price="120" class="inputIlosc"></div>
            <div><span class="wartosc poleid-18">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż opraw, lamp, kinkietów lub innych punktów świetlnych</div>
            <div>50 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazOprawLamp" data-id="19" data-price="50" class="inputIlosc"></div>
            <div><span class="wartosc poleid-19">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Wymiana opraw, lamp, kinkietów lub innych punktów świetlnych</div>
            <div>100 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="wymianaOprawLamp" data-id="20" data-price="100" class="inputIlosc"></div>
            <div><span class="wartosc poleid-20">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż wentylatorów</div>
            <div>80 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazWentylatorow" data-id="21" data-price="80" class="inputIlosc"></div>
            <div><span class="wartosc poleid-21">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż gniazd siłowych 220/380V</div>
            <div>25 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazGniazdSilowych" data-id="22" data-price="25" class="inputIlosc"></div>
            <div><span class="wartosc poleid-22">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż rozdzielni (do 36 pól przed tynkami)</div>
            <div>180 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazRozdzielni" data-id="23" data-price="180" class="inputIlosc"></div>
            <div><span class="wartosc poleid-23">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż osprzętu rozdzielni (12 do 24 modułowej)</div>
            <div>650 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazOsprzetuRozdzielni12Do24" data-id="24" data-price="650" class="inputIlosc"></div>
            <div><span class="wartosc poleid-24">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż osprzętu rozdzielni (36 do 48 modułowej)</div>
            <div>950 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazOsprzetuRozdzielni36Do48" data-id="25" data-price="950" class="inputIlosc"></div>
            <div><span class="wartosc poleid-25">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż osprzętu rozdzielni (56 do 104 modułowej)</div>
            <div>1050 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazOsprzetuRozdzielni56Do104" data-id="26" data-price="1050" class="inputIlosc"></div>
            <div><span class="wartosc poleid-26">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Podłączenie podgrzewacza przepływowego o mocy do 5.5kW</div>
            <div>160 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="podlaczeniePodgrzewacza" data-id="27" data-price="160" class="inputIlosc"></div>
            <div><span class="wartosc poleid-27">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Podłączenie kuchni elektrycznej lub płyty indukcyjnej o mocy do 5.5kW</div>
            <div>150 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="podlaczenieKuchni" data-id="28" data-price="150" class="inputIlosc"></div>
            <div><span class="wartosc poleid-28">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż tablicy licznikowej 1-faz</div>
            <div>150 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazTablicy1faz" data-id="29" data-price="150" class="inputIlosc"></div>
            <div><span class="wartosc poleid-29">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Montaż tablicy licznikowej 3-faz</div>
            <div>180 PLN/szt</div>
            <div>szt</div>
            <div><input type="number" name="montazTablicy3faz" data-id="30" data-price="180" class="inputIlosc"></div>
            <div><span class="wartosc poleid-30">0</span> PLN</div>
          </div>

          <div class="section-title">Prace ziemne</div>

          <div class="form-row">
            <div>Wykop o głębokości do 0,8m x 0,25 szerokości</div>
            <div>120 PLN/mb</div>
            <div>mb</div>
            <div><input type="number" name="wykop" data-id="31" data-price="120" class="inputIlosc"></div>
            <div><span class="wartosc poleid-31">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Ułożenie bednarki do uziemienia</div>
            <div>25 PLN/mb</div>
            <div>mb</div>
            <div><input type="number" name="ulozenieBednarki" data-id="32" data-price="25" class="inputIlosc"></div>
            <div><span class="wartosc poleid-32">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div>Ułożenie przewodu o przekroju do 5x35 mm2</div>
            <div>18 PLN/mb</div>
            <div>mb</div>
            <div><input type="number" name="ulozeniePrzewodu" data-id="33" data-price="18" class="inputIlosc"></div>
            <div><span class="wartosc poleid-33">0</span> PLN</div>
          </div>
          <div class="form-row">
            <div class="description">Ułożenie folii w wykopie (sama robocizna)</div>
            <div class="price">8,50 PLN/mb</div>
            <div class="unit">mb</div>
            <div class="quantity">
              <input type="number" name="ulozenieFolii" data-id="34" data-price="8.5" class="inputIlosc">
            </div>
            <div class="total-value">
              <span class="wartosc poleid-34">0</span> PLN
            </div>
          </div>
          <div class="form-row">
            <div class="description">Zryczałtowany dojazd 1km</div>
            <div class="price">1,50 PLN/km</div>
            <div class="unit">km</div>
            <div class="quantity">
              <input type="number" name="zryczaltowanyDojazd" data-id="35" data-price="1.5" class="inputIlosc">
            </div>
            <div class="total-value">
              <span class="wartosc poleid-35">0</span> PLN
            </div>
          </div>
          <div class="form-radio-row">
            <div class="description">Powierzchnia budynku</div>
            <div class="building__area">
              <div class="option">
                <input class="powierzchniaBudynku" type="radio" name="powierzchnia" value="do100" data-pow="100" id="do100">
                <label for="do100">do 100 m2</label>
              </div>
              <div class="option">
                <input class="powierzchniaBudynku" type="radio" name="powierzchnia" value="od100do200" data-pow="150" id="od100do200">
                <label for="od100do200">do 200 m2</label>
              </div>
              <div class="option">
                <input class="powierzchniaBudynku" type="radio" name="powierzchnia" value="od200" data-pow="200" id="od200">
                <label for="od200">od 200 m2</label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="description">Otrzymany rabat</div>
            <div class="value">
              <span id="rabatProcentSpan"></span> %
          </div>
        </div>
        <div class="form-row">
            <div class="description">Łączna wartość netto</div>
            <div class="value">
              <span id="wartoscNettoSpan"></span> PLN
            </div>
            <input type="hidden" id="szacowanaKwota" name="szacowanaKwota" value="">
        </div>
          <div class="full__description">Cena za prace i roboty wykonywane w budownictwie wielorodzinnym lub obiektach użyteczności publicznej - do uzgodnienia. Pracę zróżnicowane pod względem zakresu realizowanego zasania są wyceniane indywidualnie.</div>
        <hr>
        <div class="full__description">Poniższa część formularza dotyczy osób, które chcą przesłać zapytanie do dalszej wyceny.</div>
        <div class="form-radio-row">
          <div class="description">Miejsce prowadzenia prac</div>
          <div class="options">
            <div>
              <input class="miejscePrac" type="radio" name="miejscePrac" value="dom" id="dom">
              <label for="dom">dom mieszkalny</label><br>
            </div>
            <div>
              <input class="miejscePrac" type="radio" name="miejscePrac" value="obiekt" id="obiekt">
              <label for="obiekt">obiekt użyteczności publicznej</label><br>
            </div>
            <div>
              <input class="miejscePrac" type="radio" name="miejscePrac" value="sklep" id="sklep">
              <label for="sklep">sklep</label><br>
            </div>
            <div>
              <input class="miejscePrac" type="radio" name="miejscePrac" value="produkcja" id="produkcja">
              <label for="produkcja">zakład produkcyjny / fabryka / magazyn</label><br>
            </div>
            <div>
              <input class="miejscePrac" type="radio" name="miejscePrac" value="biuro" id="biuro">
              <label for="biuro">obiekt biurowy</label><br>
            </div>
            <div>
              <input class="miejscePrac" type="radio" name="miejscePrac" value="zabytek" id="zabytek">
              <label for="zabytek">obiekt sakralny/zabytkowy</label><br>
            </div>
            <div>
              <input class="miejscePrac" type="radio" name="miejscePrac" value="inny" id="inny">
              <label for="inny">inny</label><br>
            </div>
              <input type="text" name="inneMiejscePrac">
            </div>
        	</div>
        <div class="form-radio-row">
            <div class="description">Klasyfikacja prac</div>
            <div class="options">
              <div>
                <input class="klasyfikacjaPrac" type="radio" name="klasyfikacjaPrac" value="nowy" id="nowy">
                <label for="nowy">nowy obiekt - nowe instalcje</label><br>
              </div>
              <div>
                <input class="klasyfikacjaPrac" type="radio" name="klasyfikacjaPrac" value="modernizacja" id="modernizacja">
                <label for="modernizacja">istniejący obiekt - modernizacja</label><br>
              </div>
              <div>
                <input class="klasyfikacjaPrac" type="radio" name="klasyfikacjaPrac" value="remont" id="remont">
                <label for="remont">istniejący obiekt - remont</label><br>
              </div>
            </div>
        </div>
          <div class="form-radio-row">
            <div class="description">Dodatkowe oczekiwania</div>
            <div class="options">
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="przygotowanieProjektu" id="przygotowanieProjektu">
                <label for="przygotowanieProjektu">przygotowanie projektu instalacji elektrycznej (inwestor nie posiada)</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="zalatwienieFormalnosci" id="zalatwienieFormalnosci">
                <label for="zalatwienieFormalnosci">załatwienie podstawowych, niezbędnych formalności w ZE</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="wykonaniePomiarow" id="wykonaniePomiarow">
                <label for="wykonaniePomiarow">wykonanie pomiarów ochronnych (inwestor nie zleca ich firmie zewnętrznej)</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="zaopatrzenieBudowy" id="zaopatrzenieBudowy">
                <label for="zaopatrzenieBudowy">zaopatrzenie budowy w materiały elektroinstalacyjne (dostawa po stronie wykonawcy)</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="materialyKlienta" id="materialyKlienta">
                <label for="materialyKlienta">wykonanie prac z wykorzystaniem materiałów powierzonych przez Inwestora</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="doradztwoOsprzet" id="doradztwoOsprzet">
                <label for="doradztwoOsprzet">doradztwo w zakresie doboru osprzętu elektroinstalacyjnego</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="doradztwoWyposazenie" id="doradztwoWyposazenie">
                <label for="doradztwoWyposazenie">doradztwo w zakresie doboru dodatkowego wyposażenia nie przewidzianego na etapie planowania inwestycji</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="kontrolaDokumentacji" id="kontrolaDokumentacji">
                <label for="kontrolaDokumentacji">kontrola istniejącej dokumentacji pod kątem wymagań dotyczących zakresu realizowanego zadania</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="praceZewnetrzne" id="praceZewnetrzne">
                <label for="praceZewnetrzne">wykonanie prac dodatkowych związanych z adaptacją projektu do warunków terenowych</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="dokumentacja" id="dokumentacja">
                <label for="dokumentacja">przygotowanie dokumentacji powykonawczej dla ZE</label><br>
              </div>
              <div>
                <input class="dodatkoweOczekiwania" type="checkbox" name="dodatkoweOczekiwania[]" value="inne" id="inne">
                <label for="inne">inne</label><br>
              </div>
            </div>
          </div> 

          <div class="form-radio-row">
            <div class="description">Dodatkowe informacje</div>
            <div class="options">
              <div>
                <textarea type="text" name="inneOczekiwania"></textarea>
              </div>
            </div>
          </div>
          <div class="input-grid">
            <div class="description">Pola wymagane</div>
            <div class="options">
              <div>
                <label for="imieinazwisko">Imię i nazwisko</label>
                <input required="" type="text" name="imieinazwisko" id="imieinazwisko">
              </div>

            <div>
                <label for="miasto">Miasto</label>
                <input required="" type="text" name="miasto" id="miasto">
            </div>

            <div>
                <label for="email">Email</label>
                <input required="" type="email" name="email" id="email">
            </div>

            <div>
                <label for="telefon">Numer telefonu</label>
                <input required="" type="text" name="telefon" id="telefon">
            </div>

            <div>
                <label for="nip">NIP (pole obowiązkowe dla firm)</label>
                <input type="text" name="nip" id="nip">
            </div>

            <div>
                <label for="adres">Adres i lokalizacja obiektu</label>
                <input required="" type="text" name="adres" id="adres">
            </div>
            <div>
                <label for="terminDostawy">Termin dostawy materiałów/urządzeń</label>
                <input required="" type="date" name="terminDostawy" id="terminDostawy">
            </div>
            <div>
                <label for="terminRozpoczecia">Planowany termin rozpoczęcia inwestycji</label>
                <input required="" type="date" name="terminRozpoczecia" id="terminRozpoczecia">
            </div>
            <div>
                <label for="terminZakonczenia">Planowany termin zakończenia inwestycji</label>
                <input required="" type="date" name="terminZakonczenia" id="terminZakonczenia">
            </div>
            </div>
          </div>
            <div class="select__container">
                <label for="budzet">Orientacyjny budżet przeznaczony na realizację (netto): </label>
                <select required="" name="budzet" id="budzet" style="display: block !important">
                    <option value="">--Prosimy wybrać--</option>
                    <option value="600">do 600 PLN</option>
                    <option value="1200">do 1200 PLN</option>
                    <option value="2000">do 2000 PLN</option>
                    <option value="5000">2000 - 5000 PLN</option>
                    <option value="10000">5000 - 10000 PLN</option>
                    <option value="15000">10000 - 15000 PLN</option>
                    <option value="25000">15000 - 25000 PLN</option>
                    <option value="50000">25000 - 50000 PLN</option>
                    <option value="51000">powyżej 50000 PLN</option>
                    <option value="nieznany">nie jest znany/nie mam takiej wiedzy/brak sprecyzowanych oczekiwań</option>
                </select>
              </div>
              <div class="form-radio-row">
                  <div class="btn__container">
                      <button>Wyślij zapytanie</button>
                  </div>
              </div>
              <p class="full__description privacy">
                Zgodnie z ustawą z dnia 29 sierpnia 1997 r. o ochronie danych osobowych (Dz.U. Nr 133, poz 883) wypełniając ten formularz wyrażasz zgodę na przetwarzanie Twoich danych osobowych i wykorzystywanie ich tylko do wewnętrznych celów statystycznych i marketingowych. Wyrażasz zgodę na przetwarzanie informacji przekazanych za pośrednictwem tej strony dla celów promocji oraz dla celów marketingowych Firmy. Zgodnie z ustawą z dnia 26.08.2002 r. o świadczeniu usług drogą elektroniczną obowiązującą od 10 marca 2003, podając na tej stronie swoje dane kontaktowe wyrażasz zgodę na otrzymywanie informacji handlowej drogą elektroniczną. Zastrzegamy sobie prawo do nie odpowiadania na wszystkie przesłane do nas zapytania ofertowe, bez podania przyczyny.
              </p>
          </div>
      </form>
    </section>
</x-layout>
