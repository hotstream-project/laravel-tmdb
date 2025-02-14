<?php

namespace Hotstream\Tmdb\Tests\Mocks\Response;

trait CollectionsResponse
{
    public function mockGetDetailsResponse(): array
    {
        return json_decode('{
            "id": 10,
            "name": "Star Wars Collection",
            "overview": "An epic space opera theatrical film series created by George Lucas.\r The first film in the franchise was originally released on May 25, 1977, by 20th Century Fox, and became a worldwide pop culture  phenomenon, followed by two sequels, released at three-year intervals. Sixteen years after the release of the trilogy is final film, the first in a new prequel trilogy of films was released, again released at three-year intervals, with the final film released on May 19, 2005.",
            "poster_path": null,
            "backdrop_path": "/shDFE0i7josMt9IKXdYpnMFFgNV.jpg",
            "parts": [
              {
                "adult": false,
                "backdrop_path": null,
                "genre_ids": [
                  12
                ],
                "id": 11,
                "original_language": "en",
                "original_title": "Star Wars: Episode IV - A New Hope",
                "overview": "Princess Leia is captured and held hostage by the evil Imperial forces in their effort to take over the galactic Empire. Venturesome Luke Skywalker and dashing captain Han Solo team together with the loveable robot duo R2-D2 and C-3PO to rescue the beautiful princess and restore peace and justice in the Empire.",
                "release_date": "1977-05-23",
                "poster_path": "/AbJBXaVPrdXROwb8KmgWUPU2XJX.jpg",
                "popularity": 1.411624,
                "title": "Star Wars: Episode IV - A New Hope",
                "video": false,
                "vote_average": 7.7,
                "vote_count": 2472
              }
            ]
          }', true);
    }

