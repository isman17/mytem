
var CACHE = 'MyTem-precache';
var precacheFiles = [
      'index.html',
      'v1/',
      'v2/',
      'v2/css/index.css',
      'v2/css/material.min.purple.css',
      'v2/css/material.css',
      'v2/css/material.icon.css',
      'v2/img/android-chrome-192x192.png',
      'v2/img/android-chrome-512x512.png',
      'v2/img/apple-touch-icon.png',
      'v2/img/favicon-16x16.png',
      'v2/img/favicon-32x32.png',
      'v2/img/mstile-150x150.png',
      'v2/img/safari-pinned-tab.png',
      'https://fonts.googleapis.com/icon?family=Material+Icons'
    ];

//Install stage sets up the cache-array to configure pre-cache content
self.addEventListener('install', function(evt) {
  console.log('[MyTem] The service worker is being installed.');
  evt.waitUntil(precache().then(function() {
    console.log('[MyTem] Skip waiting on install');
    return self.skipWaiting();
  }));
});


//allow sw to control of current page
self.addEventListener('activate', function(event) {
  console.log('[MyTem] Claiming clients for current page');
  return self.clients.claim();
});

self.addEventListener('fetch', function(evt) {
  console.log('[MyTem] The service worker is serving the asset.'+ evt.request.url);
  evt.respondWith(fromCache(evt.request).catch(fromServer(evt.request)));
  evt.waitUntil(update(evt.request));
});


function precache() {
  return caches.open(CACHE).then(function (cache) {
    return cache.addAll(precacheFiles);
  });
}

function fromCache(request) {
  //we pull files from the cache first thing so we can show them fast
  return caches.open(CACHE).then(function (cache) {
    return cache.match(request).then(function (matching) {
      return matching || Promise.reject('no-match');
    });
  });
}

function update(request) {
  //this is where we call the server to get the newest version of the 
  //file to use the next time we show view
  return caches.open(CACHE).then(function (cache) {
    return fetch(request).then(function (response) {
      return cache.put(request, response);
    });
  });
}

function fromServer(request){
  //this is the fallback if it is not in the cache to go to the server and get it
  return fetch(request).then(function(response){ return response});
}
