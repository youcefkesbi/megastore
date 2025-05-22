<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.7.3/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.7.3/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyA1Bb1mMQL7xk4LfzE-8g4K4ia2tGg2CQE",
    authDomain: "megastore-d0a55.firebaseapp.com",
    projectId: "megastore-d0a55",
    storageBucket: "megastore-d0a55.firebasestorage.app",
    messagingSenderId: "45237716650",
    appId: "1:45237716650:web:652f820f65dfdf088932d3",
    measurementId: "G-GPWKTM5C2D"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>