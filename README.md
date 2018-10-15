## PHP INTRO HOME WORK


**1 klausimas**

Kadangi tai yra _soft type'as_, tai mes turime apsirašyti tokius type'us prieš kiekvieną kintamamąjį, kokį atsakymą turime gauti. Ir soft type'as taip veikia, kad string'as yra paverčiamas į integer'į, floatas taip pat paverčiamas į integer'į, todėl ir gauname atsakymą - sveikąjį skaičių (integer'į).

**2 klausimas**

Gauname _error'ą_, nes _declare strict type'as_ veikia funkcijos kvietimo momentu. Tas type'as suveikia tik _callCalculateHomeWorkSum funkcijoje_ (kitoje funkcijoje jis nesuveikia), o kadangi šioje funkcijoje yra paduoti netinkami argumentai (be type'ų), todėl ir įvyksta _error'as_. 