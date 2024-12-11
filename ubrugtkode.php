<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>


/* Hent data fra databasen */

<div class="row g-2">
    <?php
    $produkter = $db->sql("SELECT * FROM produkter");
    foreach($produkter as $produkt) {
    ?>
    <div class="col-12 col-md-6">
        <div class="card w-100">
            <div class="card-header">
                <?php
                echo $produkt->prodNavn;
                ?>
            </div>
            <div class="card-body">
                <?php
                // Indsæt andet felt fra database
                ?>
            </div>
            <div class="card-footer text-muted">
                <?php
                // Indsæt andet felt fra database
                ?>
            </div>
        </div>
    </div>
<?php
}
?>



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
