// VARIABLES ===========================================
var form = document.getElementById("cueilleur-form");
var handleUrl = "../php/traitement/traitement_insert_cueilleur.php";


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
                    alert("Variety Tea Inserted Successfuly !");
                } 
                
                catch (e) 
                { console.log(e.message + " : " + xhr.responseText); }
            } 
            
            else 
            { console.error("Code d'erreur de statut : " + xhr.status); }
        }
    };

    xhr.open("POST", handleUrl);
    xhr.send(formData);
}