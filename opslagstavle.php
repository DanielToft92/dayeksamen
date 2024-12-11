<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Re-Trade er din bæredygtige platform til tøjbytte. Deltag i vores events i Køge og gør en forskel for miljøet!">
    <meta name="keywords" content="Re-Trade, tøjbytte, bæredygtighed, Køge, genbrug, events">
    <meta name="author" content="Re-Trade">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include("navbar.php") ?>

<div class="h1omos">
    <h1>Opslagstavle</h1>
</div>

<!-- Bulletin Board Section -->
<section id="bulletin-board" style="text-align: center;">
    <p>Velkommen til opslagstavlen på Re-Trade – stedet hvor du kan vise dine mest unikke items frem og skabe interesse til vores næste event. Har du en særlig genstand, som du gerne vil bytte? Måske en designerhåndtaske, en vintage jakke eller et par limited edition sneakers? Del det her, så andre kan få øje på din vare og tage noget med, de tror, du vil være interesseret i.</p>
    <p><strong>Sådan fungerer det:</strong></p>
    <p>Upload et billede af din unikke vare.</p>
    <p>Tilføj en beskrivelse af varen – f.eks. mærke, størrelse og stand.</p>
    <p>Angiv datoen, til hvilket kommende event varen kan findes til.</p>
</section>



<div id="board">
    <button id="addNote">Tilføj note</button>
</div>


<?php include("footer.php") ?>




<script>

    const board = document.getElementById('board');
    const addNoteBtn = document.getElementById('addNote');

    window.addEventListener('DOMContentLoaded', () => {
        const savedNotes = JSON.parse(localStorage.getItem('notes')) || [];
        savedNotes.forEach(noteData => {
            createNote(noteData.name, noteData.date, noteData.description, noteData.isSaved);
        });
    });

    addNoteBtn.addEventListener('click', () => {
        createNote('', '', '', false);
    });


    function createNote(name, date, description, isSaved) {
        const note = document.createElement('div');
        note.classList.add('note');

        note.innerHTML = `
    <input type="text" placeholder="Navn" value="${name}" ${isSaved ? 'disabled' : ''} required>
    <input type="date" value="${date}" ${isSaved ? 'disabled' : ''} required>
    <textarea placeholder="Hvad sælger du?" rows="3" ${isSaved ? 'disabled' : ''} required>${description}</textarea>
    <div style="display: flex; gap: 10px; margin-top: 5px;">
        <button class="saveNote" style="display: ${isSaved ? 'none' : 'block'};">Gem</button>
        <button class="deleteNote">Slet</button>
    </div>
  `;

        board.appendChild(note);

        note.querySelector('.saveNote').addEventListener('click', () => {
            const inputs = note.querySelectorAll('input, textarea');
            let isComplete = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.style.borderColor = 'red';
                    isComplete = false;
                } else {
                    input.style.borderColor = '#ccc';
                }
            });

            if (isComplete) {
                alert('Noten er gemt!');

                inputs.forEach(input => input.setAttribute('disabled', true));

                note.querySelector('.saveNote').style.display = 'none';

                saveNotesToLocalStorage();
            } else {
                alert('Hver venlig og udfyld alle felter.');
            }
        });

        note.querySelector('.deleteNote').addEventListener('click', () => {
            if (confirm('Er du sikker på at du vil slette noten?')) {
                note.remove();
                saveNotesToLocalStorage();
            }
        });
    }

    function saveNotesToLocalStorage() {
        const notes = [];
        board.querySelectorAll('.note').forEach(note => {
            const inputs = note.querySelectorAll('input, textarea');
            const isSaved = note.querySelector('.saveNote').style.display === 'none';
            notes.push({
                name: inputs[0].value,
                date: inputs[1].value,
                description: inputs[2].value,
                isSaved
            });
        });
        localStorage.setItem('notes', JSON.stringify(notes));
    }

    </script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
