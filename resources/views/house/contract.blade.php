<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
   
                <p>  <h4> <strong>CONTRAT DE LOCATION -- HABITATION (*)</strong> </h4></p>
                <p>Entre les soussign&eacute;s&nbsp;:</p>
                <p>Mr El hadji Fallou NDIAYE, titulaire de la carte d&rsquo;identit&eacute; N&deg; 1200 1972 00737 d&eacute;livr&eacute;e &agrave; Dakar le 27/04/2017, propri&eacute;taire de l&rsquo;immeuble sis aux HLM 1 Villa n&deg; 211 Dakar.</p>
                <p>D&rsquo;une part Et</p>
                <p>{{$unlocataire->sexe}} {{$unlocataire->prenom}}  {{$unlocataire->nom}} Date de naissance&nbsp;: {{$unlocataire->date_naissance}} &agrave; {{$unlocataire->lieu_naissance}}.</p>
                <p>Carte d&rsquo;Identit&eacute; Nationale N&deg;&nbsp;: 2&nbsp; {{$unlocataire->NIN }} D&eacute;livr&eacute;e &agrave;&nbsp;: {{$unlocataire->lieudelivre}}  le {{$unlocataire->datedelivre}} &nbsp;</p>
                <p>Profession&nbsp;: {{$unlocataire->profession}} Tel&nbsp;: {{$unlocataire->contact}}.</p>
                <p>D&rsquo;Autre part,</p>
                <p><strong>IL EST CONVENU ET ARRETE CE QUI SUIT&nbsp;:</strong></p>
                
                <p>Article I&nbsp;: Monsieur El hadji Fallou NDIAYE, bailleur, donne en location &agrave; <strong>{{$unlocataire->sexe}}  {{$unlocataire->prenom}}  {{$unlocataire->nom}} </strong>signataire du pr&eacute;sent contrat et qui accepte,{{$unappartement->nom}}; comportant&nbsp;:&nbsp;</p>
                <p>{{$unappartement->piece}}</p>
                
                <p>Article 2&nbsp;: La dur&eacute;e de la location est &eacute;gale &agrave; un (1) an renouvelable, &agrave; compter du mois de {{$unlocataire->deb_mois}}  {{$unlocataire->deb_ans}} au mois  {{$unlocataire->fin_mois}}  {{$unlocataire->fin_ans}}.</p>
                <p>Au terme de cette p&eacute;riode, un nouveau contrat pourrait &ecirc;tre conclu.</p>
                <p>La r&eacute;siliation du contrat peut &ecirc;tre faite, suivant le droit commun, par &eacute;crit, en respectant un pr&eacute;avis de trois (3) mois (pour le bailleur) et d&rsquo;un (1) mois (pour le locataire).</p>
               
                <p>Article 3&nbsp;: Le loyer est fix&eacute; &agrave; une mensualit&eacute; de {{$unappartement->prix_l}}</p>
                <p>&nbsp;({{$unappartement->prix}}) Payable au plus tard le 05 de chaque mois.</p>
                <p>Le locataire &agrave; l&rsquo;obligation de donner une caution de {{$unappartement->prix}} et une avance de {{$unappartement->prix}} et de signer avec le bailleur l&rsquo;&eacute;tat des lieux avant la remise des clefs de l&rsquo;appartement.</p>
               
               
                <p>Article 4&nbsp;: Le propri&eacute;taire s&rsquo;engage &agrave; remettre au locataire un appartement en bon &eacute;tat et il a l&rsquo;obligation &agrave; faire, pendant la dur&eacute;e du contrat, les grosses r&eacute;parations.</p>
               
                <p>Article 5&nbsp;: Le locataire reconna&icirc;t avoir visit&eacute; l&rsquo;appartement et l&rsquo;avoir trouv&eacute; en bon &eacute;tat. Les d&eacute;gradations survenues au cours du bail sont &agrave; la charge du preneur. Celui &ndash; ci a l&rsquo;obligation de faire les menues r&eacute;parations (r&eacute;parations locatives&nbsp;: vitres, lampes, serrures, robinets et autres &eacute;quipements), et de proc&eacute;der &agrave; l&rsquo;entretien de son appartement en bon p&egrave;re de famille. Le preneur est responsable des pertes survenant durant son bail.</p>
                <p>L&rsquo;entretien des parties communes est &agrave; la charge de l&rsquo;ensemble des locataires de l&rsquo;immeuble (vestibule, escalier, paliers, terrasse,).</p>
               
                <p>Article 6&nbsp;: Le preneur de l&rsquo;appartement est tenu de le garnir de meubles suffisants pouvant servir de garantie au paiement des loyers.</p>
               
                <p>Article 7&nbsp;: Le locataire est tenu de respecter la destination donn&eacute;e &agrave; l&rsquo;appartement dans lequel il ne doit exercer aucune activit&eacute; autre qu&rsquo;Habitation.</p>
               
                <p>Article 8&nbsp;: Le preneur ne doit faire ni transformation, ni extension dans l&rsquo;appartement sans autorisation formelle et &eacute;crite du bailleur. Toutes les installations, les embellissements et am&eacute;liorations pr&eacute;sentant un caract&egrave;re d&rsquo;immeuble par destination (exemple&nbsp;: faux plafond d&eacute;coratif) deviendront enfin de location la propri&eacute;t&eacute; du bailleur sans indemnit&eacute; et sans pr&eacute;judice du droit qui lui est r&eacute;serv&eacute; d&rsquo;exiger la remise des lieux dans l&rsquo;&eacute;tat primitif aux frais du preneur.</p>
              
                <p>Article 9&nbsp;: En cas d&rsquo;incendie volontaire provenant de son appartement, le preneur est responsable et r&eacute;pond de toutes les cons&eacute;quences.</p>
               
                <p>Article 10&nbsp;: Les charges locatives sont &agrave; la charge du locataire. Elles concernent l&rsquo;eau, l&rsquo;&eacute;lectricit&eacute;, l&rsquo;entretien des regards d&rsquo;eaux us&eacute;es, le gardiennage, la taxe d&rsquo;enl&egrave;vement des ordures m&eacute;nag&egrave;res (T.O.M.) et l&rsquo;enregistrement du contrat.</p>
               
                <p>Article 11&nbsp;: Il est interdit au locataire de sous loyer la totalit&eacute; de l&rsquo;appartement.&nbsp;</p>
               
                <p>Article 12&nbsp;: Le preneur ne doit pas troubler la jouissance et la qui&eacute;tude de ses colocataires au niveau de l&rsquo;immeuble (bruit, musique,)</p>
                <p>Il lui est interdit d&rsquo;&eacute;lever des animaux domestiques (moutons, chien &hellip;)</p>
              
                <p>Article 13&nbsp;: Aucun arri&eacute;r&eacute; de paiement de deux (02) mois ne sera tol&eacute;r&eacute;, car il sera pr&eacute;vu dans ce cas une r&eacute;siliation du pr&eacute;sent contrat et une proc&eacute;dure d&rsquo;expulsion sans pr&eacute;avis &agrave; la suite d&rsquo;un avertissement de non &ndash; respect du contrat.&nbsp;</p>
                <p>Les frais d&rsquo;huissier seront &agrave; la charge du locataire.</p>
              
                <p>Article 14&nbsp;: A l&rsquo;expiration du contrat et au d&eacute;part du preneur, celui &ndash; ci doit produire la preuve du r&egrave;glement complet des charges locatives (factures d&rsquo;eau, d&rsquo;&eacute;lectricit&eacute;,)</p>
               
                <p>Article 15&nbsp;: Le locataire a l&rsquo;obligation de restituer l&rsquo;appartement lou&eacute; en bon &eacute;tat avant son d&eacute;part, c&rsquo;est &agrave; dire qu&rsquo;il remette l&rsquo;appartement dans l&rsquo;&eacute;tat o&ugrave; il l&rsquo;avait pris. En d&rsquo;autres termes, le locataire doit abolir les traces de son passage.</p>
                <p>La caution constitue une partie des frais de r&eacute;paration et des factures impay&eacute;es au d&eacute;part du locataire. L&rsquo;avance sert au paiement du dernier loyer si celui-ci n&rsquo;a pas &eacute;t&eacute; pay&eacute;. Dans le cas contraire cette avance sera rembours&eacute;e.</p>
              
                <p>Article 16&nbsp;: La facult&eacute; de demander la r&eacute;vision du loyer en fonction de la r&eacute;glementation en vigueur est accord&eacute;e &agrave; chacune des deux parties contractantes pendant la dur&eacute;e de la location.</p>
               
              
                <p>Article 17&nbsp;: Le pr&eacute;sent contrat pass&eacute; de gr&eacute; &agrave; gr&eacute; est renouvelable sauf avis contraire de la part de l&rsquo;une des parties contractantes.</p>
               
                <p>Article 18&nbsp;: Le propri&eacute;taire autorise &agrave; {{$unlocataire->sexe}}  <strong><p> {{$unlocataire->prenom}}  {{$unlocataire->nom}} </strong>de faire un abonnement en son nom pour le branchement particulier &agrave; l&rsquo;eau et &agrave; l&rsquo;&eacute;lectricit&eacute; au niveau de la SEN EAU et de la SENELEC.</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Fait en deux (02) exemplaires &agrave; Dakar, le {{Carbon\Carbon::now()->translatedFormat('d F Y à H\hi') }}</p>
                <p><strong>Le G&eacute;rant</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <strong>Le Locataire</strong></p>
                <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;&lt; Lu et approuv&eacute;&gt;&gt;</strong></p>
                <p><br /><br /><br /><br /></p>
                <p>(*) . Code des obligations civiles et Commerciales.</p>
                <p>Loi N&deg; 84 &ndash; 12 du 04 janvier 1984</p> 

    </div>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>

