<?php

namespace Database\Seeders;

use App\Models\Philosopher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $philosophers = [
                [
                    "name" => "Acrion",
                    "life" => "5th/4th century BC",
                    "school" => "Pythagorean",
                    "notes" => "visited by Plato"
                ],
                [
                    "name" => "Adrastus of Aphrodisias",
                    "life" => "2nd century AD",
                    "school" => "Peripatetic",
                    "notes" => "wrote commentaries on Aristotle's works and a commentary on Plato's Timaeus"
                ],
                [
                    "name" => "Aedesia",
                    "life" => "5th century",
                    "school" => "Neoplatonic",
                    "notes" => "wife of Hermias, and mother of Ammonius and Heliodorus"
                ],
                [
                    "name" => "Aedesius",
                    "life" => "3rd/4th century",
                    "school" => "Neoplatonic",
                    "notes" => "studied under Iamblichus before founding his own school in Pergamum"
                ],
                [
                    "name" => "Aeneas of Gaza",
                    "life" => "5th/6th century",
                    "school" => "Neoplatonic",
                    "notes" => "Christian convert who studied under Hierocles"
                ],
                [
                    "name" => "Aenesidemus",
                    "life" => "1st century BC?",
                    "school" => "Pyrrhonist",
                    "notes" => "wrote a book called Pyrrhonist Discourses which became a central text for the Pyrrhonists"
                ],
                [
                    "name" => "Aesara",
                    "life" => "5th/4th century BC",
                    "school" => "Pythagorean",
                    "notes" => "wrote On Human Nature, of which a fragment is preserved by Stobaeus"
                ],
                [
                    "name" => "Aeschines of Neapolis",
                    "life" => "2nd/1st century BC",
                    "school" => "Academic skeptic",
                    "notes" => "shared the leadership of the Academy at Athens together with Charmadas and Clitomachus about 110 BC"
                ],
                [
                    "name" => "Aeschines of Sphettus",
                    "life" => "5th/4th century BC",
                    "school" => "Socratic",
                    "notes" => "part of Socrates' circle and likely present at his death"
                ],
                [
                    "name" => "Aetius",
                    "life" => "4th century AD",
                    "school" => "Peripatetic",
                    "notes" => "Antiochean convert to Christianity who studied in Alexandria"
                ],
                [
                    "name" => "Agapius",
                    "life" => "5th/6th century AD",
                    "school" => "Neoplatonic",
                    "notes" => "studied under Marinus of Neapolis. known for his learning"
                ],
                [
                    "name" => "Agathobulus",
                    "life" => "1st/2nd century AD",
                    "school" => "Cynic",
                    "notes" => "known for his severe asceticism and teacher of Demonax"
                ],
                [
                    "name" => "Agathosthenes",
                    "life" => "uncertain date",
                    "school" => "geographer, historian or philosopher",
                    "notes" => "referred to by Tzetzes as his authority in matters connected with geography."
                ],
                [
                    "name" => "Agrippa the Skeptic",
                    "life" => "1st/2nd century AD",
                    "school" => "Pyrrhonist",
                    "notes" => "thought to be the creator of the \"five grounds of doubt\""
                ],
                [
                    "name" => "Albinus",
                    "life" => "2nd century AD",
                    "school" => "Middle Platonist",
                    "notes" => "lorem"
                ],
                [
                    "name" => "Alcibiades",
                    "life" => "450-404 BC",
                    "school" => "Socratic",
                    "notes" => "Athenian General and Politician"
                ],
                [
                    "name" => "Alcinous",
                    "life" => "2nd century AD?",
                    "school" => "Middle Platonist",
                    "notes" => "lorem"
                ],
                [
                    "name" => "Alcmaeon of Croton",
                    "life" => "5th century BC",
                    "school" => "Pythagorean",
                    "notes" => "interested in medicine"
                ],
                [
                    "name" => "Alexamenus of Teos",
                    "life" => "5th century BC?",
                    "school" => "Socratic",
                    "notes" => "may have been the first to write philosophical dialogues"
                ],
                [
                    "name" => "Alexander of Aegae",
                    "life" => "1st century AD",
                    "school" => "Peripatetic",
                    "notes" => "tutored the emperor Nero"
                ],
                [
                    "name" => "Alexander of Aphrodisias",
                    "life" => "2nd/3rd century AD",
                    "school" => "Peripatetic",
                    "notes" => "influential commentator on the Corpus Aristotelicum"
                ],
                [
                    "name" => "Alexicrates",
                    "life" => "1st/2nd century AD",
                    "school" => "Pythagorean",
                    "notes" => "lorem"
                ],
            ];

            Philosopher::insert($philosophers);
    }
}
