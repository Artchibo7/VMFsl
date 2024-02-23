document.getElementById("admin").addEventListener("click", ()=>{
    let password = prompt("Entrez votre mot de passe svp")
    if(password === "yourpassword"){
        window.location.href = "admin.html" 
    }else{
        alert ("Mot de passe érroné!!!");
    }
});