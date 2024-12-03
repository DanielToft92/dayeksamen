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

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-image: url('billeder/footerbaggrund2.png'); background-size: cover; background-position: center;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="omos.php">Om os</a>
                <a class="nav-link" href="kalender.php">Kalender</a>
                <a class="nav-link" href="opslagstavle.php">Opslagstavle</a>
            </div>
        </div>
    </div>
</nav>


<div id="board">
    <button id="addNote">Tilføj note</button>
</div>


<footer class="footer mt-auto py-3"
        style="background-image: url('billeder/footerbaggrund2.png'); background-size: cover; background-position: center; color: #000000;">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 style="color: inherit;">Kontakt Os</h5>
                <p style="color: inherit;">Email: re-trade@zealand.dk</p>
                <p style="color: inherit;">Telefon: +45 12345678</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5 style="color: inherit;">Følg Os</h5>
                <a href="#" style="color: inherit; text-decoration: none; margin: 0 10px;">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="#" style="color: inherit; text-decoration: none; margin: 0 10px;">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="#" style="color: inherit; text-decoration: none; margin: 0 10px;">
                    <i class="fab fa-tik-tok"></i> Tik-Tok
                </a>
                <a href="#" style="color: inherit; text-decoration: none; margin: 0 10px;">
                    <i class="fab fa-youtube"></i> Youtube
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <h5 style="color: inherit;">Om Projektet</h5>
                <p style="color: inherit;">Re-Trade er din platform til bæredygtig byttehandel.</p>
                <p style="color: inherit;">"Byt dig til en bæredygtig fremtid"</p>
            </div>
        </div>
    </div>
</footer>




<script>

    const board = document.getElementById('board');
    const addNoteBtn = document.getElementById('addNote');

    // Load saved notes from localStorage on page load
    window.addEventListener('DOMContentLoaded', () => {
        const savedNotes = JSON.parse(localStorage.getItem('notes')) || [];
        savedNotes.forEach(noteData => {
            createNote(noteData.name, noteData.date, noteData.description, noteData.isSaved);
        });
    });

    // Add Note Button
    addNoteBtn.addEventListener('click', () => {
        createNote('', '', '', false); // Create a new empty note
    });

    // Function to create and add a note to the board
    function createNote(name, date, description, isSaved) {
        const note = document.createElement('div');
        note.classList.add('note');

        // Add form fields
        note.innerHTML = `
    <input type="text" placeholder="Navn" value="${name}" ${isSaved ? 'disabled' : ''} required>
    <input type="date" value="${date}" ${isSaved ? 'disabled' : ''} required>
    <textarea placeholder="Hvad sælger du?" rows="3" ${isSaved ? 'disabled' : ''} required>${description}</textarea>
    <div style="display: flex; gap: 10px; margin-top: 5px;">
        <button class="saveNote" style="display: ${isSaved ? 'none' : 'block'};">Gem</button>
        <button class="deleteNote">Slet</button>
    </div>
  `;

        // Add note to the board
        board.appendChild(note);

        // Save note functionality
        note.querySelector('.saveNote').addEventListener('click', () => {
            const inputs = note.querySelectorAll('input, textarea');
            let isComplete = true;

            // Validate inputs
            inputs.forEach(input => {
                if (!input.value.trim()) { // Check for empty or whitespace-only values
                    input.style.borderColor = 'red';
                    isComplete = false;
                } else {
                    input.style.borderColor = '#ccc';
                }
            });

            if (isComplete) {
                alert('Noten er gemt!');

                // Lock the fields after saving
                inputs.forEach(input => input.setAttribute('disabled', true));

                // Hide the save button after saving
                note.querySelector('.saveNote').style.display = 'none';

                // Save all notes to localStorage
                saveNotesToLocalStorage();
            } else {
                alert('Hver venlig og udfyld alle felter.');
            }
        });

        // Delete note functionality
        note.querySelector('.deleteNote').addEventListener('click', () => {
            if (confirm('Er du sikker på at du vil slette noten?')) {
                note.remove();
                saveNotesToLocalStorage(); // Update localStorage after deletion
            }
        });
    }

    // Save all notes to localStorage
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
