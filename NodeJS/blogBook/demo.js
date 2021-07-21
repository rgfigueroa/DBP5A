const http = require('http');
const server = http.createServer((req, res) => {
    if (req.url === '/about') {
        res.end('The about page');
    } else if (req.url === '/contact') {
        res.end('The contact page');
    } else if (req.url === '/') {
        res.end('The home page');
    }
    else {
        res.writeHead(404);
        res.end('Page not found');
    }
    //console.log(req.url);
    //res.end('Hola Bienvenido a Nodo.js');
    /*
    res.seHeader("Content-Type", "text/html");
    res.writeHead(200);
    res.end(`<html><body><h1>Esto es HTML</h1></body></html>`);
    */
});
server.listen(3440);