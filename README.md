# Projekt zaliczeniowy
## Strona domowa z użyciem Bootstrapa 5

Jest to, można by rzec, *Proof of Concept* mojej strony domowej.
Jedynymi rzeczami bezpośrednio związanymi ze mną są wykonanie, design i moje zdjęcie, reszta to placeholdery.

W repozytorium nie ma zbędnych plików bootstrapa, zostały już skompilowane w plik css.
Bootstrapowy JavaScript pobierany jest z zewnątrz.

Strona używa wzoru w tle wykonanego przez [@d__raptis](https://twitter.com/d__raptis) https://www.magicpattern.design/tools/css-backgrounds

##### Pliki:
- `html/` - Strony na które może wchodzić użytkownik
  - `about.html` - Strona mogąca zawierać mój życiorys, opis. Aktualnie jest tam lorem ipsum.
  - `contact.html` - Formularz kontaktowy, podobny do tego z zadania 15. Maile są wysyłane do mojej skrzynki USOS.
  - `gallery.php` - Galeria moich obrazków. Można je powiększyć klikając na nie.
  - `index.html` - Strona główna z linkami.

- `images/`
  - `cardabout.png`, `cardgallery.png` - Obrazki do linków na stronie głównej
  - `icon.png` - Moje logo
  - `photo.png` - Moje zdjęcie
  - `gallery/` - Stąd pobierane są zdjęcia do galerii.
- `css/custom.min.css` - Używany przez stronę zminifikowany arkusz stylów, skompilowany z pliku custom.scss

- `js/contact.js` - Skrypt do contact.html. Używa funkcji fetch()

- `php/`
  - `contact.php` - Skrypt wysyłania maila. Podobny do tych z zadań 14, 15
  - `galleryscript1.php` - Skrypt galerii. Pobiera obrazki z katalogu *images/gallery* i wyświetla je.
  - `galleryscript2.php` - Ładuje obrazki do powiększonego widoku w karuzeli w modalu.

- `scss/custom.scss` - Dodatkowe zmienne i klasy BS, arkusze stylów, podłączone ikony
