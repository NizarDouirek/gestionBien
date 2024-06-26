    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link rel='stylesheet' href='index.css'>
        <style>
        * {
        margin: 0;
        padding: 0;
        font-family: "oswald";
    }
    
    section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        width: 100%;
        background: url("/imgs/a.jpg") no-repeat;
        background-position: center;
        background-size: cover;
    }
    
    .form-box {
        position: relative;
        padding-inline: 100px;
        width: 400px;
        height: 500px;
        background: transparent;
        border: none;
        border-radius: 20px;
        backdrop-filter: blur(15px) brightness(80%);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    h2 {
        font-size: 2em;
        color: #fff;
        text-align: center;
        
    }
    
    .inputbox {
        position: relative;
        margin: 30px 0;
        width: 500px;
        border-bottom: 2px solid #fff;
    }
    
    .inputbox label {
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        color: #fff;
        font-size: 1.3em;
        pointer-events: none;
        transition: 0.5s;
    }
    
    input:focus~label,
    input:valid~label {
        top: -5px;
    }
    
    .inputbox input {
        width: 100%;
        height: 50px;
        -webkit-appearance: none;
        margin: 0;
        -moz-appearance: textfield;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1.2em;
        padding: 0 35px 0 5px;
        color: rgb(255, 160, 99);
    }
    
    .inputbox ion-icon {
        position: absolute;
        right: 8px;
        color: #fff;
        font-size: 1.2em;
        top: 20px;
    }
    
    .forget {
        margin: -10px 0 17px;
        font-size: 0.9em;
        color: #fff;
        display: flex;
        justify-content: space-between;
    }
    
    .forget label input {
        margin-right: 3px;
    }
    
    .forget a {
        color: #fff;
        text-decoration: none;
    }
    
    .forget a:hover {
        text-decoration: underline;
    }
    
    button {
        width: 100%;
        height: 40px;
        border-radius: 40px;
        background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99));
        border: none;
        color: white;
        letter-spacing: 0.1cm;
        outline: none;
        font-family: roboto;
        cursor: pointer;
        font-size: 1em;
        font-weight: 600;
    }  
    
    @media screen and (max-width: 480px) {
        .form-box {
            width: 100%;
            border-radius: 0px;
        }
    }
    </style>
    </head>

    <body>
            <section>
                <div class="form-box">
                    <div class="form-value">
                        <form  action="/modifierEmploye-traiter" method="post">
                            @csrf
                            <h2>Modification d'employe</h2><br>
                            <input type="hidden" name="id" value="{{$employes->id}}"/>
                            <div class="inputbox">
                                <ion-icon name="document-text-outline"></ion-icon>
                                <input type="text" value="{{$employes->num_Identification}}" name="num_Identification" required
                                pattern="[0-9]+" title="Le numéro de téléphone doit comporter que les chiffres">
                                <label>num_Identification</label>
                            </div>
                            <div class="inputbox"> <ion-icon name="person-outline"></ion-icon>  
                                <input type="text" value="{{$employes->nom_complet}}" name="nom_complet"  required
                                pattern="[A-Za-z]+" title="vous devez entrez un nom valide"> 
                                <label>nom_complet</label> </div>
                            <div class="inputbox"> <ion-icon name="call-outline"></ion-icon> 
                                <input type="text" value="{{$employes->num_telephone}}" name="num_telephone" required
                                pattern="[0-9]+" title="Le numéro de téléphone doit comporter que les chiffres">
                                <label>num_telephone</label> </div> <br>                           
                            <button>Modifier</button>
                            
                        </form>
                     </div>
                </div>
            </section> 
    </body>

    </html>