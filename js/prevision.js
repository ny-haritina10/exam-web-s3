// VARIABLES ===========================================
var form = document.getElementById("prevision-form");
var handleUrl = "../php/traitement/traitement_prevision.php";


// EVENT ===============================================
window.addEventListener("load", function () {
    form.addEventListener("submit", handleSubmit);
});


// FUNCTION ===========================================
function handleSubmit(event) {
    event.preventDefault();
    sendData();
}

function createXHR() {
    var xhr;

    try {
        xhr = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
        try {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        } catch (e2) {
            try {
                xhr = new XMLHttpRequest();
            } catch (e3) {
                xhr = false;
            }
        }
    }

    return xhr;
}

function sendData() {
    var xhr = createXHR();
    var formData = new FormData(form);

    xhr.addEventListener("error", () => {
        console.log(xhr.responseText);
        alert("Oups! Something went wrong.");
    });

    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                try {
                    console.log(xhr.responseText);
                    var response = JSON.parse(xhr.responseText);
                    console.log(response);
                    handleResponse(response); // Appel de la fonction pour afficher les cartes
                } catch (e) {
                    console.log(e.message + " : " + xhr.responseText);
                }
            } else {
                console.error("Code d'erreur de statut : " + xhr.status);
            }
        }
    };    

    xhr.open("POST", handleUrl);
    xhr.send(formData);
}

function afficherCartes(parcelles) {
    var productContainer = document.getElementById("row-card"); 

    productContainer.innerHTML = '';

    parcelles.forEach(function(parcelle, index) {
        var productBox = document.createElement('div');
        productBox.classList.add('col-md-3', 'col-sm-6');
        productBox.innerHTML = `
            <div class="single-product-box">
                <h5>Parcelle #${index + 1}</h5>
                <br>
                <h5>${parcelle.nom_variete}</h5>
                <h5>${parcelle.surface} ha</h5>
                <div class="product-photo">
                    <div class="teashop-table">
                        <div class="teashop-table-cell">
                            <img src="./front-office/assets/img/product/${rand(1,4)}.jpg" alt="Product Photo">
                        </div>
                    </div>
                </div>
                <p>Nombre de pied: ${parcelle.nbr_pied}</p>
                <br>
                <p>Poids restant: ${parcelle.poidsRestants} kg</p>
            </div>
        `;

        productContainer.appendChild(productBox);
    });
}


function handleResponse(response) {
    if (response && response.success && response.parcelles) {
        afficherCartes(response.parcelles);
    } else {
        console.error("Erreur lors de la récupération des données.");
    }
}


function rand(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}