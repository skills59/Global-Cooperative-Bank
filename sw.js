self.addEventListener('install', function(e) {
    e.waitUntil(
        caches.open('static').then(function(cache) {
            return cache.addAll([
                "./", 
                "./index.html", 
                "./assets/css/style.css", 
                "./assets/css/splash.css",
                "./assets/images/4.jpg",
                "./assets/images/logo192.png"
            ]);
        })
  );
});

self.addEventListener('fetch', function(e) {
    console.log(e.request.url);
    e.respondWith(
      caches.match(e.request).then(function(response) {
        return response || fetch(e.request);
      })
    );
  });