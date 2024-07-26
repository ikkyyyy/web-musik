// document.addEventListener('DOMContentLoaded', function() {
//     const elements = {
//         signUpModal: document.getElementById('sign-up-modal'),
//         loginModal: document.getElementById('login-modal'),
//         notificationModal: document.getElementById('notification-modal'),
//         signUpBtn: document.getElementById('sign-up-btn'),
//         loginBtn: document.getElementById('login-btn'),
//         closeSignUp: document.getElementById('close-sign-up'),
//         closeLogin: document.getElementById('close-login'),
//         closeNotification: document.getElementById('close-notification'),
//         signUpForm: document.getElementById('sign-up-form'),
//         loginForm: document.getElementById('login-form'),
//         ageForm: document.getElementById('age-form'),
//         notificationMessage: document.getElementById('notification-message'),
//         searchForm: document.getElementById('search-form'),
//         searchInput: document.getElementById('search-input'),
//         searchResults: document.getElementById('search-results'),
//         playlistContainer: document.getElementById('playlist-container'),
//         audioPlayer: document.getElementById('audio-player'),
//         notification: document.getElementById('notification')
//     };

//     // Check if all elements exist
//     for (const [key, element] of Object.entries(elements)) {
//         if (!element) {
//             console.error(`Element with ID '${key}' is missing from the DOM.`);
//             return; // Stop the execution if any element is missing
//         }
//     }

//     // Event listeners and other functionality goes here...
// });

//     // Event listeners for buttons and forms
//     elements.signUpBtn.addEventListener('click', function() {
//         elements.signUpModal.style.display = 'block';
//     });

//     elements.loginBtn.addEventListener('click', function() {
//         elements.loginModal.style.display = 'block';
//     });

//     elements.closeSignUp.addEventListener('click', function() {
//         elements.signUpModal.style.display = 'none';
//     });

//     elements.closeLogin.addEventListener('click', function() {
//         elements.loginModal.style.display = 'none';
//     });

//     elements.closeNotification.addEventListener('click', function() {
//         elements.notificationModal.style.display = 'none';
//     });

//     elements.signUpForm.addEventListener('submit', function(event) {
//         event.preventDefault();
//         showNotification('Sign up successful!');
//         elements.signUpModal.style.display = 'none';
//         elements.signUpForm.reset();
//     });

//     elements.loginForm.addEventListener('submit', function(event) {
//         event.preventDefault();
//         showAgeForm();
//         elements.loginModal.style.display = 'none';
//         elements.loginForm.reset();
//     });

//     elements.ageForm.addEventListener('submit', function(event) {
//         event.preventDefault();
//         let ageValue = document.getElementById('age').value;
//         if (ageValue.trim() === '') {
//             alert('Silakan masukkan umur Anda.');
//             return;
//         }
//         showNotification(`Umur ${ageValue} berhasil disubmit!`);
//         elements.ageForm.style.display = 'none';
//     });

//     elements.searchForm.addEventListener('submit', function(event) {
//         event.preventDefault();
//         const searchTerm = elements.searchInput.value.trim().toLowerCase();
//         if (searchTerm !== '') {
//             searchMusic(searchTerm);
//         }
//     });

//     // Function to display notification
//     function showNotification(message, duration = 3000) {
//         elements.notification.textContent = message;
//         elements.notificationModal.style.display = 'block';
//         setTimeout(function() {
//             elements.notificationModal.style.display = 'none';
//         }, duration);
//     }

//     // Additional functions (searchMusic, displayResults, addToPlaylist, removeFromPlaylist, showAgeForm, etc.)
//     // ...
