<?php

use Illuminate\Database\Seeder;

class ProdusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produs')->insert([

            [
                'nom' => 'Château Cambon la Pelouse',
                'description' => 'Annick, Jean-Pierre Marie et leur fils Nicolas ont pris la relève de M de Cambon, créateur du domaine. Depuis 1996, ils ont entièrement reconfiguré les lieux, au niveau de l\'équipement, oui, mais aussi de l\'approche œnologique empreinte d’amour, de créativité et de lucidité.',
                'url' => 'http://www.cambon-la-pelouse.com/',
            ],
            [
                'nom' => 'Château Sénéjac',
                'description' => 'Sur les terres du Haut Médoc, sur la croupe qui domine la jalle de l’Aygue Longue, au milieu des vignes, d’un parc aux arbres centenaires et de viviers se niche le Château Sénéjac.

                Nicolas de Bloys est le premier propriétaire connu. Au XVIème siècle, ce fougueux écuyer - époux de Jeanne Fleix - planta les premières vignes du domaine.
                
                Au XVIIIe siècle, le château est racheté par Joseph-Ignace de Chatard, conseiller au Parlement de Bordeaux. En 1746, il vend Sénéjac à son neveu, Jean-Louis Baour, futur maire du Pian-Médoc qui entreprend la construction de nouveaux bâtiments.',
                'url' => 'https://www.chateau-senejac.com/',
            ],
            [
                'nom' => 'Château Charmail',
                'description' => 'Charmail se situe en bord de Gironde, ce qui lui permet de bénéficier d’une certaine douceur dans les températures et d’être à l’abri des fortes gelées d’hiver qui peuvent être dramatiques pour la plantation.',
                'url' => 'http://www.chateau-charmail.fr/charmail.html',
            ],
            [
                'nom' => 'Château Sociando-Mallet',
                'description' => 'Depuis le 17ème siècle, Sociando-Mallet occupe la butte de Baleyron, l’un des plus beaux terroirs de graves du Médoc. Situé sur la commune de Saint-Seurin-de-Cadourne, au nord de Pauillac, son vignoble domine l’estuaire de la Gironde, lové au creux de la courbe que le fleuve dessine à cet endroit.

                Le terroir de Sociando-Mallet est constitué de graves de l’époque guntzienne, sur un sous sol argilo-calcaire profond. Il permet aux cabernets sauvignons de mûrir dans d’excellentes conditions et aux merlots d’acquérir profondeur et complexité, tout en régulant parfaitement l’alimentation en eau de la vigne. Ce terroir est l’âme des vins de Sociando, qui lui doivent leur structure complexe, leur fraîcheur et leur élégance.',
                'url' => 'https://www.sociandomallet.com/',    
            ],
            [
                'nom' => 'Charles Mignon',
                'description' => 'Dans la modernité d’une cuverie inox thermorégulée et de petite contenance, la Maison Charles Mignon élabore des champagnes de précision. La mise en valeur de ses terroirs et des trois cépages (Chardonnay, Pinot Meunier, Pinot Noir) à travers des champagnes d’exception lui a valu, et ce depuis 2003, d’être référencée aux côtés des plus grandes et prestigieuses maisons de champagne à travers l’UMC, l’Union des Maisons de Champagne.',
                'url' => 'https://www.champagne-mignon.fr/',
            ],
            [
                'nom' => 'Domaine Chandon de Briailles',
                'description' => 'Situé à quatre kilomètres de Beaune, en Côte-d\'Or, le Domaine se trouve dans la partie nord de Beaune dénommée Côte de Beaune du Célèbre vignoble bourguignon.

                Sa superficie s\'étend sur 13,7 hectares à parts égales entre les trois communes de Savigny-Lès-Beaune, Pernand-Vergelesses et Aloxe-Corton.',
                'url' => 'http://www.chandondebriailles.com/',
            ],
            [
                'nom' => 'Domaine Pierre Usseglio',
                'description' => 'Nous élaborons un Châteauneuf-du-Pape rouge traditionnel.
                La moitié de nos vignes a plus de 65 ans, l’autre atteint une quarantaine d’années. Les rendements obtenus sont très faibles, environ 20 à 25 hectolitres par hectare, en fonction des millésimes. Les vendanges sont toujours manuelles et le tri demeure sélectif. Le raisin est éraflé et la cuvaison dure de 25 à 30 jours.
                Les vins sont ensuite élevés à 50 % en foudre de chêne pendant 12 et à 50 % en cuve béton. Dès lors, nous obtenons des vins puissants, ronds, aux arômes prononcés de fruits rouges et d’épices.
                La période optimale pour les boire se situe entre 5 et 10 ans, en fonction des goûts et des millésimes.
                Le Châteauneuf-du-Pape rouge accompagne les viandes, les plats en sauce ainsi que les fromages les plus savoureux.',
                'url' => 'https://www.domaine-usseglio-pierre.com/',
            ],
            [
                'nom' => 'Az. Ferrara',
                'description' => 'The company Benito Ferrara has ancient roots, dating back to the dawn of the last century. Today it covers 8 hectares. All areas planted with vines fall in the municipality of Tufo, the hamlet of San Paolo, in the traditional production area for the cultivation of the vine Greek di Tufo, and in the municipality of Montemiletto for the production of the Aglianico grape. The soils are ideally located between 450 and 600 m above sea level, with a southern exposure, a hilly and a medium texture texture.',
                'url' => 'http://www.benitoferrara.com/index.php/en/',
            ],
            [
                'nom' => 'Château Potensac',
                'description' => 'Ce domaine appartient à la même famille depuis la nuit des temps et il s’est toujours transmis par les femmes. Ainsi le propriétaire actuel Jean-Hubert DELON le tient de sa grand-mère paternelle, Georgette Liquard. Bien que proche du fleuve, Potensac se situe sur un point haut du Nord-Médoc. Le site est de ce fait peuplé depuis fort longtemps. En effet, Médoc vient de “ medio aquae ” qui signifie “ au milieu des eaux ”… Planté sur les sols les plus qualitatifs de la commune d’Ordonnac, le vignoble atteint aujourd’hui 60 hectares sur un terroir où la typicité de chaque cépage s’exprime très clairement, et confère au vin une formidable capacité au vieillissement. ',
                'url' => 'http://www.domaines-delon.com/',
            ],
            [
                'nom' => 'Bodegas y Viñedos Alión ',
                'description' => 'Vin élaboré à partir de la variété Tinto fino. Il est vendangé à la main dans des caisses de 12 kg et est amené immédiatement à la cave pour son entrée sur les tables de sélection. Les fermentations sont menées à bien dans des cuves en bois avec un contrôle de température jusqu\'à obtenir une bonne extraction polyphénolique qui apportera la robe généreuse et la structure ferme qui constituent partie de la personnalité de ce vin et enfin un élevage en fût de 14 à 20 mois, dépendant des caractéristiques du cru, est réalisé dans sa totalité dans des nouvelles barriques bordelaises en chêne français. Ces barriques, des entreprises les plus prestigieuses de Bordeaux (Radoux, Taranssaud, Saury et Vicard), supposent un investissement en chêne important, car, millésime après millésime, tout le vin qui est élaboré chez Alión restera dans des nouvelles barriques qui, après son abandon pour être mis en bouteilles, ne seront pas réutilisées par la cave.',
                'url' => 'http://www.vega-sicilia.com/',
            ],
            [
                'nom' => 'Artisans Vignerons d’Yvorne',
                'description' => 'L’AVY, ou Artisans Vignerons d’Yvorne, est une société coopérative fondée en 1902. Aujourd\'hui, notre équipe, forte d’une dizaine de professionnels, encave, vinifie et commercialise la production de vins suisses de ses quelque 120 membres.',
                'url' => 'https://www.avy.ch/',
            ],
        ]);
    }
}
