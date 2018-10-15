## PHP INTRO HOME WORK


**1 klausimas**

_Soft type'as_ taip veikia, kad string'as yra paverčiamas į integer'į, floatas taip pat paverčiamas į integer'į, o kadangi yra nurodyta return type, jog turi grįžti sveikasis skaičius, todėl yra užtikrinama, jog atsakyme gausime sveikąjį skaičių.

**2 klausimas**

Gauname error'ą, kviečiant funkciją tame pačiame faile, kur aprašom ```declare(strict_types=1)```. strict_types pagalba yra kviečiamos funkcijos parametrai yra sulyginami su aprašytos funkcijos parametrų tipais kvietimo momentu.

***PAVYZDYS***

Šiuo atveju kviečiant funkciją: ```calculateHomeWorkSum(3, 2.2, '1')``` mes gauname error'ą dėl dviejų parametrų: 2.2 (float'as) ir '1' (string'as), kai mūsų aprašyta funkcija prašo, jog visi paduoti kintamieji būtų integer'iai. 
