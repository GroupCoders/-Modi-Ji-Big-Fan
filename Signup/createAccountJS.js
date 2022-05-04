
    const name = document.getElementById("FnameFromUser");
    const email = document.getElementById("emailFromUser");
    const age = document.getElementById("ageFromUser");
    const gender = document.getElementById("genderFromUser");
    const phone = document.getElementById("phoneFromUser");
    const password = document.getElementById("passwordFromUser");
    // ---------------------- References ---------------------------------//

    function signupFunction() {
        //var result ="<?php phpSignUP(); ?>"
        //document.write(result);
        console.log("It worked");
    }

    document.getElementById("signupButton").addEventListener("click", signupFunction);














    /*
        console.log("Loading firebase");
        // Import the functions you need from the SDKs you need

        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
        import { getDatabase } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-database.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyBlbve_QVZkt4ns1GhfKXJEB5YfziyIkBM",
            authDomain: "report-project-2db60.firebaseapp.com",
            databaseURL: "https://report-project-2db60-default-rtdb.firebaseio.com",
            projectId: "report-project-2db60",
            storageBucket: "report-project-2db60.appspot.com",
            messagingSenderId: "1010937913051",
            appId: "1:1010937913051:web:902917a4a3dd820eca36fe",
            measurementId: "G-04M747GP99"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const database = getDatabase(app);
        console.log("Loaded firebase");
        alert("Done loading Firebase SDK");
    */
