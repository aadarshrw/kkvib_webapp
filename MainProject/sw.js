const staticCacheName = 'site-static';
const assets = [
    '/',
    'Home.php',
    'JS/app.js',
    'CSS/Home.css',
    'assets/gandhi.jpg',
    'assets/KKvib.png',
    'Intro.html',
    'CSS/Intro.css',
];
self.addEventListener('install', evt => {
    //console.log('service worker has been installed');
    evt.waitUntil(
        caches.open(staticCacheName).then(cache => {
            console.log('caching shell assets');
            cache.addAll(assets);
        })
    );
});
self.addEventListener('activate', evt => {
    //console.log('service worker has been activated');
});
self.addEventListener('fetch', evt => {
    //console.log('fetch event', evt);
    evt.respondWith(
        caches.match(evt.requests).then(cacheRes => {
            return cacheRes || fetch(evt.request);
        })
    );
});