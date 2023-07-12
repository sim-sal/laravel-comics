<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $fumetti = [
        [
            "title" => "KNIGHT TERRORS: FIRST BLOOD #1",
            "description" => "When Batman, Superman, and Wonder Woman find the body of one of their earliest enemies inside the Hall of Justice, their investigation takes them past the land of the living, beyond the land of the dead, and directly to a new villain called Insomnia…who uses his powers to engulf every single hero and villain in their own dark and twisted nightmares. The only way to save the world is to call for the help of an unlikely hero-Deadman!

            The thrills and chills of Knight Terrors are brought to the DC Universe by DC architect and superstar writer Joshua Williamson with horrific art by comics legend Howard Porter!",
            "thumb" => "https://static.dc.com/2023-06/KT_FB_Cv1_00111_DIGITAL.jpg?w=640",
            "price" => "$5.99",
            "series" => "KNIGHT TERRORS 2023",
            "sale_date" => "2023-06-04",
            "type" => "comic book",
            "artists" => [
                "José Luis García-López",
                "Clay Mann",
                "Rafael Albuquerque",
                "Patrick Gleason",
                "Dan Jurgens",
                "Joe Shuster",
                "Neal Adams",
                "Curt Swan",
                "John Cassaday",
                "Olivier Coipel",
                "Jim Lee"
            ],
            "writers" => [
                "Brad Meltzer",
                "Tom King",
                "Scott Snyder",
                "Geoff Johns",
                "Brian Michael Bendis",
                "Paul Dini",
                "Louise Simonson",
                "Richard Donner",
                "Marv Wolfman",
                "Peter J. Tomasi",
                "Dan Jurgens",
                "Jerry Siegel",
                "Paul Levitz"
            ],
        ],
        [
            "title" => "KNIGHT TERRORS: BATMAN #1",
            "description" => "Ever since becoming Batman, Bruce Wayne has been a creature of the night. He transformed himself into a symbol that gave the criminals of Gotham nightmares. But now, trapped in the Nightmare Realm, Bruce is stalked by the horror he’s created! Can he escape before his own nightmares pull him deeper into the darkness?",
            "thumb" => "https://static.dc.com/2023-06/KT_BM_Cv1_00111_DIGITAL.jpg?w=640",
            "price" => "$3.99",
            "series" => "American Vampire 1976",
            "sale_date" => "2020-10-06",
            "type" => "comic book",
            "artists" => [
                "Rafael Albuquerque"
            ],
            "writers" => [
                "Scott Snyder"
            ],
        ],
        [
            "title" => "KNIGHT TERRORS: THE JOKER #1",
            "description" => "The Joker’s worst nightmare becomes a reality: he’s got a day job! How will he handle meetings that could have been emails?! Why did management cancel “bring your child to work” day?! Who will want to make small talk at the coffee machine?! What is Alexis going to pick for lunch?! And who is the masked madman terrorizing Gotham at night?!",
            "thumb" => "https://static.dc.com/2023-06/KT_TJ_Cv1_00111_DIGITAL.jpg?w=640",
            "price" => "$16.99",
            "series" => "Aquaman",
            "sale_date" => "2018-01-24",
            "type" => "graphic novel",
            "artists" => [
                "Stjepan Sejic"
            ],
            "writers" => [
                "Dan Abnett"
            ],
        ],
        [
            "title" => "KNIGHT TERRORS: POISON IVY #1",
            "description" => "“It’s another absolutely gorgeous and serene day in Pamela Isley’s lovely little new neighborhood! Everything and everyone here is wall-to-wall smiles! Nothing ever goes wrong, everyone is friends, and best of all, it’s made just for Ivy with lots and lots of love. Now, Pammy, don’t frown, don’t fuss, and don’t fret-just because this wasn’t what you thought you wanted, that doesn’t mean it won’t fit you like a glove!

            Now have some pie, dear, don’t think too hard, and just smile.",
            "thumb" => "https://static.dc.com/2023-06/KT_PI_Cv1_00111_DIGITAL.jpg?w=640",
            "price" => "$2.99",
            "series" => "Batgirl",
            "sale_date" => "2016-07-27",
            "type" => "comic book",
            "artists" => [
                "Rafael Albuquerque"
            ],
            "writers" => [
                "Hope Larson"
            ],
        ],
        [
            "title" => "KNIGHT TERRORS: BLACK ADAM #1",
            "description" => "Black Adam is defending Kahndaq from a border assault when the deadly nightmare wave sweeps the planet, putting all men, women, and children into the nightmare realm…including the fierce monarch! But what are his deepest, darkest nightmares? What horror can put fear into the heart of Black Adam?! Knight Terrors begins!",
            "thumb" => "https://static.dc.com/2023-06/KT_BA_Cv1_00111_DIGITAL.jpg?w=640",
            "price" => "$3.99",
            "series" => "Batman",
            "sale_date" => "2018-10-03",
            "type" => "comic book",
            "artists" => [
                "Tony S. Daniel"
            ],
            "writers" => [
                "Tom King"
            ],
        ],
        [
            "title" => "STEELWORKS #2",
            "description" => "“John Henry Irons’s Steelworks company may be up and running, but this radical reimagining of Metropolis civic works has caught the attention of the biggest players in the city-both good and evil! With rival businessman Charles Walker III’s newest mutation, the Silver Mist, stalking Steel’s armory, John Henry had better watch his back or he might get a knife planted into it! All this while wrestling with the biggest question of all for our man of steel…“Am I man or Super-Man?”",
            "thumb" => "https://static.dc.com/2023-06/STLWRKS_Cv2_00211_DIGITAL.jpg?w=640",
            "price" => "$2.99",
            "series" => "Batman Beyond",
            "sale_date" => "2016-10-26",
            "type" => "comic book",
            "artists" => [
                "Bernard Chang"
            ],
            "writers" => [
                "Dan Jurgens"
            ],
        ],
        [
            "title" => "PEACEMAKER TRIES HARD! #3",
            "description" => "Betrayed, bleeding, and broken, Peacemaker drags his finely toned body to a local watering hole where he can existentially question his violent pursuit of peace from the safety of a barstool. But his wallowing is short-lived. He’s going to get his dog back…but he’s going to need some help. Lucky for Peacemaker, his parole officer, Richard, has a colorful costumed past…",
            "thumb" => "https://static.dc.com/2023-06/PM_TA_Cv3_00311_DIGITAL.jpg?w=640",
            "price" => "$3.99",
            "series" => "Batman/Superman",
            "sale_date" => "2019-08-28",
            "type" => "comic book",
            "artists" => [
                "David Marquez"
            ],
            "writers" => [
                "Joshua Williamson"
            ],
        ],
        [
            "title" => "KNIGHT TERRORS: RAVAGER #1",
            "description" => "Defend your life, Rose Wilson! Ravager is separated from Stormwatch and trapped in a nightmare world where she must protect her younger self from being consumed and corrupted by the Murder Man and his blood-crazed Slaughter Squadron. Can Ravager protect a young Rose Wilson without losing her own identity? Why does the Murder Man seem so familiar, and how does he know so much about Rose?",
            "thumb" => "https://static.dc.com/2023-06/KT_R_Cv1_00111_DIGITAL.jpg?w=640",
            "price" => "$4.99",
            "series" => "Batman/Superman Annual",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
            "artists" => [
                "Clayton Henry",
                "Gleb Melnikov",
                "Dale Eaglesham"
            ],
            "writers" => [
                "Joshua Williamson"
            ],
        ],
        [
            "title" => "ADVENTURES OF SUPERMAN: JON KENT #5",
            "description" => "The Super Sons are reunited and up against an entire world of Injustice…but in this penultimate issue, will Jon Kent have a hope of returning to his Earth? It’s a battle for the soul of Superman and the safe return of the Super Son as the Injustice saga cranks up the heat!",
            "thumb" => "https://static.dc.com/2023-06/AoS_JK_Cv5_00511_DIGITAL.jpg?w=640",
            "price" => "$5.99",
            "series" => "Batman: The Joker War Zone",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
            "artists" => [
                "Guillem March",
                "Ashley A. Woods",
                "Olivier Coipel",
                "James Stokoe",
                "Darko Lafuente"
            ],
            "writers" => [
                "Sam Johns",
                "Joshua Williamson",
                "John Ridley"
            ],
        ],
        [
            "title" => "BATMAN VS. ROBIN",
            "description" => "Spinning out of the events of both Batman/Superman: World’s Finest and Shadow War, father and son will do battle in one of the most Earth-shattering tales ever told! Deep in the heart of Lazarus Island, the demonic legacy of the al Ghul family line has at last been freed, and the Devil Nezha is out for blood. To reclaim his total domination over planet Earth, Nezha has supercharged all magic-anyone who dares use it is overcome by a demonic evil that boosts their abilities to dangerous, unpredictable, and in some cases deadly levels! With Damian in Nezha’s clutches and Bruce haunted by the return of an old friend, the Dark Knight and the Boy Wonder are pitted against one another in the battle of the century! Legendary writer Mark Waid helms the next epic saga in Batman history, while superstar artist Mahmud Asrar makes his triumphant return to DC!",
            "thumb" => "https://static.dc.com/2023-06/BMvROBIN%20%28Cover%29.jpg?w=640",
            "price" => "$6.99",
            "series" => "Batman: Three Jokers",
            "sale_date" => "2020-08-25",
            "type" => "comic book",
            "artists" => [
                "Jason Fabok"
            ],
            "writers" => [
                "Geoff Johns"
            ],
        ],
        [
            "title" => "BATMAN - ONE BAD DAY: TWO-FACE",
            "description" => "HEADS OR TAILS, BATMAN WILL LOSE. Two-Face has always been viewed as Batman’s most tragic villain. If only Harvey Dent hadn’t been scarred by acid, he could have continued his good work as D.A. in Gotham City and been Batman’s greatest ally and friend…right? Or has Batman extended him too much grace in his multiple attempts at reform? Batman will question himself as Dent is free once more, still scarred but seemingly free of Two-Face’s influence. But when it’s revealed that Harvey’s father has been threatened to be murdered on his 88th birthday, will Two-Face be able to resist joining the party?

            Collecting Batman - One Bad Day: Two-Face #1, from the bestselling creative team of Mariko Tamaki (Detective Comics, Crush & Lobo) and Javier Fernandez (Nightwing, King Spawn).",
            "thumb" => "https://static.dc.com/2023-06/BMOBDTF%20%28%20Cover%29.jpg?w=640",
            "price" => "$4.99",
            "series" => "Batman: White Knight Presents: Harley Quinn",
            "sale_date" => "2020-10-20",
            "type" => "comic book",
            "artists" => [
                "Matteo Scalera"
            ],
            "writers" => [
                "Katana Collins"
            ],
        ],
        [
            "title" => "BATMAN - ONE BAD DAY: PENGUIN",
            "description" => "BUILD YOUR EMPIRE BACK. The Penguin’s criminal enterprise and the Iceberg Lounge have been stolen out from under him by his former associate the Umbrella Man. The Umbrella Man has removed all the rules for crime in Gotham City that the Penguin put in place, and the city is in chaos. The Penguin is a broken man, and he’ll have to travel through the burning streets of Gotham with a gun and a single bullet putting together a new crew to take back what he’s built. Will Batman help the devil he knows or face the devil he doesn’t in the form of the Umbrella Man?

            Collecting the crime epic Batman - One Bad Day: Penguin #1, from the critically acclaimed creative team of John Ridley (I Am Batman, The Other History of the DC Universe) and Giuseppe Camuncoli (The Joker, The Other History of the DC Universe).",
            "thumb" => "https://static.dc.com/2023-06/BMOBD_PENGUIN_CE%20%28COVER%29.jpg?w=640",
            "price" => "$16.99",
            "series" => "Catwoman",
            "sale_date" => "2019-04-10",
            "type" => "graphic novel",
            "artists" => [
                "Fernando Blanco",
                "Joëlle Jones"
            ],
            "writers" => [
                "Joëlle Jones"
            ],
        ],
    ];

    return view('home', compact('fumetti'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
