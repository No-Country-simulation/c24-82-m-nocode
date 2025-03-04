

/* Importa los scripts de Firebase necesarios
importScripts('https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/9.0.0/firebase-messaging.js');

// Configuración de Firebase
const firebaseConfig = {
    apiKey: 'AIzaSyA0oYhm2BxZHKjvR6-yLRyl7xLPYmP7aek',
    authDomain: 'waiterclick.firebaseapp.com',
    projectId: 'waiterclick',
    storageBucket: 'waiterclick.firebasestorage.app',
    messagingSenderId: '244274419535',
    appId: '1:244274419535:web:1783066027f1e1c403973a',
    measurementId: 'G-63Q6WXTJLC'
};

// Inicializa Firebase
firebase.initializeApp(firebaseConfig);

// Inicializa el servicio de mensajería
const messaging = firebase.messaging();

// Maneja mensajes en segundo plano
messaging.onBackgroundMessage(function(payload) {
  console.log('Recibido mensaje en segundo plano: ', payload);
  // Personaliza la notificación aquí
  const notificationTitle = 'Título de la notificación';
  const notificationOptions = {
    body: 'Cuerpo de la notificación.',
    icon: '/firebase-logo.png'
  };

  self.registration.showNotification(notificationTitle, notificationOptions);
});*/

importScripts('https://www.gstatic.com/firebasejs/10.7.1/firebase-app-compat.js');
importScripts('https://www.gstatic.com/firebasejs/10.7.1/firebase-messaging-compat.js');

firebase.initializeApp({
  apiKey: 'AIzaSyA0oYhm2BxZHKjvR6-yLRyl7xLPYmP7aek',
  authDomain: 'waiterclick.firebaseapp.com',
  projectId: 'waiterclick',
  storageBucket: 'waiterclick.firebasestorage.app',
  messagingSenderId: '244274419535',
  appId: '1:244274419535:web:1783066027f1e1c403973a',
  measurementId: 'G-63Q6WXTJLC'
});

const messaging = firebase.messaging();

messaging.onBackgroundMessage((payload) => {
    console.log('Mensaje recibido en segundo plano: ', payload);

    self.registration.showNotification(payload.notification.title, {
        body: payload.notification.body,
        icon: '/icon.png',
    });
});
