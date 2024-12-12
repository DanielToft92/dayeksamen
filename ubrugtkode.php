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

.card-header {
font-size: 1.25rem;
font-weight: bold;
color: #ece4cf;
text-align: center;
background-color: #978a6f;
border-bottom: 1px solid #978a6f;
}

/* Card Body Styling */
.card-body {
padding: 1.25rem;
color: #9a8977;
background-color: #ece4cf;
}

/* Card Footer Styling */
.card-footer {
background-color: #978a6f;
color: #ece4cf;
font-size: 0.875rem;
text-align: center;
border-top: 1px solid #978a6f;
}

/* Opslagstavle */

/* Board styling */
#board {
display: grid;
grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
gap: 15px;
padding: 20px;
background-color: #1a1a1a; /* Dark, asphalt-like background */
border: none;
min-height: 500px;
box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
}

/* Add Note Button */
#addNote {
background: linear-gradient(135deg, #876955, #ece4cf); /* Vibrant gradient */
color: #fff;
font-family: 'Urbanist', sans-serif;
font-size: 1rem;
padding: 10px 15px;
border: none;
border-radius: 5px;
cursor: pointer;
text-transform: uppercase;
letter-spacing: 1px;
box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
}

#addNote:hover {
background: linear-gradient(135deg, #ece4cf, #876955); /* Invert gradient */
transform: scale(1.05);
}

/* Note styling */
.note {
background: #9a8977; /* Dark, concrete-like background */
padding: 15px;
border-radius: 8px;
box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
color: #fff;
font-family: 'Urbanist', sans-serif;
}

/* Input and Textarea */
.note input,
.note textarea {
width: 100%;
margin-bottom: 10px;
padding: 8px;
background-color: #1a1a1a;
color: #fff;
border: 1px solid #555;
border-radius: 5px;
font-family: 'Urbanist', sans-serif;
}

.note input[disabled],
.note textarea[disabled] {
background-color: #333;
color: #888;
border: 1px solid #444;
}

/* Buttons */
.note button {
padding: 8px 12px;
border: none;
border-radius: 5px;
font-family: 'Urbanist', sans-serif;
font-size: 0.9rem;
cursor: pointer;
transition: all 0.2s ease-in-out;
}

.note button.saveNote {
background-color: #00b894; /* Vibrant green */
color: #fff;
}

.note button.saveNote:hover {
background-color: #009874;
}

.note button.deleteNote {
background-color: #d63031; /* Vivid red */
color: #fff;
}

.note button.deleteNote:hover {
background-color: #b22022;
}


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
