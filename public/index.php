<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'core/header.php' ?>
    <main>
        <section class="explanation mt-4">
            <img class="img_section" style="float:right" src="images/logo_monero.png">
            <h2 class="text-4xl">Monero : l'explication simpe</h1>
                <p>La majorité des cryptomonnaies aujourd'hui (incluant le Bitcoin) ne sont pas tout à fait transparentes. Bien que l'utilisateur soit caché derrière une adresse de portefeuille, il est possible de retrouver les détenteurs d'une adresse, et n'importe qui dans le monde peut donc retrouver le détenteur d'une adresse spécifique.</p>
        </section>
        <section class="diff mt-4">
            <img class="img_section" style="float:left" src="images/bitcoin_logo.png">
            <h2 class="text-4xl">En quoi le monero est-il différent du BTC ? </h2>
            <p>La confidentialité est un point essentiel dans l'espace des crypto-monnaies. Ni les entreprises ni les personnes n'ont besoin de rendre toutes leurs données sans restriction sur la blockchain publique, qui peuvent être consultées librement, sans aucune limitation, par les autorités locales ou internationales, les membres de la famille, les collègues ou les opposants.

                À l'heure actuelle, il existe de nombreuses expériences et études sur différentes manières d'assurer la confidentialité dans les blockchains, mais un examen suffisamment détaillé de ce problème n'a pas encore été présenté.

                <h3>Confidentialité dans Bitcoin</h3>
                Bitcoin a été créé en tant que crypto-monnaie pseudonyme (par opposition à anonyme) qui ne maintenait la confidentialité des utilisateurs que dans la mesure où il n'y avait aucun moyen de lier des entités du monde réel à des adresses sur le réseau Bitcoin. Cependant, grâce au créateur connu de la blockchain Bitcoin, il est immédiatement devenu évident qu'elle était susceptible de reconnaître les utilisateurs sur la base de modèles dans leur utilisation d'emplacements spécifiques et d'activités connexes.

                Il est devenu facile d'échanger des crypto-monnaies après avoir utilisé la calculatrice btc to etn . En outre, les nœuds du réseau, lors de la diffusion d'informations sur les transactions, divulguent même des adresses IP.

                En réponse au déclin de la confidentialité de Bitcoin, des services dits de mixage de crypto-monnaie comme CoinJoin ont été conçus pour augmenter l'anonymat lors de l'application de la blockchain. Dans CoinJoin, les utilisateurs produisent collectivement des transactions qui mélangent leur devise, ce qui anonymise l'utilisateur à l'intérieur d'un ensemble donné de pièces. Cette méthode est ensuite dupliquée entre différents utilisateurs pour améliorer l'anonymat global des participants. Les services de mixage comme ceux-ci ont toujours été utilisés à des fins illégales pour combiner des bitcoins identifiables avec d'autres médias et rendre difficile la recherche de leur source.

                Cependant, CoinJoin a ses inconvénients. La confidentialité ici est obtenue grâce à la grande taille de l'ensemble de pièces anonymes.

                <h3>Caractéristiques avantageuses de Monero</h3>
                Monero est un système open source sans aucune limitation. Il n'y a aucun pouvoir pour empêcher l'utilisation de la crypto-monnaie. Avantages de Monero :

                La confidentialité est le principal argument pour offrir aux utilisateurs un véritable anonymat tout en empêchant les autres de voir votre solde. De nombreuses autres crypto-monnaies en sont dépourvues.
                Interchangeabilité. Pour qu'un actif numérique devienne fongible, sa valeur doit être indépendante de sa cause ou de son utilisation. Si de nombreuses crypto-monnaies peuvent être blacklistées en raison, par exemple, d'un vol, elles ne seront pas fongibles. La crypto-monnaie Monero n'est pas tracée, elle est donc fongible.
                Indépendance vis-à-vis des ASIC à usage spécifique. L'exploitation minière n'est réelle qu'avec le matériel ASIC. Monero utilisera un algorithme de hachage alternatif CryptoNight avec des fonctionnalités supérieures pour rendre non rentable la fabrication de circuits intégrés appropriés pour l'extraction de Monero. Par conséquent, l'extraction de Monero se fait à l'aide de GPU.
                Évolutivité. La blockchain Monero est illimitée ; cette évolutivité devrait empêcher les frais de monter en flèche à mesure que l'utilisation augmente.
                Politique de clé
                Monero applique un système de clés différent de Bitcoin ou Ethereum – certaines devises fonctionnent avec un seul ensemble de clés : publiques et privées. Comment fonctionnent les clés Monero :

                pour les adresses publiques masquées, seules les clés de visualisation publiques sont créées ;
                pour vérifier la blockchain, pour confirmer la réception des fournitures, une clé de visualisation privée est requise ;
                la clé publique de la dépense est nécessaire pour confirmer le nom numérique de la transaction ;
                clés de dépenses privées pour les transactions sortantes.</p>
        </section>
        <section class="anonymity mt-4">
            <div class="col-auto">
            <img class="img_section" style="float:right" src="images/lock.png">
                </div>
            <div class="col-auto">
            <h2 class="text-4xl">Le monero est-il vraiment anonyme ?</h2>
            <p>Chaque transaction Monero masque par défaut les adresses d'émission, de réception et les montants échangés. Cette confidentialité permanente signifie que l'activité de chaque utilisateur Monero améliore la confidentialité de tous les autres utilisateurs, contrairement aux cryptomonnaies à transparence sélective (p.ex. Zcash).
                Monero est fongible. Grâce à l'obfuscation, Monero ne peut pas être sali par une participation à des transactions précédentes. Cela signifie que Monero sera toujours accepté sans risque de censure.
            </p>
            <p>Il n'y a pas de frais cachés et aucun risque de rétrofacturation frauduleuse. Monero est à l'abri des « contrôles de capitaux » - qui sont des mesures limitant les flux de monnaies traditionnelles, parfois à un degré extrême, dans des pays en proie à une instabilité économique.</p>
                </div>
        </section>
    </main>
    <?php include 'core/footer.php'; ?>
</body>

</html>