    public function mockGetImagesResponse(): array
    {
        return json_decode('{
            "id": 10,
            "backdrops": [
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/shDFE0i7josMt9IKXdYpnMFFgNV.jpg",
                "height": 1080,
                "iso_639_1": null,
                "vote_average": 5.3125,
                "vote_count": 1,
                "width": 1920
              }
            ],
            "posters": [
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/hznxm4di88tWJHiCGWYDXeKk1Ih.jpg",
                "height": 1500,
                "iso_639_1": "en",
                "vote_average": 5.3125,
                "vote_count": 1,
                "width": 1000
              }
            ]
          }', true);
    }

    public function mockGetTranslationsResponse(): array
    {
        return json_decode('{
            "id": 10,
            "translations": [
              {
                "iso_3166_1": "CN",
                "iso_639_1": "zh",
                "name": "普通话",
                "english_name": "Mandarin",
                "data": {
                  "title": "星球大战（系列）",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "RO",
                "iso_639_1": "ro",
                "name": "Română",
                "english_name": "Romanian",
                "data": {
                  "title": "Colecția Războaiele stelare",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "HR",
                "iso_639_1": "hr",
                "name": "Hrvatski",
                "english_name": "Croatian",
                "data": {
                  "title": "",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "US",
                "iso_639_1": "en",
                "name": "English",
                "english_name": "English",
                "data": {
                  "title": "",
                  "overview": "An epic space opera theatrical film series that depicts the adventures of various characters \"a long time ago in a galaxy far, far away\".",
                  "homepage": "http://www.starwars.com/films"
                }
              },
              {
                "iso_3166_1": "RU",
                "iso_639_1": "ru",
                "name": "Pусский",
                "english_name": "Russian",
                "data": {
                  "title": "Звездные войны",
                  "overview": "«Звёздные войны» — эпическая фантастическая киносага, созданная Джорджем Лукасом. Эпизоды серии вобрали в себя архетипы как научной фантастики, так и классической мифологии, а также предоставили их великолепную музыкальную интерпретацию. Фильмы являются прекрасным примером космооперы, они заняли заметное место в поп-культуре и стали самой кассовой киносерией всех времён. В последние годы серия приобрела ещё большую популярность, породив новое поколение восторженных фанатов.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "SK",
                "iso_639_1": "sk",
                "name": "Slovenčina",
                "english_name": "Slovak",
                "data": {
                  "title": "Kolekcia Star Wars",
                  "overview": "",
                  "homepage": "http://www.starwars.com"
                }
              },
              {
                "iso_3166_1": "FR",
                "iso_639_1": "fr",
                "name": "Français",
                "english_name": "French",
                "data": {
                  "title": "Star Wars - Saga",
                  "overview": "Luke Skywalker, la Princesse Leia, Dark Vador, C3PO, R2D2 et de nombreux autres personnages du film sont désormais des noms familiers de lun des projets cinématographiques les plus réussis de tous les temps.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "HU",
                "iso_639_1": "hu",
                "name": "Magyar",
                "english_name": "Hungarian",
                "data": {
                  "title": "Star Wars gyűjtemény",
                  "overview": "A Csillagok háborúja (eredeti címe: Star Wars) egy űropera filmsorozatnak, irodalmi műveknek és számítógépes játékoknak a neve. Mindezek George Lucas filmrendező ötletei alapján készültek el. A filmek cselekménye a Galaktikus Köztársaság és a Galaktikus Birodalom közti átmenetek, valamint a Galaktikus Polgárháború (amely a Lázadó Szövetség és a Galaktikus Birodalom között zajlik) körül forog. Valójában az egész cselekmény a jó és a rossz harcát jelképezi. A történet „réges régen, egy messzi-messzi galaxisban…” játszódik. Az eredeti Csillagok háborúja-trilógia, főleg annak elsőként vetített része, az Egy új remény (IV. epizód) úttörő jelentőségű volt a sci-fi műfajában mind tartalmilag, mind a technikai megvalósítást tekintve, de az előzmény-trilógia (Baljós árnyak, A klónok támadása, A Sith-ek bosszúja) is számos újítást hozott magával.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "IL",
                "iso_639_1": "he",
                "name": "עִבְרִית",
                "english_name": "Hebrew",
                "data": {
                  "title": "מלחמת הכוכבים - אוסף",
                  "overview": "מלחמת הכוכבים הוא שמה של סדרת סרטי מדע בדיוני מצליחים שיצר במאי הקולנוע גורג לוקאס. הסרט הראשון בסדרה, שנקרא אז \"מלחמת הכוכבים\" וכיום נקרא \"מלחמת הכוכבים - פרק 4: תקווה חדשה\", יצא בשנת 1977. מאז יצאו חמישה סרטים נוספים בסדרה, האחרון שבהם בשנת 2005. בסדרת הסרטים כיכבו אנסמבל של שחקנים כדוגמת מארק המיל, האריסון פורד, קארי פישר ואלק גינס (בטרילוגיה המקורית) והיידן כריסטנסן, נטלי פורטמן, יואן מקגרגור, ליאם ניסן, כריסטופר לי וסמואל ל. גקסון (בטרילוגיה המקדימה). בעקבות רכישת לוקאס פילם על ידי דיסני, הכריזו הרוכשים על הפקת טרילוגיה חדשה (פרקים 7-9); הראשון בהם צפוי לצאת לאקרנים בשנת 2015.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "BG",
                "iso_639_1": "bg",
                "name": "български език",
                "english_name": "Bulgarian",
                "data": {
                  "title": "Междузвездни войни (поредица)",
                  "overview": "Междузвездни войни е поредица от шест филма проследяващи живота на Анакин Скайуокър. Открит от джедая Куай-Гон Джин на пустинната планета Татуин Анакин е все още дете, но постепенно се превръща в силния Дарт Вейдър, дясната ръка на Императорът, който почти успява да унищожи джедайте.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "PL",
                "iso_639_1": "pl",
                "name": "Polski",
                "english_name": "Polish",
                "data": {
                  "title": "Gwiezdne Wojny - Kolekcja",
                  "overview": "Seria filmów fantastycznych z gatunku space opera (science fantasy) George’a Lucasa.",
                  "homepage": "http://www.starwars.com/"
                }
              },
              {
                "iso_3166_1": "DK",
                "iso_639_1": "da",
                "name": "Dansk",
                "english_name": "Danish",
                "data": {
                  "title": "Star Wars (Samling)",
                  "overview": "Alle otte Star Wars film i science fiction-sagaen, som foregår i \"en fjern, fjern galakse for meget længe siden\" ... den 9. og sidste film i denne serie får biograf premiere i 2019. Men mange andre spin-offs er på vej.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "FI",
                "iso_639_1": "fi",
                "name": "suomi",
                "english_name": "Finnish",
                "data": {
                  "title": "Tähtien sota",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "IT",
                "iso_639_1": "it",
                "name": "Italiano",
                "english_name": "Italian",
                "data": {
                  "title": "Star Wars - Collezione",
                  "overview": "Unepica storia, ambientata in galassie lontane e raccontata in una serie di film, creata da George Lucas.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "ES",
                "iso_639_1": "es",
                "name": "Español",
                "english_name": "Spanish",
                "data": {
                  "title": "Star Wars - Colección",
                  "overview": "La colección de las 7 películas del director , escritor y productor George Lucas. Con Luke Skywalker, Pricesa Leia, Darth Vader,C3PO,R2D2 y mas personajes de la saga de la Guerra de las Galaxias.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "CZ",
                "iso_639_1": "cs",
                "name": "Český",
                "english_name": "Czech",
                "data": {
                  "title": "Hvězdné války (kolekce)",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "NL",
                "iso_639_1": "nl",
                "name": "Nederlands",
                "english_name": "Dutch",
                "data": {
                  "title": "Star Wars collectie",
                  "overview": "De collectie van de zes theatrale productie van films uit de regisseur, scenarioschrijver en producer George Lucas. Luke Skywalker, Princess Leia, Darth Vader, C3PO, R2D2 en vele andere personages uit de film zijn nu vertrouwde namen van een van de meest succesvolle filmprojecten aller tijden.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "TR",
                "iso_639_1": "tr",
                "name": "Türkçe",
                "english_name": "Turkish",
                "data": {
                  "title": "Yıldız Savaşları Serisi",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "SE",
                "iso_639_1": "sv",
                "name": "svenska",
                "english_name": "Swedish",
                "data": {
                  "title": "",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "NO",
                "iso_639_1": "nb",
                "name": "Bokmål",
                "english_name": "Norwegian Bokmål",
                "data": {
                  "title": "",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "NO",
                "iso_639_1": "no",
                "name": "Norsk",
                "english_name": "Norwegian",
                "data": {
                  "title": "Star Wars - Den Komplette Samlingen",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "JP",
                "iso_639_1": "ja",
                "name": "日本語",
                "english_name": "Japanese",
                "data": {
                  "title": "スター・ウォーズ シリーズ",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "KR",
                "iso_639_1": "ko",
                "name": "한국어/조선말",
                "english_name": "Korean",
                "data": {
                  "title": "스타 워즈 시리즈",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "TH",
                "iso_639_1": "th",
                "name": "ภาษาไทย",
                "english_name": "Thai",
                "data": {
                  "title": "สตาร์ วอร์ส คอลเลกชัน",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "RS",
                "iso_639_1": "sr",
                "name": "Srpski",
                "english_name": "Serbian",
                "data": {
                  "title": "колекција Ратови Звезда",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "BR",
                "iso_639_1": "pt",
                "name": "Português",
                "english_name": "Portuguese",
                "data": {
                  "title": "Star Wars",
                  "overview": "Opera espacial americana em uma série de seis filmes de fantasia escritos por George Lucas. O primeiro filme da série foi lançado originalmente pela 20th Century Fox em 1977 tornando-se um fenômeno mundial de cultura popular. Foi acompanhado por duas sequências, lançadas em intervalos de três anos. Dezesseis anos depois da exibição do último filme a saga continuo com outras sequências.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "TW",
                "iso_639_1": "zh",
                "name": "普通话",
                "english_name": "Mandarin",
                "data": {
                  "title": "星際大戰 系列",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "UA",
                "iso_639_1": "uk",
                "name": "Український",
                "english_name": "Ukrainian",
                "data": {
                  "title": "Зоряні війни - кіноцикл",
                  "overview": "Культова епічна фантастична сага, що містить оповіді про протистояння планет, цивілізації та фракцій «Далекої галактики»",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "IR",
                "iso_639_1": "fa",
                "name": "فارسی",
                "english_name": "Persian",
                "data": {
                  "title": "",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "DE",
                "iso_639_1": "de",
                "name": "Deutsch",
                "english_name": "German",
                "data": {
                  "title": "Star Wars Filmreihe",
                  "overview": "\"Star Wars™\" ist die größte Science-Fiction-Saga aller Zeiten, die mit ihren bislang acht filmischen Episoden und den unüberschaubaren Verzweigungen alle Dimensionen der Unterhaltungskultur gesprengt hat. Die Abenteuer von Luke Skywalker, Han Solo und der schönen Prinzessin Leia fesseln die Kinozuschauer und die Leser in aller Welt seit fast 30 Jahren.",
                  "homepage": "http://www.starwars-union.de"
                }
              },
              {
                "iso_3166_1": "PT",
                "iso_639_1": "pt",
                "name": "Português",
                "english_name": "Portuguese",
                "data": {
                  "title": "Star Wars - Coletânea",
                  "overview": "Space opera americana em uma série de seis filmes de fantasia escritos por George Lucas. O primeiro filme da série foi lançado originalmente pela 20th Century Fox em 25 de maio de 1977 tornando-se um fenômeno mundial de cultura popular. Foi acompanhado por duas sequências, lançadas em intervalos de três anos. Dezesseis anos depois da exibição do último filme teve início uma nova trilogia, mais uma vez lançada em intervalos de três anos, com o último filme sendo lançado em 19 de maio de 2005.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "CA",
                "iso_639_1": "fr",
                "name": "Français",
                "english_name": "French",
                "data": {
                  "title": "Collection Star Wars",
                  "overview": "Luke Skywalker, la Princesse Leia, Dark Vador, C3PO, R2D2 et de nombreux autres personnages du film sont désormais des noms familiers de lun des projets cinématographiques les plus réussis de tous les temps.",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "MX",
                "iso_639_1": "es",
                "name": "Español",
                "english_name": "Spanish",
                "data": {
                  "title": "",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "LT",
                "iso_639_1": "lt",
                "name": "Lietuvikai",
                "english_name": "Lithuanian",
                "data": {
                  "title": "Žvaigždžių karai Kolekcijos",
                  "overview": "",
                  "homepage": ""
                }
              },
              {
                "iso_3166_1": "ID",
                "iso_639_1": "id",
                "name": "Bahasa indonesia",
                "english_name": "Indonesian",
                "data": {
                  "title": "",
                  "overview": "",
                  "homepage": ""
                }
              }
            ]
          }', true);
    }
}
