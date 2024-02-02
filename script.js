// Funzione per caricare e visualizzare il contenuto del file di licenza
function showLicense() {
    // Effettua una richiesta per ottenere il contenuto del file licenza
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "LICENSE.txt", true); // Assicurati che il percorso del file sia corretto
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Mostra il contenuto del file licenza nel div appropriato
            var licenseContent = document.getElementById("licenseContent");
            licenseContent.textContent = xhr.responseText;
            licenseContent.style.display = "block"; // Mostra il contenuto
        }
    };
    xhr.send();
}

// Aggiungi un gestore per il clic sul pulsante "Mostra licenza"
document.getElementById("showLicenseBtn").addEventListener("click", showLicense);
