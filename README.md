# - Kas ir API?
   ## API ir lietojumprogrammu saskarne un veids, kā divas vai vairākas lietojumprogrammas var sazināties. API ir arī tilts, kas savieno uzņēmumus, lai ietaupītu darbinieku laiku.
# - Kā deklarēt mainīgo PHP valodā?
   ## Izmantojot $ zīmi kopā ar noteikto mainīgā vārdu
# - Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
   ## Laravel izmanto MVC arhitektūru, MVC ir atbildīgs par lietojumprogrammas datu un loģikas pārvaldību. Tā darbojas kā starpnieks starp datu bāzi un lietotāja interfeisu un nodrošina datu precīzu un drošu glabāšanu.
# - Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
   ## ORM ir veids, kā saskaņot programmēšanas kodu ar datu bāzes struktūru, ORM izmanto "metadatu deskriptorus", lai izveidotu slāni starp programmēšanas valodu un relāciju datu bāzi. ORM izmanto tīra sql vietā, jo ORM vienkāršo parastās darbības, nodrošina objektu kartēšanu un palīdz koda organizēšanā, kas vairākos gadijumos ir labāks veids nekā tirs sql.
# - Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
   ## $users = Users::where('rating', '>', 4)->get();
